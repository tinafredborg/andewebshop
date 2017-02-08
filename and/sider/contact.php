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
        <div class="container">
            <?php
            $name = $_POST['name'];
            $email = $_POST['email'];
            $message = $_POST['message'];

            if (!isset($_POST['email'])){
                //header("Location: http://localhost/and/index.php");

            }
            elseif (empty($email)|| empty($name)){
              ?>
            <html>
                <p class='besked'>Sorry! You didn't enter either your e-mail or name correctly, please try again.</p>
            </html>
            <?php
            }
            elseif (($name) || ($email) || ($message)){
            ?>
            <html>
                <p class='besked'>Thank you for your comment, we answer as fast as we can.</p>
            </html>
            <?php
            }
            else {mail("sunset@sunset.lk", "Contact from site!",
                $message, " From: $email");
                header("Location: http://localhost/and/index.php");
            }
            ?>
            <div class="header"><h3>Skriv til os</h3></div>
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
                <label>Name</label>
                <input type="text" name="name"  autofocus>
                <label>Email</label>
                <input type="text" name="email">
                <label>Message</label>
                <textarea name="message" placeholder="Skriv her"></textarea>
                <button class="sendbtn" type="submit">Send</button>
            </form>
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


<?php /*   require_once ("include/connection.php");
$query = "SELECT * FROM customer";
$result = mysqli_query($conn, $query) or die ("Error q failed");

while ($row = mysqli_fetch_array($result)){
    echo
        $row["ID"]. " - ".
        $row["name"]. " - ".
        $row["email"]. " - <br>";
}*/
?>