<?php
$data = $_POST['dt'];
/* $tempInc = $_POST['tempInc']; */

$pdo = new PDO('mysql:host=localhost;dbname=pampulha;port=3306;charset=utf8', 'root', '');

$sql = "SELECT hora, tempInc, tempMax, tempMin FROM inmet WHERE data='$data'";

$statement = $pdo->prepare($sql);

$statement->execute();

while($results = $statement->fetch(PDO::FETCH_ASSOC)) {

    $result[] = $results;

}

# echo json_encode($result);

include('TempInc.php');
