<?php
require_once("showing.php");
?>

<center>
  
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "php_prectices";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
  if(isset($_POST["upd"]))
{
  $fnm=$_POST["fnm"];
  $lnm=$_POST["lnm"];
  $em=$_POST["em"];
  $pas=$_POST["pass"];
  $ph=$_POST["mob"];
  $add=$_POST["add"];

   // upload photo or images 
   $tmp_name=$_FILES["img"]["tmp_name"];
   $path="updateimages/".$_FILES["img"]["name"];
   move_uploaded_file($tmp_name,$path);

  

  $sql = "UPDATE `compny_task` SET first_name='$fnm',last_name='$lnm',email='$em',password='$pas',mobile='$ph',address='$add',image='$path' WHERE id = $id";
  if($sql){
    echo "<script>
    alert('update profile succesfully')
    window.location='index.php';
    </script>";
  }
}
  // Prepare statement
  $stmt = $conn->prepare($sql);

  // execute the query
  $stmt->execute();

  // echo a message to say the UPDATE succeeded
  // echo $stmt->rowCount() . " records UPDATED successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>


<?php
        foreach($result as $row)
         {
                  
?>
<form method="post" enctype="multipart/form-data">

         <input type="text" name="fnm" value="<?php echo $row["first_name"]; ?>" ><br>
         <input type="text"  name="lnm" value="<?php echo $row["last_name"]; ?>"> <br>
         <input type="email"  name="em" value="<?php echo $row["email"]?>"> <br>
         <input type="password"  name="pass" value="<?php echo $row["password"]?>"> <br>
         <input type="number" name="mob" value="<?php echo $row["mobile"]; ?>"><br>
         <input type="text" name="add" value="<?php echo $row["address"]; ?>"> <br>
        <img src="<?php echo $row["image"];?>" style="height:100px; width:100px"><br>
        <input type="file" name="img"><br><br>
         <input type="submit" name="upd">



         <?php     
         }
              ?>
              
          </form>
      </div>

      </center>