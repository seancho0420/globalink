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

		$GLOBALS['glt_address'] = $this->language->get('glt_address');
		$GLOBALS['glt_nav'] = $this->language->get('glt_nav');
	}

	/**
	 * Define Index page title and load template files
	 */
	public function index() {
		// if(isset($_REQUEST['submit'])) {
		// 	$params = $_REQUEST;

		// 	$data['last_id'] = $this->_glt->pardon_waiver_submit($params);
		// }

		$data['glt_home'] = $this->language->get('glt_home');

		View::rendertemplate('header', $data);
		View::render('welcome/index', $data);
		View::rendertemplate('footer', $data);
	}

	public function personal_tax() {
		$data['glt_personal_tax'] = $this->language->get('glt_personal_tax');

		View::rendertemplate('header', $data);
		View::render('personal/index', $data);
		View::rendertemplate('footer', $data);
	}

	public function express_personal_tax() {
		$data['glt_express_personal_tax'] = $this->language->get('glt_express_personal_tax');

		View::rendertemplate('header', $data);
		View::render('personal/express/index', $data);
		View::rendertemplate('footer', $data);
	}

	public function personal_tax_issues() {
		$data['glt_personal_tax_issue'] = $this->language->get('glt_personal_tax_issue');

		View::rendertemplate('header', $data);
		View::render('personal/personal_issues/index', $data);
		View::rendertemplate('footer', $data);
	}

	public function us_personal_tax_return() {
		$data['glt_us_personal_tax_return'] = $this->language->get('glt_us_personal_tax_return');

		View::rendertemplate('header', $data);
		View::render('personal/us/index', $data);
		View::rendertemplate('footer', $data);
	}

	public function t2_annual_corporate_tax() {
		$data['glt_annual_corporate_tax'] = $this->language->get('glt_annual_corporate_tax');

		View::rendertemplate('header', $data);
		View::render('corporate/index', $data);
		View::rendertemplate('footer', $data);
	}

	public function hst_return() {
		$data['glt_hst_return'] = $this->language->get('glt_hst_return');

		View::rendertemplate('header', $data);
		View::render('corporate/hst/index', $data);
		View::rendertemplate('footer', $data);
	}

	public function annual_payroll() {
		$data['glt_annual_payroll'] = $this->language->get('glt_annual_payroll');

		View::rendertemplate('header', $data);
		View::render('corporate/payroll/index', $data);
		View::rendertemplate('footer', $data);
	}

	public function financial_statement_preparation() {
		$data['glt_financial_statement'] = $this->language->get('glt_financial_statement');

		View::rendertemplate('header', $data);
		View::render('corporate/financial_statement/index', $data);
		View::rendertemplate('footer', $data);
	}

	public function business_tax_issues() {
		$data['glt_business_tax_issues'] = $this->language->get('glt_business_tax_issues');

		View::rendertemplate('header', $data);
		View::render('corporate/business_issues/index', $data);
		View::rendertemplate('footer', $data);
	}

	public function business_startup() {
		$data['glt_business_startup'] = $this->language->get('glt_business_startup');

		View::rendertemplate('header', $data);
		View::render('business/index', $data);
		View::rendertemplate('footer', $data);
	}

	public function business_plans() {
		$data['glt_business_plans'] = $this->language->get('glt_business_plans');

		View::rendertemplate('header', $data);
		View::render('accounting/index', $data);
		View::rendertemplate('footer', $data);
	}

	public function business_consultations() {
		$data['glt_business_consultations'] = $this->language->get('glt_business_consultations');

		View::rendertemplate('header', $data);
		View::render('accounting/consultations/index', $data);
		View::rendertemplate('footer', $data);
	}

	public function about_us() {
		$data['glt_about_us'] = $this->language->get('glt_about_us');
		
		View::rendertemplate('header', $data);
		View::render('about/index', $data);
		View::rendertemplate('footer', $data);
	}

	public function contact() {
		$data['glt_contact'] = $this->language->get('glt_contact');
		
		if(isset($_POST['contact_submit'])) {
			$params = $_POST;

			$data['contact_submit'] = $this->_glt->contact_submit($params);
		} else if(isset($_POST['tax_service_submit'])) {
			$params = $_POST;

			$data['tax_service_submit'] = $this->_glt->tax_service_submit($params);
		}

		View::rendertemplate('header', $data);
		View::render('contact/index', $data);
		View::rendertemplate('footer', $data);
	}

	public function noncanadians() {
		if(isset($_POST['submit'])) {
			$params = $_POST;

			$data = $this->_glt->noncanadians_submit($params);
		}

		View::rendertemplate('header', $data);
		View::render('noncanadians/index', $data);
		View::rendertemplate('footer', $data);
	}

	public function cn() {
		header("Location: http://cn.globalinktax.com/cn/");
		die();
	}

	// public function kr() {
	// 	header("Location: http://kr.globalinktax.com");
	// 	die();
	// }
}

?>
