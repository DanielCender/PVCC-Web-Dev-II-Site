<!DOCTYPE HTML>
<html>
<head>

<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta name="author" content="daniel cender" >
    <meta name="description" content="This page uses a MySQL db to generate and manipulate data.">
    <meta name="keywords" content="data, databases, sql, mysql, dynamic code, php">
<title> PHP Dynamic Page - Using MySQL  </title>
<style>
    table {
        width: 80%;
        margin: auto;
        border: blue solid 2px;
        border-collapse: collapse;
    }
    th, td {
        padding: 10px;
        border: blue 4px solid;
        text-align: center;
    }
    

</style>

<script>


</script>

</head>
<body>


<?php
   // Methods and connectors at https://www.w3schools.com/php/php_mysql_select.asp 
    // Setup db table at https://e-commerce.paradisevalley.edu/phpmyadmin/
    // Connection vars
$servername = "localhost";
$username = "student"; 
$password = "2letmystudentsin!"; 
$dbname = "cis233";
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if($conn->connect_error) {
        die("connection failed: " . $conn_connect_error);
    }
        echo "Connected successfully";    

    
    
    $sql = "SELECT * FROM magnets";
    
    $result = $conn->query($sql);
    
    echo "<table>
        <tr>
        <th>Part Number</th>
        <th>Name</th>
        <th>Description</th>
        <th>Picture</th>
        <th>Price</th>
        </tr>";
        
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
                echo "<td>" . $row['pnumber'] . "</td>";
                echo "<td>" . $row['pname'] . "</td>";
                echo "<td>" . $row['pdescribe'] . "</td>";
                echo "<td> <img src='images/" . $row['pgraphic'] . "' alt='" . $row['pname'] . "' /></td>";
                echo "<td> $" . $row['price'] . "</td>";

            echo "<td><form
            action='http://ww9.aitsafe.com/cf/add.cfm'
            method='post'>
            <input type='hidden' name'userid' value='B6191303'>
            <input name='product' type='hidden' value='" . $row['pname'] . " '>
            <input name='price' type='hidden' value='" . $row['price'] . " '>
            <p>How many?</p>
            <input name='qty' type='text' value='0' size='1' />
            <input type='submit' value='Add to Cart'></form>";
            echo "</td>";
            echo "</tr>";
        }
    } else {
        echo "no records found";
    }
    echo "</table>";
    
    $conn->close();
        
?>
</body>

</html>







