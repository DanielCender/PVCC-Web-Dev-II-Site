<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="author" content="daniel cender">
	<meta name="Keywords" content="php, myAdmin, sql, mysql, programming, admin, dynamically generated, generated">
	<meta name="Description" content="This is a dynamically generated web page using PHP to offer a fully-fledged shopping cart.">
    <title>Artist Supplies - PHP Generated Page</title>
</head>
<body>
	<!-- Form to filter items -->
	<form action="" method="post">
		Filter
		<select name="filter">
			<option value="lowHigh">Price: Low to High</option>
			<option value="highLow">Price: High to Low</option>
		</select>
		<input type="submit" value="Select"/>
	</form>

<?php

$servername = "localhost";
$username = "student";
$password = "2letmystudentsin!";
$dbname = "cis233";
    
	/*
    // create new MySQL connection
$conn = new mysqli($servername, $username, $password, $dbname);
    
	// kill script if connection to MySQL fails
    if($conn->connect_error) {
        die("Connection failed: " . $conn_connect_error);
    }
        echo "Connected successfully";
    
	// Switch to select what order to frame the items
	if(isset($_POST['filter'])) {
		$selectOrder = $_POST['filter'];
		switch($selectOrder) {
			case 'lowHigh':
				$sql = "SELECT * FROM daniel ORDER BY ASC";
				break;
			case 'highLow':
				$sql = "SELECT * FROM daniel ORDER BY DESC";
		}
	} else {
		// If filter not set, gather all rows as usual
    	$sql = "SELECT * FROM daniel";
	}
	
	$result = $conn->query($sql);
    
	echo "<table>
		<tr>
		<th>Product ID</th>
		<th>Product Name</th>
		<th>Description</th>
		<th>Image</th>
		<th>Price</th>
		<tr>";
	
	if($resutl->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			echo "<tr>";
				echo "<td>" . $row['pid'] . "</td>";
				echo "<td>" . $row['pname'] . "</td>";
				echo "<td>" . $row['pdescription'] . "</td>";
				echo "<td> <img src='" . $row['pgraphic'] . "' alt='" . $row['pname'] . "' /></td>";
				echo "<td>" . $row['price'] . "</td>";
			
			echo "<td><form action='http://ww9.aitsafe.com/cf/add.cfm' method='post'>
			<input type='hidden' name='userid' value='B6191303'>
			<input type='hidden' name='product' value='" . $row['pname'] . " '>
			<input type='hidden' name='price' value='" . $row['price'] . "' >
			<p>How many?</p>
			<input name='qty' type='text' value='0' size='1' />
			<input name='submit' value='Add to Cart'></form>";
			echo "</td>";
            echo "</tr>";
		}
	} else {
		echo "no records found";
	}
	echo "</table>";
	
	$conn->close();
	*/
?>

</body>
</html>