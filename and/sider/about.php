<!DOCTYPE html>
<?php
require_once("../include/constaints.php");
$conn = mysqli_connect("localhost", "root", "masai");
$db = mysqli_select_db($conn, 'webshop');
?>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <title>andedammen</title>
    <meta charset = "utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <script async="" type="text/javascript" src="http://www.googletagservices.com/tag/js/gpt.js"></script>

</head>
<body class="body">
<header>
    <div class="flex-container">
        <div class="box logo">
            <img src="../assets/andlogo.jpg" class="logo" >
            <h1 class="overskrift">Andedammen</h1>
        </div>
        <div class="box chart">
            <a href="../index.php"</a><img src="../assets/kurv.jpeg" width="30px" height="30px" class="kurv">
        </div>
        <div class="box menu">
            <div class="navbar">
                <ul>
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="about.php">About us</a></li>
                    <li><a href="contact.php">Contact us</a></li>
                    <li><a href="signin.php">Sign In</a></li>
                </ul>
            </div>

            <!-- HTML for SEARCH BAR -->

            <form action="result.php" method="post">
                <input type="text" id="searchBar" name="search" placeholder="Søg and" size="21" maxlength="120" value="søg and" />
                <input type="submit" id="searchbtn" value=">>" />
            </form>

        </div>
    </div>
</header>
<div class="wrapper">
    <article class="main">
        <div class="slider">
            <img src="../assets/snowboarder.jpg" class="img-responsive">
        </div>
        <div class="content">
            <h1 class="virksomhed">Here we are</h1>
            <p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce quis lectus quis<br>  sem lacinia nonummy. Proin mollis  lorem non dolor. In hac habitasse<br></p></p>
        </div>
    </article>
    <aside class="aside aside-1">
        <h3>Catalog</h3>
        <ul>
            <li><a href="../product.php">And i bad</a></li>
            <li><a href="../product.php">And på strand</a></li>
            <li><a href="../product.php">And oppustelig</a></li>
            <li><a href="../product.php">And til andet</a></li>
        </ul>
    </aside>
    <aside class="aside aside-2">
        <div class="nyheder">
            <h3>Nyheder</h3>
            <p>Lorem ipsum dolor sit amet, consectetur<br> adipiscing elit. Fusce quis lectus quis<br>  sem lacinia nonummy. Proin mollis <br> lorem non dolor. In hac habitasse<br></p>
        </div>
        <div class="tilbud">
            <h3>Tilbud</h3>
            <p>Lorem ipsum dolor sit amet, consectetur<br> adipiscing elit. Fusce quis lectus quis<br>  sem lacinia nonummy. Proin mollis <br> lorem non dolor. In hac habitasse<br></p>
        </div>
    </aside>
</div>
<footer class="footer">
    <p class="footer"> Andedammen Andevej 0 Andeby e-mail andedammen@and.dk www.andedammen.dk</p>
</footer>
</body>
</html>


<?/*php    require_once ("include/connection.php");
$query = "SELECT * FROM customer";
$result = mysqli_query($conn, $query) or die ("Error q failed");

while ($row = mysqli_fetch_array($result)){
    echo
        $row["ID"]. " - ".
        $row["name"]. " - ".
        $row["email"]. " - <br>";
}*/
?>