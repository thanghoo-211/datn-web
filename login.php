<?php
include("./utils/db.php");
session_start();

$email = $_POST["email"];
$pass = $_POST["password"];

$conn = newConnection();
$query = "SELECT * FROM `users` WHERE `email` = '$email' AND `password`='$pass'";
$result = $conn->query($query);
$row = $result->fetch_array(MYSQLI_BOTH);
if ($row != NULL) {
  $_SESSION["email"] = $row["email"];
  $_SESSION["user_name"] = $row["user_name"];
  header("Location: ./index.php");
}
else {
  header("Location: ./index.php?error");
  exit();
}
$conn->close();

?>