<?php
$servername = "localhost";
$username = "root";
$password = "1212";
$dbname = "angularcrud";
$conn = new mysqli($servername, $username, $password, $dbname);
$tbl_employess = "CREATE TABLE IF NOT EXISTS employess (
              
			  name VARCHAR(16) NOT NULL,
			  dept VARCHAR(255) NOT NULL,
			  
			  
			  area VARCHAR(255) NULL,
			  status VARCHAR(255) NULL,
			 
			  contact VARCHAR(255) NULL,
			  salary VARCHAR(255) NOT NULL,
			 
             )";

$sql = "SELECT * FROM employees ORDER BY id DESC";
$result = $conn->query($tbl_employess,$sql);
if ($result->num_rows > 0) {
    // output data of each row
     $data = array() ;
    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
} else {
    echo "0 results";
}
echo json_encode($data);
$conn->close();
?>