<?php
include 'config.php';
$uname= mysqli_real_escape_string($connection,$_POST["username"]);
$pass= mysqli_real_escape_string($connection,$_POST["password"]);
session_start();
$_SESSION['uname'] = $uname;

$query="select * from admins where admin_uname='$uname' and admin_pass='$pass';";
$rs=mysqli_Query($connection,$query);
if(mysqli_num_rows($rs)>0)
{
?>
<script>
alert("Login Successful");
window.location="../admin_insert_h.php";
</script>
<?php
}
else
{?>
<script>
alert("Invalid Username or Password.");
window.location="logout.php";
</script>
<?php
}
mysqli_close($connection);
?>