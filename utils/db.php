<?php
  function newConnection() {
    $user = "root";
    $pass = "";
    $db = "datn_db";
    $host = "localhost";

    return new mysqli($host, $user, $pass, $db);
  }
?>