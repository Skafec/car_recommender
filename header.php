<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $(function() {
    $(document).tooltip();
  } );
  </script>
</head>
<body>
  <header>
      <nav>
        <div class="main-wrapper">
              <ul>
                <li><a href="index.php">Home</a></li>
              </ul>
        <div class="login">

          <?php
            if (isset($_SESSION['u_id'])) {
              echo '<form action="includes/logout.inc.php" method="POST">
                    <button type="submit" name="submit">Logout</button>
                    </form>';
            } else {
              echo '<form action="includes/login.inc.php" method="POST">
                    <input type="text" name="username" placeholder="Username/email">
                    <input type="password" name="pwd" placeholder="Password">
                    <button type="submit" name="submit">Login</button>
                    <a href="signup.php">Sign up</a>
                    </form>';
            }
          ?>
        </div>
      </div>
    </nav>
  </header>
