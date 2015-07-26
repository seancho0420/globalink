/* Coded by Sean */

'use strict';

(function(){
	var app = angular.module('glt-home', []);

	app.directive('logoTitle', function(){
		return {
			restrict: 'E', // 'E' is an element
			templateUrl: 'partials/logo-title.html'
		};
	});

	app.directive('contactImg', function(){
		return {
			restrict: 'E',
			templateUrl: 'partials/contact-img.html'
		};
	});

	app.directive('contactInfo', function(){
		return {
			restrict: 'E',
			templateUrl: 'partials/contact-info.html'
		};
	});

	app.directive('priceList', function(){
		return {
			restrict: 'A', // 'A' is an attribute
			templateUrl: 'partials/price-list.html'
		};
	});

	app.directive('fileDown', function(){
		return {
			restrice: 'A',
			templateUrl: 'partials/file-down.html'
		};
	});

	app.directive('contentText', function(){
		return {
			restrict: 'A',
			templateUrl: 'partials/content.html'
		};
	});

	app.directive('cologoImg', function(){
		return {
			restrict: 'A',
			templateUrl: 'partials/cologo-img.html'
		};
	});

	app.directive('serviceInc', function(){
		return {
			restrict: 'A',
			templateUrl: 'partials/service.html'
		};
	});
	
})();