<?php
  include_once 'header.php'
?>
<section class="main-container">
  <div class="main-wrapper">
    <?php
    if (!isset ($_SESSION['u_id'])) {
      echo "<h2>Home</h2>";
      echo "<p>Dobrodošli na stranicu za ljubitelje automobila!</p>";
    }
     ?>
    <?php
    if (isset($_SESSION['u_id'])) {
      echo "<div class='center'>
              <div class='dropdown'>
                <button class='dropbtn'>Choose vehicle type</button>
                  <div class='dropdown-content'>
                    <a href='index.php?City'>City</a>
                    <a href='index.php?Luxury'>Luxury</a>
                    <a href='index.php?Sport'>Sport</a>
                  </div>
                </div>
              </div>";
      include_once 'content.php';
    }
    ?>
  </div>
</section>
<?php
  include_once 'footer.php'
?>
