<?php
include 'dbh.php';

$firstname = $_POST['Firstname'];
$lastname = $_POST['Lastname'];
$address = $_POST['Address'];
$zipcode = $_POST['ZipCode'];
$city = $_POST['City'];
$phone = $_POST['Phone'];
$email = $_POST['Email'];
$username = $_POST['Username'];
$password = $_POST['Password'];


$stmt = $conn->prepare("INSERT INTO customer (FirstName, LastName, Address, ZipCode, City, Phone, Email) 
    VALUES ('$firstname', '$lastname', '$address', '$zipcode', '$city', '$phone', '$email')");
$stmt->bindParam('FirstName', $firstname);
$stmt->bindParam('LastName', $lastname);
$stmt->bindParam('Address', $address);
$stmt->bindParam('ZipCode', $zipcode);
$stmt->bindParam('City', $city);
$stmt->bindParam('Phone', $phone);
$stmt->bindParam('Email', $email);
$stmt->execute();
$resultID =$conn->lastInsertId();



$stmt = $conn->prepare("INSERT INTO login (CusID, Username, Password)
    VALUES ('$resultID', '$username', '$password')");
$stmt->bindParam('CusID', $resultID);
$stmt->bindParam('Username', $username);
$stmt->bindParam('Password', $password);
$stmt->execute();

/*huske at sende til side
