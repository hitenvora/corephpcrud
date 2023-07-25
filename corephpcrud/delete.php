
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "php_prectices";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$id=$_GET["id"];
// sql to delete a record
$sql = "DELETE FROM `compny_task` WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    echo "this account was succesfully delete";
    header("refresh:1,index.php");
    
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>