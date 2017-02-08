<?php
include 'dbh.php';

$stmt;
$offerlist;
try {
    $stmt = $conn->prepare("SELECT * FROM offer WHERE CURRENT_TIMESTAMP > Date ORDER BY Date DESC LIMIT 1");
    $stmt->execute();
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$offer = $stmt->fetchAll();
echo $offer[0]["Date"];




//foreach($offerlist as $i=>$offer) {
//    $imagefile = $offer["image"];
//    echo $offer["ID"]. "<br>";
//    echo $offer["Title"]. "<br>";
//    echo $offer["Date"]. "<br>";
//    echo "__________________________ <br>";
//}


