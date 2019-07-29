<!DOCTYPE html>
<html>
<head>
	<title>My Cart</title>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<style>
		.heading
		{
			text-align: center;
			font-size: 40px;
			padding: 20px;
		}
		.cart
			{
				text-align: right;	
				font-size: 40px;
				color: black;
			}
			header
			{
				font-size: 60px;
				padding: 10px;
				background-color: #D39C3B;
			}
			body
			{
				background-color: #F7E8DC;
			}
			table {
		  border-collapse: collapse;
		  width: 100%;
		  text-align: center;
		}


		th, td {
		  text-align: left;
		  padding: 8px;
		  text-align: center;
		}
		tr:nth-child(even) {background-color: #F1C795;}	

		th
		{
			background-color: #D39C3B;
		}
		button
		{
			background-color: #D39C3B;
			color: black;
			font-size: 30px;
			padding: 10px;
			text-align: center;
			margin: 20px;
		}
	</style>


</head>
<body>

	<header>
		<div class="row" >
			<div class="col-md-4"><a href="firstpage.php" style="color: black;">Book Store</a></div>
			<div class="col-md-4"></div>
			<div class="col-md-4 cart"><a href="#"><img src="cart.png" width="25%"></a></div>

			
		</div>
	</header>

	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8 heading"> Your's Book Cart</div>
		<div class="col-md-2"></div>
	</div>

	<div class="row" ng-app="myapp" ng-controller="cartoutput">
		<table>
			<tr>
					<th>BookID</th>
					<th>Title</th>
					<th>Authors</th>
					<th>Average_Rating</th>
					<th>ISBN</th>
					<th>Language_Code</th>
					<th>Ratings_Count</th>
					<th>Price</th>
				</tr>
				<tr ng-repeat = "x in details | filter: search">
					<td>{{x.bookID}}</td>
					<td>{{x.title}}</td>
					<td>{{x.authors}}</td>
					<td>{{x.average_rating}}</td>
					<td>{{x.isbn}}</td>
					<td>{{x.language_code}}</td>
					<td>{{x.ratings_count}}</td>
					<td>{{x.price}}</td>
				</tr>
		</table>
	</div>
	<div class="row">
		
		<div class="col-md-5"></div>
		<div class="col-md-2 checkout"><button>Checkout</button></div>
		<div class="col-md-5"></div>
	</div>


<script src="myapp.js"></script>
		<script src="controller.js"></script>


</body>
</html>