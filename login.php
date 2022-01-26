<?php
// include("./utils/db.php");
include("./public.php");
session_start();

$email = $_POST["email"];
$pass = $_POST["password"];

$conn = newConnection();
$query = "SELECT * FROM `users` WHERE `email` = '$email' AND `password`='$pass'";
$result = $conn->query($query);
$row = $result->fetch_array(MYSQLI_BOTH);
$uri = $_POST["uri"];
if ($row != NULL) {
  addProduct("test", 1, "des", "pic", 123456, 2);
  $_SESSION["email"] = $row["email"];
  $_SESSION["user_name"] = $row["user_name"];
  header("Location: .$uri");
}
else {
  header("Location: .$uri?error");
  exit();
}
$conn->close();

?>