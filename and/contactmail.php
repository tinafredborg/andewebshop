<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $name; " har skrevet ". $_POST['message'] ."sendt fra $email ";

$to ="sasjafred@gmail.com";
$subject ="message fra webside";

mail($to, $subject, $message);

// define variables and set to empty values
$name = $email = $message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $message = test_input($_POST["message"]);

}
/*
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}*/

echo "<h2>Tak for din mail, ". $name ."; vi svarer hurtigst muligt:</h2>";
echo $name;

?>
