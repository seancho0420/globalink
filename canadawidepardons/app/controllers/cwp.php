<?php namespace controllers;
use core\view;

/*
 * Welcome controller
 *
 * @author David Carr - dave@daveismyname.com - http://www.daveismyname.com
 * @version 2.1
 * @date June 27, 2014
 */
class cwp extends \core\controller{

	/**
	 * Call the parent construct
	 */

	private $_cwp;

	public function __construct(){
		parent::__construct();

		$subdomain = array_shift(explode('.', $_SERVER["SERVER_NAME"]));

		if($subdomain != 'cn' && $subdomain != 'kr') {
			$language = 'en';
		} else {
			$language = $subdomain;
		}

		$this->language->load('cwp', $language);

		$this->_cwp = new \models\cwp();
	}

	/**
	 * Define Index page title and load template files
	 */
	public function index() {
		if(isset($_REQUEST['submit'])) {
			$params = $_REQUEST;

			$data['last_id'] = $this->_cwp->pardon_waiver_submit($params);
		}

		$data['pardons_in_pardons'] = $this->language->get('pardons_in_pardons');
		$data['waivers_in_waivers'] = $this->language->get('waivers_in_waivers');
		$data['testimonial'] = $this->language->get('testimonial');

		View::rendertemplate('header', $data);
		View::render('welcome/index', $data);
		View::rendertemplate('footer', $data);
	}

	public function pardons() {
		if(isset($_REQUEST['submit'])) {
			$params = $_REQUEST;

			$data['last_id'] = $this->_cwp->pardon_waiver_submit($params);
		}

		$data['pardons_in_pardons'] = $this->language->get('pardons_in_pardons');
		$data['why_choose_us'] = $this->language->get('why_choose_us');
		$data['pardon_can_help_you_in'] = $this->language->get('pardon_can_help_you_in');
		
		View::rendertemplate('header', $data);
		View::render('pardons/index', $data);
		View::rendertemplate('footer', $data);
	}

	public function waivers() {
		if(isset($_REQUEST['submit'])) {
			$params = $_REQUEST;

			$data['last_id'] = $this->_cwp->pardon_waiver_submit($params);
		}

		$data['waivers_in_waivers'] = $this->language->get('waivers_in_waivers');
		$data['why_choose_us'] = $this->language->get('why_choose_us');

		View::rendertemplate('header', $data);
		View::render('waivers/index', $data);
		View::rendertemplate('footer', $data);
	}

	public function faq() {
		$data['faqs'] = $this->language->get('faqs');

		View::rendertemplate('header', $data);
		View::render('faq/index', $data);
		View::rendertemplate('footer', $data);
	}

	public function about() {
		$data['about_us'] = $this->language->get('about_us');
		$data['our_team'] = $this->language->get('our_team');

		View::rendertemplate('header', $data);
		View::render('about/index', $data);
		View::rendertemplate('footer', $data);
	}

	public function contact() {
		if(isset($_REQUEST['submit'])) {
			$params = $_REQUEST;

			$data = $this->_cwp->contact_submit($params);
		}

		View::rendertemplate('header', $data);
		View::render('contact/index', $data);
		View::rendertemplate('footer', $data);
	}

	public function tnc() {
		$data['terms_and_conditions'] = $this->language->get('terms_and_conditions');

		View::rendertemplate('header', $data);
		View::render('tnc/index', $data);
		View::rendertemplate('footer', $data);
	}

	public function privacy_policy() {
		$data['policies_and_information'] = $this->language->get('policies_and_information');
		$data['government_fees'] = $this->language->get('government_fees');
		$data['general_provisions'] = $this->language->get('general_provisions');
		$data['limitations_of_liability'] = $this->language->get('limitations_of_liability');
		$data['indemnification'] = $this->language->get('indemnification');
		$data['trademarks_copyright'] = $this->language->get('trademarks_copyright');
		$data['privacy_policy'] = $this->language->get('privacy_policy');

		View::rendertemplate('header', $data);
		View::render('privacy_policy/index', $data);
		View::rendertemplate('footer', $data);
	}
}

?>
