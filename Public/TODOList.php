<?php
var_dump($_GET); 
var_dump($_POST);
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Todo List Items</title>
		<link rel="stylesheet" type="text/css" href="/css/style.css">
    </head>

    <body>
    	<h1>TODO List</h1>

		<ol>
    		<li>go to the store</li>
		    <li>wash the dishes</li>
		    <li>fix the car</li>
		</ol>

		<form method="POST" action="TODOList.php">
			<p>
				<label for="something">ToDo Item</label>
				<input id="something" name="something" type="text">
				<br>	
				<input type="submit" value="Login">
			</p>


		</form>	

	</body>

</html>




