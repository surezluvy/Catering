<?php

  function read($tabel, $query = ""){
    $connect = new mysqli("localhost", "root", "", "catering");
    $data = mysqli_query($connect, "SELECT * FROM $tabel $query");
    return $data;
  }
?>
