<!DOCTYPE html>
<html>
<head>
	<title>Book Store</title>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">


	<style>
		.heading
		{
			font-size: 50px;
			text-align: center;
			padding 20px;
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

		.inputbox
		{
			width: 600px;
			padding: 5px;

		}
		.find
		{
			margin: 30px;
			font-size: 30px;
		}
		body
		{
			background-color: #F7E8DC;
			font-family: 'Josefin Sans', sans-serif;
		}
		.findbook
		{
			font-size: 35px;
			text-align: right;
		}
		.star-ratings-css {
			  unicode-bidi: bidi-override;
			  color: #c5c5c5;
			  font-size: 25px;
			  height: 25px;
			  width: 100px;
			  margin: 0 auto;
			  position: relative;
			  padding: 0;
			  text-shadow: 0px 1px 0 #a2a2a2;
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
			button
			{
				background-color: #553A0A;
				color: white;
			}


	</style>

</head>
<body>


	<header>
		<div class="row" >
			<div class="col-md-4"><a href="firstpage.php" style="color: black;">Book Store</a></div>
			<div class="col-md-4"></div>
			<div class="col-md-4 cart"><a href="cartfront.php"><img src="cart.png" width="25%"></a></div>

			
		</div>
	</header>



	<div class="row heading">

		<div class = "col-md-2"></div>
		<div class = "col-md-8">Welcome to the world of Books!!</div>
		<div class = "col-md-2"></div>

		
		
	</div>
	




	<div ng-app="myapp" ng-controller="jsonoutput">

		<div class="row find">

		<div class = "col-md-1"></div>
		<div class = "col-md-3 findbook">Find a Book</div>
		<div class = "col-md-5"><input type="text" name="bookname" ng-model="search" placeholder="Enter Book name" class="inputbox" ></div>
		<div class = "col-md-2"></div>
		<div class = "col-md-1"></div>

		
		
		</div>
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
					<th>Buy/Not</th>
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
					<td><button>Add to cart</button></td>
					

				</tr>
			<table>
			
		</div>

		<script src="myapp.js"></script>
		<script src="controller.js"></script>




</body>
</html>