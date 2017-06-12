(function(){
	var app = angular.module('iot', [ ]);
	app.controller('MyController', function($http, $scope){
		
		$scope.product = "hi";
		$scope.nim= "";
		$scope.ta = "";
	
		$scope.getOn = function(){
			$http({
				url: 'http://172.22.99.222/'+$scope.nim,
				method: 'GET'
			}).success(function(data){
				$scope.status = data.;
				console.log(data.);
			});
		}
		
		
	});

})();

