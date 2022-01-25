<?php
include("./utils/db.php");
function getProductByName($name) {
  $conn = newConnection();
  $query = "SELECT * FROM `product` WHERE `result` = '$name';
  $result = $conn->query($query);
  $row = $result->fetch_array(MYSQLI_BOTH);
  
}
?>