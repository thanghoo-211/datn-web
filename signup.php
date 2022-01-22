<?php
  include_once("./utils/db.php");

  $email = $_POST["email"];
  $user_name = $_POST["user_name"];
  $password = $_POST["password"];

  $conn = newConnection();
  $query = "INSERT INTO `users` (`email`, `password`, `role`, `user_name`) VALUES ('$email', '$password', 0, '$user_name')";
  $conn->query($query);
  header("Location: ./index.php");

  $conn->close();
?>