flag.controller("jsonoutput",function($scope,$http)
{
	$http.get("book.php").then(function(response)
	{
		$scope.details = response.data.record;
	});
});

flag.controller("cartoutput",function($scope,$http)
{
	$http.get("cart.php").then(function(response)
	{
		$scope.details = response.data.record;
	});
});