<?php
include("public.php");
if (!empty($_FILES["image"]["name"])) {
  $name = $_POST["name"];
  $type_id = $_POST["type_id"];
  $des = $_POST["des"];
  $img_content = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
  $price = $_POST["price"];
  $quantity = $_POST["quantity"];
  addProduct($name, $type_id, $des, $img_content, $price, $quantity);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add product</title>
</head>

<body>
  <form action="" method="post" enctype="multipart/form-data">
    Name:
    <input type="text" name="name"><br>
    Type:
    <select name="type_id" id="type_id">
      <?php
      $conn = newConnection();
      $query = "SELECT * FROM `type`";
      $result = $conn->query($query);
      while ($row = $result->fetch_assoc()) {
        echo '<option value=' . $row["id"] . '>' . $row["name"] . '</option>';
      }
      $conn->close();
      ?>
    </select><br>
    Description:
    <input type="text" name="des"><br>
    Image:
    <input type="file" name="image" style="padding: 50px"><br>
    Price:
    <input type="text" name="price"><br>
    Quantity:
    <input type="number" name="quantity"><br><br>

    <button type="submit">Add</button>
  </form>
</body>

</html>