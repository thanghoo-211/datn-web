<?php 
include("./public.php");
$row = getProductById(5);
?>

<img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row["img_content"]) ?>" alt="">