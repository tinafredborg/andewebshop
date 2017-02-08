<?php
require_once ("include/connection.php");
$query = "SELECT * FROM product WHERE ";
$result = mysqli_query($conn, $query) or die ("Error q failed");


