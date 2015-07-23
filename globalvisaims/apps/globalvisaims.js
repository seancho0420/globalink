/* Coded by Sean */

'use strict';

(function(){
	var app = angular.module('gvi-directives', []);

	app.directive('contactInfo', function(){
		return {
			restrict: 'E',
			templateUrl: 'partials/contact.html'
		};
	});

	app.directive('mainLogo', function(){
		return {
			restrict: 'E',
			templateUrl: 'partials/main-logo.html'
		};
	});

	app.directive('officeHours', function(){
		return {
			restrict: 'E',
			templateUrl: 'partials/office-hours.html'
		};
	});

	app.directive('aboutUs', function(){
		return {
			restrict: 'E',
			templateUrl: 'partials/aboutus.html'
		};
	});

	app.directive('news', function(){
		return {
			restrict: 'E',
			templateUrl: 'partials/news.html'
		};
	});

	app.directive('immiInfo', function(){
		return {
			restrict: 'E',
			templateUrl: 'partials/immi-info.html'
		};
	});

	app.directive('staffMember', function(){
		return {
			restrict: 'E',
			templateUrl: 'partials/staff.html'
		};
	});

	app.directive('csModal', function(){
		return {
			restrict: 'E',
			templateUrl: 'partials/cs-modal.html'
		};
	});
})();
