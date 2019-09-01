<?php
    require_once "functions.php";
    require_once "dbConnect.php";

    $coupleName = h($_POST['coupleName']);

    $nameBf = h($_POST['nameBf']);
    $birthYearBf = h($_POST['birthYearBf']);
    $birthMonthBf = h($_POST['birthMonthBf']);
    $birthDayBf = h($_POST['birthDayBf']);

    $nameGf = h($_POST['nameGf']);
    $birthYearGf = h($_POST['birthYearGf']);
    $birthMonthGf = h($_POST['birthMonthGf']);
    $birthDayGf = h($_POST['birthDayGf']);

    $dayCountYear = h($_POST['dayCountYear']);
    $dayCountMonth = h($_POST['dayCountMonth']);
    $dayCountDay = h($_POST['dayCountDay']);

    $fileImg = h($_POST['fileImg']);

    $themeColor = h($_POST['themeColor']);

    $password = h($_POST['password']);



    $stmt = $dbh->prepare('INSERT INTO LoversInformations 
        (coupleName, nameBf, birthYearBf, birthMonthBf, birthDayBf, nameGf, birthYearGf, birthMonthGf, birthDayGf, 
        dayCountYear, dayCountMonth, dayCountDay, fileImg, themeColor, password, created_at)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,  now() )');

    $stmt->execute([$coupleName, $nameBf, $birthYearBf, $birthMonthBf, $birthDayBf, $nameGf, $birthYearGf, $birthMonthGf, $birthDayGf, $dayCountYear, $dayCountMonth, $dayCountDay, $fileImg, $themeColor, $password]);
    
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>登録完了画面</title>
</head>
<body>
    <h1>登録できたよ！</h1>

    <button onclick="location.href='main.php';">トップ画面</button>
</body>
</html>