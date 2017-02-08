<?php
include 'dbh.php';

session_start();
if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if (empty($username) || empty($password)) {
        $message = '<label>All fields are required</label>';
    } else {
        $query = "SELECT * FROM login WHERE Username = '$username' AND Password = '$password'";

        $stmt = $conn->prepare($query);
        $stmt->execute(
            array(
                'Username' => $username,
                'Password' => $password
            )
        );
        $count = $stmt->rowCount();
        if ($count > 0) {
            $_SESSION["username"] = $username;
            header("location: success.php");
        } else {

            $_SESSION["message"] = '<label>Wrong Data</label>';
            header("location: index.php");
        }
    }

}



