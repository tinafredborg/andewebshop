
<?php
require_once ("include/constaints.php");
$conn = mysqli_connect("localhost", "root", "masai");
$db = mysqli_select_db($conn, 'webshop');


   $search = $_POST['search'];
   $terms = explode(" ", $search);
   $i= 0;
   $query = "SELECT * FROM product WHERE ";
   $output = "";

foreach ($terms as $each) {
   $i++;
   if ($i == 1) {
       $query .= "description LIKE '%$each%'";
   }
       else
       {
       $query .= "OR description LIKE '%$each%'";
 }
$query = mysqli_query($conn, $query);
$result= mysqli_num_rows($query);
if ($result > 0) {
    while ($row = mysqli_fetch_assoc($query)) {
        $description = $row['description'];
        $output .="";
    }
}

        else{
            $output = "Ingen ænder fundet";
    }
}

?>