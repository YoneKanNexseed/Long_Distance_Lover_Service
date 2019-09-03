<?php

require_once ('dbConnect.php');


$coupleName = '';
$password = '';
$select = '';

if (isset ($_GET['coupleName']) && isset ($_GET['password']) && isset ($_GET['select'])) {
    $coupleName = $_GET['coupleName'];
    $password = $_GET['password'];
    $select = $_GET['select'];        
}

$stmt = $dbh->prepare('SELECT * FROM LoversInformations WHERE coupleName = ? AND password = ?');

$stmt->execute([$coupleName, $password]);

$results = $stmt->fetchAll();

// var_dump($results);

foreach($results as $result) {
    if($result["coupleName"] = $coupleName && $result["password"] && $password) {
        header('Location: main.php');
    }
}

