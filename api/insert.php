<?php 
$data = json_decode(file_get_contents("php://input"));
$servername = "localhost";
$username = "root";
$password = "1212";
$dbname = "angulardb";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


$tbl_employess = "CREATE TABLE IF NOT EXISTS employess (
              
			  name VARCHAR(16) NOT NULL,
			  dept VARCHAR(255) NOT NULL,
			  
			  
			  area VARCHAR(255) NULL,
			  status VARCHAR(255) NULL,
			 
			  contact VARCHAR(255) NULL,
			  salary VARCHAR(255) NOT NULL,
			 
             )";

$sql = "INSERT INTO employees (name, dept, area, status,contact, salary) 
VALUES ('$data->name', '$data->dept', '$data->area', '$data->status','$data->contact', '$data->salary')";
$qry = $conn->query($tbl_employess,$sql);
$conn->close();
?>