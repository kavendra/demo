<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = 'Select * from employee';

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["name"];
    }
} else {
    echo "0 results";
}
$conn->close();

$number = 6;                   /*number to get factorial */
 $fact   = 1;
 for($k=1;$k<=$number;++$k)    
       {
          $fact =  $fact*$k;
       }
 echo "Factorial of $number is ".$fact
dfdsfsdf
?>