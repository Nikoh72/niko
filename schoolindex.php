<!DOCTYPE html>
<html>
<head>
	<title>system</title>
	<script src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<meta name="viewport" content="width=device-with">
	<style type="text/css">
	div.container{
			width: 100%;
		
		}
		header,footer{
		/*if you want to style two elements the same way do with commas*/
		color: #ffffff;
		background-color: #408080;
		text-align: center;
		/*clear is an attribute that is used to specify on which part you dont want a floating item*/
		clear: left;
		padding: 2em;
		color: white;
		}
		nav{	float: left;
			margin: 0;
			padding: 2em;
			max-width: 200px;
}
article{
			margin-left: 200px;
			border-left: 2px solid black;
			padding: 2em;
			background-color: gray;
			/*overflow is used to add scrollbars*/
			overflow: hidden;
}
	</style>
</head>
<body>
	<div class="container">
		<header>Lamba lolo high skull</header>
		<!--BELOW IS THE SECTION FOR the navigation this is where your links to other segments in the web page-->
		<nav>
			<!--we place then createated an unordered list where we place our navigation links-->
			<ul>
				<!--#refers to an id selector-->
				<li class="active"><a  href="#">homepage</a></li>
				<li><a href="https://www.emobilis.ac.ke">aboutus</a></li>
				<li><a href="#ff">contactus</a></li>
				
			</ul>
		</nav>
		<article>
			
			<h1>This summer grading system</h1>
		</article>
		<hr>
		<div class="row">
			<div class="col-sm-4">
				<img src="images.jpeg" class="img-circle" height="200px" width="200px"><br>
				<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				te irure dolor in reprehenderit in voluptate velit esse
				c
			</p></div>
			<div class="col-sm-4">
				<img src="high-school.jpg" class="img-circle" height="200px" width="200px"><br>
				<p>
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis au
			</p></div>
			<div class="col-sm-4">
				<img src="school_supplies2.jpg" class="img-circle" height="200px" width="200px"><br>
				<p>
				illum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p></div>
				</div>
				<form action="calculate.php" method="POST">
  	Maths: <br>
  	<input type="number" name="maths" required=""placeholder="Enter your maths score" maxlength="3">
  	<br>
  	English: <br>
  	<input type="number" name="English" required=""placeholder="Enter your english score" maxlength="3">	
  	<br>
  	Kiswahili: <br>
  	<input type="number" name="Kiswahili" required=""placeholder="Enter your maths score" maxlength="3">
  	<br>
  	Physics: <br>
  	<input type="number" name="Physics" required=""placeholder="Enter your maths score" maxlength="3">
  	<br>
  	Chemistry: <br>
  	<input type="number" name="Chemistry" required=""placeholder="Enter your chemistry score" maxlength="3">
  	<br>
  	Biology: <br>
  	<input type="number" name="Biology" required=""placeholder="Enter your biology score" maxlength="3">
  	<br>
  	Geography: <br>
  	<input type="number" name="geography" required=""placeholder="Enter your Geography score" maxlength="3">
  	<br>
    <input type="submit" value="Calculate your grades"><input type="reset"
    value="reset">
    </form>

			<footer id="ff">
				copyright &copy;nikoh <br>
			0740245720 <br>
			&reg;nairobi
			</footer>

</body>
</html>