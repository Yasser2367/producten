<?php
include_once "database.php";
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
    <table class="table table-striped">
    <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Product Code</th>
      <th scope="col">Naam</th>
      <th scope="col">Prijs</th>
      <th scope="col">Opties</th>

    </tr>
  </thead>
  <tbody>
  <?php
$sql = "SELECT * FROM products";
$result = mysqli_query($conn, $sql);
$check = mysqli_num_rows($result);
if ($check > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row["id"];
        $productCode = $row["product_code"];
        $name = $row["product_name"];
        $price = $row["price"];
        echo "
        <tr>
      <th scope=\"row\">$id</th>
      <td>$productCode</td>
      <td>$name</td>
      <td>$price</td>
      <td><a href=\"update.php?updateid=".$id."\"><button type=\"button\" class=\"btn btn-info\">Update</button></a><a href=\"delete.php?deleteid=".$id."\"><button type=\"button\" class=\"btn btn-danger\">Delete</button></a>
      </td>
    </tr>";
    }
};
?>;
    <!-- <tr>
      <th scope="row">1</th>
      <td>6974542490657</td>
      <td>Orange Soda Vape</td>
      <td>$10,00</td>
    </tr>
    !-->
  </tbody>
</table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>