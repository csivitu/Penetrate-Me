<?php
include 'config.php';
$uname= ["username"];
$email= ["email"];
$balance= ["balance"];

$sql='select * from users where username="'.$uname.'";';
$rs=mysqli_Query($connection,$sql);
if(mysqli_num_rows($rs)==0)
{
$query="INSERT INTO users(username, email, balance) VALUES ('".$uname."','".$email."',".$balance.");";
if ($connection->query($query) === TRUE) {
  ?>
  <script>
  alert("Data Inserted Successfully!");
  window.location="../dashboard.php";
  </script>
  <?php
  } else {
    ?>
    <script>
    alert("Problem Connecting to database!");
    window.location="../admin_insert_h.php";
    </script>
    <?php
    }
  }
  else {
    ?>
    <script>
    alert("Username already exists!");
    window.location="../admin_insert_h.php";
    </script>
    <?php
    }  
  $connection->close();

?>