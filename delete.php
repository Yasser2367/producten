<?php
include 'database.php';
if (isset($_GET["deleteid"])) {
$id=$_GET["deleteid"];
$sql="delete from `products` where id=$id";
$result=mysqli_query($conn, $sql);
if ($result) {
    header("location:index.php");}}
else {
    echo "Can't be Deleted";
    die(mysqli_error($conn));
}

?>