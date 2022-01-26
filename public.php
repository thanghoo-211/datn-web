<?php
include("./utils/db.php");
function getProductByName($name) {
  $conn = newConnection();
  $query = "SELECT * FROM `products` WHERE `name` = '$name'";
  $result = $conn->query($query);
  $row = $result->fetch_array(MYSQLI_BOTH);
  return $row;
}

function getProductById($id) {
  $conn = newConnection();
  $query = "SELECT * FROM `products` WHERE `id` = '$id'";
  $result = $conn->query($query);
  $row = $result->fetch_array(MYSQLI_BOTH);
  return $row;
}

function getAllProduct() {
  $conn = newConnection();
  $query = "SELECT * FROM `products`";
  $result = $conn->query($query);
  $row = $result->fetch_all(MYSQLI_BOTH);
  return $row;
}

function getAllProductByTypeId($type_id) {
  $conn = newConnection();
  $query = "SELECT * FROM `products` WHERE `type_id`=$type_id";
  $result = $conn->query($query);
  $row = $result->fetch_all(MYSQLI_BOTH);
  return $row;
}

function getAllType() {
  $conn = newConnection();
  $query = "SELECT * FROM `type`";
  $result = $conn->query($query);
  $row = $result->fetch_all(MYSQLI_BOTH);
  return $row;
}

function addProduct($name, $type_id, $des, $img_content, $price, $quantity) {
  $conn = newConnection();
  $query = "INSERT INTO `products` (`name`, `type_id`, `des`, `img_content`, `price`, `quantity`) VALUES ('$name', $type_id, '$des', '$img_content', $price, $quantity);";
  $conn->query($query);
  // $row = $result->fetch_array(MYSQLI_BOTH);
  // return $row;
}
?>