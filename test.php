<?php
include("./public.php");

$conn = newConnection();
$query = "SELECT * FROM `products` WHERE `id` = 4";
$result = $conn->query($query);
$row = $result->fetch_assoc();
?>
<img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row["img_content"]) ?>" alt="">
