


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

$sql = "SELECT * FROM `compny_task` where id= $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    // echo "id: " . $row["id"]. " - Name: " . $row["first_name"].  "  -lastname:". $row["last_name"]. "   -email: " . $row["email"].  "  -mobileno:".$row["mobile"].  "  -address:".$row["address"].  "<br>";

    
  }
}

         



else {
  echo "0 results";
}
$conn->close();

?>




    </center>




          








