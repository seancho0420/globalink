<?php
if(file_exists('vendor/autoload.php')){
	require 'vendor/autoload.php';
} else {
	echo "<h1>Please install via composer.json</h1>";
	echo "<p>Install Composer instructions: <a href='https://getcomposer.org/doc/00-intro.md#globally'>https://getcomposer.org/doc/00-intro.md#globally</a></p>";
	echo "<p>Once composer is installed navigate to the working directory in your terminal/command promt and enter 'composer install'</p>";
	exit;
}

if (!is_readable('app/core/config.php')) {
	die('No config.php found, configure and rename config.example.php to config.php in app/core.');
}

/*
 *---------------------------------------------------------------
 * APPLICATION ENVIRONMENT
 *---------------------------------------------------------------
 *
 * You can load different configurations depending on your
 * current environment. Setting the environment also influences
 * things like logging and error reporting.
 *
 * This can be set to anything, but default usage is:
 *
 *     development
 *     production
 *
 * NOTE: If you change these, also change the error_reporting() code below
 *
 */
	define('ENVIRONMENT', 'production');
/*
 *---------------------------------------------------------------
 * ERROR REPORTING
 *---------------------------------------------------------------
 *
 * Different environments will require different levels of error reporting.
 * By default development will show errors but production will hide them.
 */

if (defined('ENVIRONMENT')){

	switch (ENVIRONMENT){
		case 'development':
			error_reporting(E_ALL);
		break;

		case 'production':
			error_reporting(0);
		break;

		default:
			exit('The application environment is not set correctly.');
	}

}

//initiate config
new \core\config();

//create alias for Router
use \core\router as Router,
    \helpers\url as Url;

//define routes
Router::any('', '\controllers\glt@index');

Router::any('/personal', '\controllers\glt@personal_tax');
Router::any('/personal/express', '\controllers\glt@express_personal_tax');
Router::any('/personal/personal_issues', '\controllers\glt@personal_tax_issues');
Router::any('/personal/us', '\controllers\glt@us_personal_tax_return');

Router::any('/corporate', '\controllers\glt@t2_annual_corporate_tax');
Router::any('/corporate/hst', '\controllers\glt@hst_return');
Router::any('/corporate/payroll', '\controllers\glt@annual_payroll');
Router::any('/corporate/financial_statement', '\controllers\glt@financial_statement_preparation');
Router::any('/corporate/business_issues', '\controllers\glt@business_tax_issues');

Router::any('/business', '\controllers\glt@business_startup');

Router::any('/accounting', '\controllers\glt@business_plans');
Router::any('/accounting/consultations', '\controllers\glt@business_consultations');

Router::any('/about', '\controllers\glt@about_us');

Router::any('/contact', '\controllers\glt@contact');


Router::any('/cn', '\controllers\glt@cn');
Router::any('/ch', '\controllers\glt@cn');
Router::any('/kr', '\controllers\glt@kr');

//if no route found
Router::error('\core\error@index');

//turn on old style routing
Router::$fallback = false;

//execute matched routes
Router::dispatch();
