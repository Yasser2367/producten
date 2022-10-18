<?php
include_once "database.php";
$id= $_GET["updateid"];
$sql = "SELECT * from `products` where id=$id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$productCode = $row["product_code"];
        $name = $row["product_name"];
        $price = $row["price"];
if(isset($_POST['submit'])){
    $productCode = $_POST['product_code'];
    $name = $_POST['product_name'];
    $price = $_POST['price'];
    $id = $_GET["updateid"];
    $sql="Update `products` set id=$id, product_name=$name, price=$price where id=$id";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "Updated succesfully";}
    else {
        echo "Can't be updated";
        die(mysqli_error($conn));
    }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <form method="post">
  <div class="mb-3">
    <label for="product_code" class="form-label">Product code</label>
    <input type="number" class="form-control" id="product_code" value=<?php echo $productCode?>>
    <div id="product_code" class="form-text">Vul hier de productcode in</div>
  </div>
  <div class="mb-3">
    <label for="product_name" class="form-label">Naam</label>
    <input type="text" class="form-control" id="product_name" value=<?php echo $name?>>
  </div>
  <div class="mb-3">
    <label for="price" class="form-label">Prijs</label>
    <input type="text" class="form-control" id="price" value=<?php echo $price?>>
  </div>
  <button type="submit" class="btn btn-primary">Update</button>
</form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html> 