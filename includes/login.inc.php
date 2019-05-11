<?php

session_start();

if (isset($_POST['submit'])) {

  include_once 'dbconn.inc.php';

  $uid = mysqli_real_escape_string ($conn, $_POST['username']);
  $pwd = mysqli_real_escape_string ($conn, $_POST['pwd']);

  //Error hanlder
  //Provjera jesu li inputi prazni
  if (empty($uid) || empty($pwd)) {
    header("Location: ..index.php?login=empty");
    exit();
  } else {
    //SQL upit
    $sql = "SELECT * FROM korisnici WHERE user_uid = '$uid' || user_email = '$uid'";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck < 1) {
      header("Location: ..index.php?login=error");
      exit();
    } else {
      if ($row = mysqli_fetch_assoc($result)) {
        if ($pwd != $row['user_pwd']) {
          header("Location: ..index.php?login=error");
          exit();
        } elseif ($pwd = $row['user_pwd']) {
          // Login korisnika
          $_SESSION['u_id'] = $row['user_id'];
          $_SESSION['u_first'] = $row['user_first'];
          $_SESSION['u_last'] = $row['user_last'];
          $_SESSION['u_email'] = $row['user_email'];
          $_SESSION['u_uid'] = $row['user_uid'];
          header("Location: ../index.php?login=success");
          exit();
        }
      }
    }
  }
}else {
  header ("Location: ..index.php?login=error");
  exit();
}
