<?php

if (isset($_POST['submit'])) {

  include_once 'dbconn.inc.php';

  $first = $_POST['first'];
  $last = $_POST['last'];
  $email = $_POST['email'];
  $uid = $_POST['uid'];
  $pwd = $_POST['pwd'];

  //Error handler
  //Provjera jesu li svi podatci upisani
  if (empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd)) {
    header ("Location: ../signup.php?signup=empty");
    exit();
  } else {
    //Provjera ispravnosti upisanog imena i prezimena
    if (!preg_match("/^[a-zA-Z]*$/", $first) ||
        !preg_match("/^[a-zA-Z]*$/", $last )) {
      header ("Location: ../signup.php?signup=invalid");
      exit();
    } else {
      //provjera ispravnosti maila
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header ("Location: ../signup.php?signup=email");
        exit();
      }else {
        //Provjera slobode usernamea
        $sql = "SELECT * FROM korisnici WHERE user_uid = '$uid'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
          header ("Location: ../signup.php?signup_username");
          exit();
        } else {
          //Ubacivanje u bazu
          $sql = "INSERT INTO korisnici (user_first, user_last, user_email, user_uid, user_pwd)
          VALUES (?, ?, ?, ?, ?);";
          $stmt = mysqli_stmt_init($conn);
          if (!mysqli_stmt_prepare($stmt, $sql)) {
            echo "SQL error";
          } else {
            mysqli_stmt_bind_param($stmt, "sssss", $first, $last, $email, $uid, $pwd);
            mysqli_stmt_execute($stmt);
          }
          header ("Location: ../signup.php?signup=success");
          exit();
        }
      }
    }
  }
} else {
  header ("Location: ../signup.php");
  exit();
}
