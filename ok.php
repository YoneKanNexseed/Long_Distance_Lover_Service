<?php

    require_once "functions.php";

    $coupleName = $_POST['coupleName'];

    $nameBf = $_POST['nameBf'];
    $birthYearBf = $_POST['birthYearBf'];
    $birthMonthBf = $_POST['birthMonthBf'];
    $birthDayBf = $_POST['birthDayBf'];

    $nameGf = $_POST['nameGf'];
    $birthYearGf = $_POST['birthYearGf'];
    $birthMonthGf = $_POST['birthMonthGf'];
    $birthDayGf = $_POST['birthDayGf'];

    $dayCountYear = $_POST['dayCountYear'];
    $dayCountMonth = $_POST['dayCountMonth'];
    $dayCountDay = $_POST['dayCountDay'];

    $fileImg = $_POST['fileImg'];

    $themeColor = $_POST['themeColor'];

    $password = $_POST['password'];
    $passwordConfirm = $_POST['passwordConfirm'];


    var_dump($nameBf."<br>");
    var_dump($birthYearBf."<br>");
    var_dump($birthMonthBf."<br>");
    var_dump($birthDayBf."<br>");
    var_dump($nameGf."<br>");
    var_dump($birthYearGf."<br>");
    var_dump($birthMonthGf."<br>");
    var_dump($birthDayGf."<br>");
    var_dump($dayCountYear."<br>");
    var_dump($dayCountMonth."<br>");
    var_dump($dayCountDay."<br>");
    var_dump($fileImg."<br>");
    var_dump($themeColor."<br>");


?>

<!DOCTYPE html>
<html>
<head>
    <title>確認画面</title>
    <link style="stylesheet" href="css/ok.css">
</head>
<body>
    <h1>確認画面</h1>        
    <table>
        <tr>
            <td>カップル名</td>
            <td><?php echo h($coupleName); ?></td>
        </tr>
        <tr>
            <td>彼氏名</td>
            <td><?php echo h($nameBf); ?></td>
        </tr>
        <tr>
            <td>彼氏の誕生日</td>
            <td><?php echo h($birthYearBf) .'年　'. h($birthMonthBf).'月　'.h($birthDayBf) .'日'; ?></td>
        </tr>
        <tr>
            <td>彼女名</td>
            <td><?php echo h($nameGf); ?></td>
        </tr>
        <tr>
            <td>彼女の誕生日</td>
            <td><?php echo h($birthYearGf) .'年　'. h($birthMonthGf).'月　'.h($birthDayGf) .'日'; ?></td>
        </tr>
        <tr>
            <td>付き合った日</td>
            <td><?php echo h($dayCountYear) . '年　' . h($dayCountMonth) . '月　' . h($dayCountDay) . '日　'; ?></td>
        </tr>
        <tr>
            <td>テーマimg</td>
            <td><?php echo h($fileImg); ?></td>
        </tr>
        <tr>
            <td>テーマカラー</td>
            <td><?php echo h($themeColor); ?></td>
        </tr>
        <tr>
            <td>カップルパスワード</td>
            <td><?php echo h($password); ?></td>
        </tr>
    </table>

    <button onclick="history.back();">戻る</button>

    <form action="thanks.php" method="POST">

    <!-- カップル名 -->
    <input class="input" type="hidden" name="coupleName" value="<?php echo h($coupleName); ?>">

    <!-- 彼氏・彼女の名前 -->
    <input class="input" type="hidden" name="nameBf" value="<?php echo $nameBf;?>">
    <input class="input" type="hidden" name="nameGf" value="<?php echo $nameGf;?>">

    <!-- 彼氏・彼女の誕生日 -->
    <input class="input" type="hidden" name="birthYearBf" value="<?php echo $birthYearBf;?>">
    <input class="input" type="hidden" name="birthMonthBf" value="<?php echo $birthMonthBf;?>">
    <input class="input" type="hidden" name="birthDayBf" value="<?php echo $birthDayBf;?>">
    <input class="input" type="hidden" name="birthYearGf" value="<?php echo $birthYearGf;?>">
    <input class="input" type="hidden" name="birthMonthGf" value="<?php echo $birthMonthGf;?>">
    <input class="input" type="hidden" name="birthDayGf" value="<?php echo $birthDayGf;?>">

    <!-- 付き合った日 -->
    <input class="input" type="hidden" name="dayCountYear" value="<?php echo $dayCountYear;?>">
    <input class="input" type="hidden" name="dayCountMonth" value="<?php echo $dayCountMonth;?>">
    <input class="input" type="hidden" name="dayCountDay" value="<?php echo $dayCountDay;?>">

    <!-- テーマのImg -->
    <input class="input" type="hidden" name="fileImg" value="<?php echo $fileImg;?>">

    <!-- テーマカラー -->
    <input class="input" type="hidden" name="themeColor" value="<?php echo $themeColor;?>">

    <!-- カップルパスワード -->
    <input class="input" type="hidden" name="password" value="<?php echo $password?>">

    <input type="submit" value="OK">
    </form>
</body>
</html>