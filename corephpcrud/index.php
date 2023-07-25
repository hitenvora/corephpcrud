
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "php_prectices";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  if(isset($_POST["btn"]))
  {
      $fnm=$_POST["fnm"];
      $lnm=$_POST["lnm"];
      $em=$_POST["email"];
      $pass=$_POST["password"];
      $mob=$_POST["mobile"];
      $add=$_POST["address"];
      // upload photo or images 
    $tmp_name=$_FILES["img"]["tmp_name"];
    $path="images/".$_FILES["img"]["name"];
    move_uploaded_file($tmp_name,$path);
  
      $sql = "INSERT INTO compny_task (first_name, last_name, email, password, mobile, address, image)
      VALUES ('$fnm', '$lnm', '$em','$pass','$mob','$add','$path')";   
  $conn->exec($sql);
  if($conn)
  {
      echo "<script>
      alert('our data added sucessfully')
      window.location='index.php';
      </script>";
  }
}


} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">


    
</head>
<body>
<center>

<form method="post" enctype="multipart/form-data">
    <input type="text" name="fnm" placeholder="enter your name" required><br>
    <input type="text" name="lnm" placeholder="enter your lastname" required><br>
    <input type="email" name="email" placeholder="enter your email" required><br>
    <input type="password" name="password" placeholder="enter your password" required><br>
    <input type="number" name="mobile" placeholder="enter your moblie number" required><br>
    <input type="text" name="address" placeholder="enter your address" required><br>
    <input type="file" name="img" required style="margin-left: 100px;"><br><br>


    <input type="submit" name="btn">
    




</form>


</center>
</body>
</html>
<?php
require_once("show.php");
?>










    






   