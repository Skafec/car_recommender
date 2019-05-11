<?php
  include_once 'header.php';
?>

<section class="main-container">
  <div class="main-wrapper">
    <h2>Signup</h2>
    <form class="signup" action="includes/signup.inc.php" method="POST">
      <input type="text" name="first" placeholder="First name">
      <input type="text" name="last" placeholder="Last name">
      <input type="text" name="email" placeholder="E-mail">
      <input type="text" name="uid" placeholder="Username">
      <input type="password" name="pwd" placeholder="Password">
      <button type="submit" name="submit">Sign up</button>
    </form>
  </div>
  <?php
  if (isset($_GET["signup"]) == "success") {
    echo "<script type='text/javascript'>
          alert('Registracija uspješna!')
          </script>";
  }
  ?>
</section>
<<?php
include_once 'footer.php'
?>