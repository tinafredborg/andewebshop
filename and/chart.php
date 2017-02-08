<!DOCTYPE html>
<?php
session_start();
$page = 'product.php';
require_once ("include/constaints.php");
$conn = mysqli_connect("localhost", "root", "masai");
$db = mysqli_select_db($conn, 'webshop');



function product(){
    $get = mysqli_query('SELECT FROM product ID, Name, Description, Price  WHERE Quantity > 0 ORDER BY DECS');
    if (mysqli_num_rows($get) == 0);{
    echo "Sorry we are out of this product";
}
   else{
    echo "bingo";

}
}
?>