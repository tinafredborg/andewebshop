<?php
include 'dbh.php';

$stmt;
$newslist;
try {
    $stmt = $conn->prepare("SELECT * FROM news WHERE CURRENT_TIMESTAMP > Date ORDER BY Date DESC LIMIT 1");
    $stmt->execute();
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$offer = $stmt->fetchAll();
echo $news[0]["Date"];




//foreach($offerlist as $i=>$offer) {
//    $imagefile = $news["image"];
//    echo $news["ID"]. "<br>";
//    echo $news["Title"]. "<br>";
//    echo $news["Date"]. "<br>";
//    echo "__________________________ <br>";
//}


