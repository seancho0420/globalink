/* Coded by Sean */

'use strict';

(function(){
	var app = angular.module('globalLinkTax', ['glt-home']);

	app.controller('homeController', function($scope, $http){
		$scope.info = [];
		var responsePromise = $http.get('json/globalinktax.json');

		responsePromise.success(function(data, status, headers, config){
			$scope.info = data;
		});

		responsePromise.error(function(data, status, headers, config){
			alert("Data Load Failed!");
		});		
	});	
})();