
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

$sql = "SELECT * FROM `compny_task`";
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




</body>
</html>




<div class="container">
        <h2>Striped Rows</h2>
        <p>The .table-striped class adds zebra-stripes to a table:</p>            
        <p>show</p>
        <table class="table table-striped">
          <thead>
            <tr>
              <th>id</th>
              <th>Firstname</th>
              <th>Lastname</th>
              <th>Email id</th>
              <th>Phone no</th>
              <th>Address</th>
              <th>image</th>

              <th>Action</th>
              
            </tr>
          </thead>
          <tbody>
         <?php
        foreach($result as $row)
         {
            
?>
<tr>
        <td><?php echo $row["id"]; ?> </td>
         <td><?php echo $row["first_name"]; ?> </td>
         <td><?php echo $row["last_name"]; ?> </td>
         <td><?php echo $row["email"]; ?> </td>
         <td><?php echo $row["mobile"]; ?> </td>
         <td><?php echo $row["address"]; ?> </td>
         <td><img src="<?php echo $row["image"]; ?>"style="width:200px; height:80px"></td>

         <td><a href="delete.php?id=<?php echo $row["id"]; ?>" class="btn btn-sm btn-danger"><span class="bi bi-trash"></span></a> | <a href="updete.php?id=<?php echo $row["id"]; ?>" class="btn btn-sm btn-info"><span class="bi bi-pencil"></span></a></td>
         </tr>
         <?php     
         }
              ?>
          </tbody>
        </table>
      </div>    








