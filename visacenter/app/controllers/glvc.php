<?php namespace controllers;
use core\view;

/*
 * Welcome controller
 *
 * @author David Carr - dave@daveismyname.com - http://www.daveismyname.com
 * @version 2.1
 * @date June 27, 2014
 */
class glvc extends \core\controller{

	/**
	 * Call the parent construct
	 */

	private $_glvc;

	public function __construct(){
		parent::__construct();

		$subdomain = array_shift(explode('.', $_SERVER["SERVER_NAME"]));

		if($subdomain != 'cn' && $subdomain != 'kr') {
			$language = 'en';
		} else {
			$language = $subdomain;
		}

		$this->language->load('glvc', $language);

		$this->_glvc = new \models\glvc();
	}

	/**
	 * Define Index page title and load template files
	 */
	public function index() {
		$data['citizen_countries'] = $this->language->get('citizen_countries');
		$data['passport_photo_service'] = $this->language->get('passport_photo_service');
		$data['one_stop_visa_center'] = $this->language->get('one_stop_visa_center');
		$data['testimonial'] = $this->language->get('testimonial');
		$data['tab_info'] = $this->language->get('tab_info');
		
		// from db
		$data['travel_countries'] = $this->_glvc->get_countries();
		
		View::rendertemplate('header', $data);
		View::render('welcome/index', $data);
		View::rendertemplate('footer', $data);
	}

	public function travel_visa() {
		$citizen = isset($_REQUEST['citizen_of']) ? $_REQUEST['citizen_of'] : '';
		$travel = isset($_REQUEST['travel_to']) ? $_REQUEST['travel_to'] : '';

		$data['citizen_countries'] = $this->language->get('citizen_countries');
		
		// from db
		$data['travel_countries'] = $this->_glvc->get_countries();
		$data['visa_info'] = $this->_glvc->get_visainfo($citizen, $travel);

		$data['residency'] = $this->language->get('residency');
		$data['employment_status'] = $this->language->get('employment_status');

		View::rendertemplate('header', $data);

		if(isset($_REQUEST['apply_visa'])) {
			$params = $_REQUEST;
			$params['attached'] = $_FILES;

			$data['visa_applied'] = $this->_glvc->apply_visa($params);

			View::render('visa/applied', $data);
		} else {
			View::render('visa/index', $data);
		}
		
		View::rendertemplate('footer', $data);
	}

	public function passport_photo() {
		$data['passport_photo'] = $this->language->get('passport_photo');
		$data['passport_photo_service'] = $this->language->get('passport_photo_service');
		$data['passport_photo_price'] = $this->language->get('passport_photo_price');
				
		View::rendertemplate('header', $data);
		View::render('passport_photo/index', $data);
		View::rendertemplate('footer', $data);
	}

	public function about() {
		$data['about_us'] = $this->language->get('about_us');
		$data['our_team'] = $this->language->get('our_team');
		$data['why_choose_us'] = $this->language->get('why_choose_us');

		View::rendertemplate('header', $data);
		View::render('about/index', $data);
		View::rendertemplate('footer', $data);
	}

	public function contact() {
		if(isset($_REQUEST['submit'])) {
			$params = $_REQUEST;

			$data = $this->_glvc->contact_submit($params);
		}

		View::rendertemplate('header', $data);
		View::render('contact/index', $data);
		View::rendertemplate('footer', $data);
	}
}

?>
