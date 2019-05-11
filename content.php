<?php

//Ispis podataka za City kategoriju

  if (isset($_GET['City'])) {
    include_once 'includes/dbconn.inc.php';

    $sql = "SELECT * FROM auti WHERE auto_ime = 'VW UP'";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
          echo "<h1>Car name: </h1>" . "<div class='database-title'>" . $row['auto_ime'] . "</div>" . "<img title='VW UP in action' src='images/city/city1.png' />" . "<h3> Description: </h3>" .
          "<div class='database-text'>" . $row['auto_info'] . "</div>" . "<br>" ;
      }
    }

    $sql = "SELECT * FROM auti WHERE auto_ime = 'Skoda Citigo'";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
        echo "<h1>Car name: </h1>" . "<div class='database-title'>" . $row['auto_ime'] . "</div>" . "<img title='Parked red Citigo'  src='images/city/city2.png' />" . "<h3> Description: </h3>" .
        "<div class='database-text'>" . $row['auto_info'] . "</div>" . "<br>" ;
      }
    }

  $sql = "SELECT * FROM auti WHERE auto_ime = 'Suzuki Celerio'";
  $result = mysqli_query($conn, $sql);
  $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
        echo "<h1>Car name: </h1>" . "<div class='database-title'>" . $row['auto_ime'] . "</div>" . "<img title='Render of Celerio on road' src='images/city/city3.png' />" . "<h3> Description: </h3>" .
        "<div class='database-text'>" . $row['auto_info'] . "</div>" . "<br>" ;
      }
    }
  }

//Ispis podataka za Luxury kategoriju

if (isset($_GET['Luxury'])) {
  include_once 'includes/dbconn.inc.php';

  $sql = "SELECT * FROM auti WHERE auto_ime = 'Mercedes-Benz S Class'";
  $result = mysqli_query($conn, $sql);
  $resultCheck = mysqli_num_rows($result);

  if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      echo "<h1>Car name: </h1>" . "<div class='database-title'>" . $row['auto_ime'] . "</div>" . "<img title='Render of S Class' src='images/luxury/luxury1.png' />" . "<h3> Description: </h3>" .
      "<div class='database-text'>" . $row['auto_info'] . "</div>" . "<br>" ;
    }
  }

  $sql = "SELECT * FROM auti WHERE auto_ime = 'Tesla Model S'";
  $result = mysqli_query($conn, $sql);
  $resultCheck = mysqli_num_rows($result);

  if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      echo "<h1>Car name: </h1>" . "<div class='database-title'>" . $row['auto_ime'] . "</div>" . "<img title='Tesla never disappoints' src='images/luxury/luxury2.png' />" . "<h3> Description: </h3>" .
      "<div class='database-text'>" . $row['auto_info'] . "</div>" . "<br>" ;
    }
  }

$sql = "SELECT * FROM auti WHERE auto_ime = 'Audi A8'";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

  if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      echo "<h1>Car name: </h1>" . "<div class='database-title'>" . $row['auto_ime'] . "</div>" . "<img title='Classy yet agressive looking A8' src='images/luxury/luxury3.png' />" . "<h3> Description: </h3>" .
      "<div class='database-text'>" . $row['auto_info'] . "</div>" . "<br>" ;
    }
  }
}

//Ispis podataka za Sport kategoriju

if (isset($_GET['Sport'])) {
  include_once 'includes/dbconn.inc.php';

  $sql = "SELECT * FROM auti WHERE auto_ime = 'Porsche 911 Carrera'";
  $result = mysqli_query($conn, $sql);
  $resultCheck = mysqli_num_rows($result);

  if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      echo "<h1>Car name: </h1>" . "<div class='database-title'>" . $row['auto_ime'] . "</div>" . "<img title='Car model with rich background and history' src='images/sport/sport1.png' />" . "<h3> Description: </h3>" .
      "<div class='database-text'>" . $row['auto_info'] . "</div>" . "<br>" ;
    }
  }

  $sql = "SELECT * FROM auti WHERE auto_ime = 'Nissan GT-R'";
  $result = mysqli_query($conn, $sql);
  $resultCheck = mysqli_num_rows($result);

  if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      echo "<h1>Car name: </h1>" . "<div class='database-title'>" . $row['auto_ime'] . "</div>" . "<img title='Also know as Godzilla' src='images/sport/sport2.png' />" . "<h3> Description: </h3>" .
      "<div class='database-text'>" . $row['auto_info'] . "</div>" . "<br>" ;
    }
  }

$sql = "SELECT * FROM auti WHERE auto_ime = 'Chevrolet Corvette Stingray'";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

  if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      echo "<h1>Car name: </h1>" . "<div class='database-title'>" . $row['auto_ime'] . "</div>" . "<img title='Everyone at least once wanted Corvette' src='images/sport/sport3.png' />" . "<h3> Description: </h3>" .
      "<div class='database-text'>" . $row['auto_info'] . "</div>" . "<br>" ;
    }
  }
}
