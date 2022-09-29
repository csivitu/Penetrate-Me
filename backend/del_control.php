<?php
include 'config.php';
$uname=mysqli_real_escape_string($connection,$_POST['username']);

$sql='select * from users where username="'.$uname.'";';
$rs=mysqli_Query($connection,$sql);
if(mysqli_num_rows($rs)>0)
{
$query='delete from users where username="'.$uname.'";';
if ($connection->query($query) === TRUE) {
  ?>
  <script>
  alert("Data Deleted Successfully!");
  window.location="../dashboard.php";
  </script>
  <?php
  } else {
    ?>
    <script>
    alert("Problem Connecting to database!");
    window.location="../del.php";
    </script>
    <?php
    }
  }
  else {
    ?>
    <script>
    alert("No user with this username is present!");
    window.location="../del.php";
    </script>
    <?php
    }  
  $connection->close();

?>