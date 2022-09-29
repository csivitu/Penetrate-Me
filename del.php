<?php
    session_start();
    if (isset($_SESSION['uname'])==false) {
    ?>
      <script>
      alert("Please Log In to access this page!");
      window.location="http://localhost/acm_website/admin_login.html";
      </script>
    <?php
    }
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

      </div>
    </div>

    <div class="navbar-end">
      <div class="navbar-item">
        <div class="buttons">
          <a class="navbar-item" href="">
            <?php 
            echo 'Welcome, '.$_SESSION['uname'] 
            ?>
          </a>
          <a class="button is-primary" href="backend/logout.php">
            <strong>Logout</strong>
          </a>
        </div>
      </div>
    </div>
  </div>
</nav>
  <section class="section">
    <div class="container">
      <h1 class="title is-1">Delete a User Here:</h1>
    <form action="backend/del_control.php" method="post">
        <div class="field">
        <label class="label">Username</label>
        <div class="control has-icons-left has-icons-right">
            <input class="input" type="text" placeholder="Enter Username" name="username">
            <span class="icon is-small is-left">
            <i class="fas fa-user"></i>
            </span>
        </div>
        </div>

<div class="field is-grouped">
  <div class="control">
    <input class="button is-link" value="Delete" type="submit">
  </div>
</div>
</form>
    </div>
  </section>
  <script src="https://kit.fontawesome.com/f50d5009f4.js" crossorigin="anonymous"></script>
  </body>
</html>
