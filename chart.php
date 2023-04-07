<?php
$dt = '2018-01-01';

$pdo = new PDO('mysql:host=localhost;dbname=pampulha;port=3306;charset=utf8', 'root', '');

$sql = "SELECT hora, tempInc FROM inmet WHERE data='$dt'";

$statement = $pdo->prepare($sql);

$statement->execute();


while($results = $statement->fetch(PDO::FETCH_ASSOC)) {

    $result[] = $results;
}

echo json_encode($result);