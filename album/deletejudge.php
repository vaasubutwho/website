<?php 
 $servername = "localhost:8889";
 $username = "root";
 $password = "vashuhero1";
 $dbname = "lawyer";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 
$clientid=$_GET['courtid'];
// sql to delete a record
$sql = "DELETE FROM court WHERE courtid=$clientid";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>