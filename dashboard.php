<?php
include 'backend/config.php';
$query="select * from users;";
$rs=mysqli_Query($connection,$query);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Penetrate Me! - Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
  </head>
  <body>
  <nav class="navbar" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="dashboard.php">
      <h3>Penetrate Me!</h3>
    </a>
  </div>

  <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">
      <a class="navbar-item" href="dashboard.php">
        Dashboard
      </a>
    <?php 
      session_start();
      if (isset($_SESSION['uname'])) {
        echo '
        <a class="navbar-item" href="admin_insert_h.php">
        Add User
      </a>
      <a class="navbar-item" href="del.php">
        Del User
      </a>
        ';
      }
    ?>

      </div>
    </div>

    <div class="navbar-end">
      <div class="navbar-item">
        <div class="buttons">
        <?php 
      if (isset($_SESSION['uname'])) {
        echo '
        <a class="button is-primary" href="backend/logout.php">
            <strong>Logout</strong>
          </a>
        ';
      }else{
        echo '
        <a class="button is-primary" href="admin_login.html">
            <strong>Admin Login</strong>
          </a>
        ';
      }
    ?>
          
        </div>
      </div>
    </div>
  </div>
</nav>
  <section class="section">
    <div class="container">
      <h1 class="title">
        List of Current Users
      </h1>
      <br>
      <table class='table'> 
          <thead> 
            <tr> 
              <th>User Id</th>
              <th>Username</th> 
              <th>Email</th> 
              <th>Account Balance</th>
            </tr> 
          </thead> 
          <tbody> 
            <?php 
            while($row = $rs->fetch_assoc()){
              echo '
              <tr> 
                <td><strong>'.$row['user_id'].'</strong></td> 
                <td>'.$row['username'].'</td> 
                <td>'.$row['email'].'</td> 
                <td>'.$row['balance'].'</td>  
              </tr>
              ';
            }
            $connection->close();
            ?>
          </tbody> 
        </table> 
    </div>
  </section>
  </body>
</html>