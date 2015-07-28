<?php namespace controllers;
use core\view;
use helpers\url;

/*
 * Welcome controller
 *
 * @author David Carr - dave@daveismyname.com - http://www.daveismyname.com
 * @version 2.1
 * @date June 27, 2014
 */
class glt extends \core\controller{

	/**
	 * Call the parent construct
	 */

	private $_glt;

	public function __construct(){
		parent::__construct();

		$subdomain = array_shift(explode('.', $_SERVER["SERVER_NAME"]));

		if($subdomain != 'cn' && $subdomain != 'kr') {
			$language = 'en';
		} else {
			$language = $subdomain;
		}

		$this->language->load('glt', $language);

		$this->_glt = new \models\glt();
	}

	/**
	 * Define Index page title and load template files
	 */
	public function index() {
		if(isset($_REQUEST['submit'])) {
			$params = $_REQUEST;

			$data['last_id'] = $this->_glt->pardon_waiver_submit($params);
		}

		$data['pardons_in_pardons'] = $this->language->get('pardons_in_pardons');
		$data['waivers_in_waivers'] = $this->language->get('waivers_in_waivers');
		$data['testimonial'] = $this->language->get('testimonial');

		View::rendertemplate('header', $data);
		View::render('welcome/index', $data);
		View::rendertemplate('footer', $data);
	}

	public function personal_tax() {		
		View::rendertemplate('header', $data);
		View::render('personal/index', $data);
		View::rendertemplate('footer', $data);
	}

	public function express_personal_tax() {		
		View::rendertemplate('header', $data);
		View::render('personal/express/index', $data);
		View::rendertemplate('footer', $data);
	}

	public function personal_tax_issues() {		
		View::rendertemplate('header', $data);
		View::render('personal/personal_issues/index', $data);
		View::rendertemplate('footer', $data);
	}

	public function us_personal_tax_return() {		
		View::rendertemplate('header', $data);
		View::render('personal/us/index', $data);
		View::rendertemplate('footer', $data);
	}

	public function t2_annual_corporate_tax() {
		View::rendertemplate('header', $data);
		View::render('corporate/index', $data);
		View::rendertemplate('footer', $data);
	}

	public function hst_return() {
		View::rendertemplate('header', $data);
		View::render('corporate/hst/index', $data);
		View::rendertemplate('footer', $data);
	}

	public function annual_payroll() {
		View::rendertemplate('header', $data);
		View::render('corporate/payroll/index', $data);
		View::rendertemplate('footer', $data);
	}

	public function financial_statement_preparation() {
		View::rendertemplate('header', $data);
		View::render('corporate/financial_statement/index', $data);
		View::rendertemplate('footer', $data);
	}

	public function business_tax_issues() {
		View::rendertemplate('header', $data);
		View::render('corporate/business_issues/index', $data);
		View::rendertemplate('footer', $data);
	}

	public function business_startup() {
		View::rendertemplate('header', $data);
		View::render('business/index', $data);
		View::rendertemplate('footer', $data);
	}

	public function business_plans() {
		View::rendertemplate('header', $data);
		View::render('accounting/index', $data);
		View::rendertemplate('footer', $data);
	}

	public function business_consultations() {
		View::rendertemplate('header', $data);
		View::render('accounting/consultations/index', $data);
		View::rendertemplate('footer', $data);
	}

	public function about_us() {
		View::rendertemplate('header', $data);
		View::render('about/index', $data);
		View::rendertemplate('footer', $data);
	}

	public function contact() {
		if(isset($_POST['submit'])) {
			$params = $_POST;

			$data = $this->_glt->contact_submit($params);
		}

		View::rendertemplate('header', $data);
		View::render('contact/index', $data);
		View::rendertemplate('footer', $data);
	}

	public function cn() {
		url::redirect('http://cn.globalinktax.com/cn/');
		die();
	}

	public function kr() {
		url::redirect('http://kr.globalinktax.com/kr/');
		die();
	}
}

?>
