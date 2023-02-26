<?php 
  require_once("./scripts/connect.php");

  $sql = "SELECT * FROM `user` JOIN `city` ON `user`.`city_id`=`city`.`id`";
  $result = $conn->query($sql);
  $conn->close();

  echo "<h4>Użytkownicy</h4>";
  $count = 0;
  while ($user = $result->fetch_assoc()) {
    $count++;

    echo <<< USER
    Użytkownik $count:<br>
    Imię i nazwisko:  $user[name]  $user[surname]<br>
    Data urodzenia: $user[birthday]<br>
    Dodanie użytkownika: $user[created_at]<br>
    Miasto: $user[cityName]<br>
    Województwo: ...
    <hr>
USER;
  }
  // dodać tabele województwa i połączyć tabele województwa-miasta
  //wyświetlić województwo użytkownika
?>