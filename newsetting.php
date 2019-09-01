<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>設定</title>
    <link rel="stylesheet" href="css/styles-setting.css">
</head>
<body>
    <div id="Contents">
        <!-- 設定画面のタイトル -->
        <div id="Title">
            <div id="TopTitle">新規登録</div>
        </div>
        <!-- 設定画面 -->
        <form action="ok.php" method="POST">
        <div id="Setting">
            <div id="NameBF">
                <div class="TitleNameBF">彼氏名</div>
                <div class="nameBF">
                    <div class="name">
                        <input type="text" name="nameBf" placeholder="彼氏の名前">
                    </div>
                    <div class="birth">
                        <select name="birthYearBf" id="birthYearBf">
                            <?php for ($i=1970; $i<=2030; $i++) { ?>
                            <option name="birthYearBf" value="<?php echo $i; ?>"><?php echo $i;?></option>
                            <?php }?>
                        </select>
                        年
                        <select name="birthMonthBf" id="birthMonthBf">
                            <?php for ($i=1; $i<=12; $i++) { ?>
                            <option name="birthMonthBf" value="<?php echo $i; ?>"><?php echo $i;?></option>
                            <?php }?>
                        </select>
                        月
                        <select name="birthDayBf" id="birthDayBf">
                            <?php for ($i=1; $i<=31; $i++) { ?>
                            <option name="birthDayBf" value="<?php echo $i; ?>"><?php echo $i;?></option>
                            <?php }?>
                        </select>
                        日
                    </div>
                </div>
            </div>
            <div id="NameGF">
                <div class="TitleNameGF">彼女名</div>
                <div class="nameGF">
                    <div class="name">
                    <input type="text" name="nameGf" placeholder="彼女の名前">
                    </div>
                    <div class="birth">
                    <select name="birthYearGf" id="birthYearGf">
                            <?php for ($i=1970; $i<=2030; $i++) { ?>
                            <option name="birthYearGf" value="<?php echo $i; ?>"><?php echo $i;?></option>
                            <?php }?>
                        </select>
                        年
                        <select name="birthMonthGf" id="birthMonthGf">
                            <?php for ($i=1; $i<=12; $i++) { ?>
                            <option name="birthMonthGf" value="<?php echo $i; ?>"><?php echo $i;?></option>
                            <?php }?>
                        </select>
                        月
                        <select name="birthDayGf" id="birthDayGf">
                            <?php for ($i=1; $i<=31; $i++) { ?>
                            <option name="birthDayGf" value="<?php echo $i; ?>"><?php echo $i;?></option>
                            <?php }?>
                        </select>
                        日
                    </div>
                </div>
            </div>
            <div id="DayCount">
                <div class="title">付き合った日</div>
                <div class="day">
                    <select name="dayCountYear" id="dayCountYear">
                        <?php for($i=1990; $i<=2030; $i++) { ?>
                        <option name="dayCountYear" value="<?php echo $i; ?>"><?php echo $i;?></option>
                        <?php } ?>
                    </select>
                    年
                    <select name="dayCountMonth" id="dayCountMonth">
                        <?php for($i=1; $i<=12; $i++) { ?>
                        <option name="dayCountMonth" value="<?php echo $i; ?>"><?php echo $i;?></option>
                        <?php } ?>
                    </select>
                    月
                    <select name="dayCountDay" id="dayCountDay">
                        <?php for($i=1; $i<=31; $i++) { ?>
                        <option name="dayCountDay" value="<?php echo $i; ?>"><?php echo $i;?></option>
                        <?php } ?>
                    </select>
                    日
                </div>
            </div>
            <div id="Photos">
                <div class="title">テーマのPhoto</div>
                <div class="photo">
                    <input type="file" name="fileImg">
                </div>
            </div>
            <div id="ThemeColor">
                <div class="title">Webサイトのテーマ色</div>
                <div class="color">
                    <select name="themeColor" id="themeColor">
                        <?php
                            $colors = array(red, blue, yellow, white, green, orange);
                            for ($i=0; $i<count($colors); $i++) {
                        ?>
                        <option value="<?php echo $colors[$i]; ?>" name="themeColor"><? echo $colors[$i]; ?></option>
                        <?php }?>
                    </select>
                </div>
            </div>

        </div>
        <!-- 更新 or 新規登録 ボタン -->
        
        <div id="Button"><button type="submit">登録</button></div>
        </form>
    </div>

    <?php 
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

    <script src="js/app-setting.js"></script>
</body>
</html>