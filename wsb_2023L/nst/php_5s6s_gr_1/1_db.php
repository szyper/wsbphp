<?php 
  require_once("./scripts/connect.php");
  // $conn = new mysqli("localhost", "root", "", "wsb_2023l_5s6s");
  //echo $conn->connect_errno;
  
  $sql = "SELECT * FROM `user`";
  $result = $conn->query($sql);
  $conn->close();
  // $user = $result->fetch_assoc();
  //echo $user["name"];
  echo "<h4>Użytkownicy</h4>";
  $count = 0;
  while ($user = $result->fetch_assoc()) {
    $count++;
    //echo "Użytkownik $count:<br>";
    //echo "Imię i nazwisko:  $user[name]  $user[surname]<hr>" ;

//heredoc
    echo <<< USER
    Użytkownik $count:<br>
    Imię i nazwisko:  $user[name]  $user[surname]<br>
    Data urodzenia: $user[birthday]<br>
    Dodanie użytkownika: $user[created_at]
    <hr>
USER;
  }
?>