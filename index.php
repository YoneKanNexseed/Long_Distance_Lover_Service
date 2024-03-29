<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>COUPLE BAY</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <!-- 全体 -->
    <div id="top">
        <!-- このサービスについて -->

        <div id="aboutService">
            <div class="top-title">このサービスについて</div>
            <div id="descriptionService">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate repudiandae quidem dolore voluptatibus ipsum beatae temporibus obcaecati esse! Officia temporibus distinctio, vitae nesciunt dolorum explicabo laboriosam animi eius voluptas quibusdam.
                <button id="button-return">戻る</button>
            </div>
        </div>
        <!-- ログイン -->
        <?php require_once ('Login.php'); ?>
        <div id="Login">
            <div class="top-title">ログイン</div> 
            <div id="formLoginBeforePush">

                <form action="" class="formLogin" method="GET">
                    <div>カップル名: <input type="text" name="coupleName" class="inputForm-couple"></div>
                    <div>
                        <label><input type="radio" name="select" value="nameBf" class="radioBtn-BF">彼氏</label>
                        <label><input type="radio" name="select" value="nameGf" class="radioBtn-GF">彼女</label>
                    </div>
                    <div>パスワード: <input type="password" name="password" value="" class="inputPassword"></div>
                    <div class="Submit-Login-parent"><input type="submit" value="Login" class="submitLogin"></div>
                </form>

            </div> 
        </div>
        <!-- 新規登録 -->
        <div id="NewAccount">
            <div class="top-title">新規登録</div>
        </div>
        <div id="dialogBefore">
                <div class="confirm">パートナーとの永遠の愛を誓えますか？</div>
                <div class="answer">
                <div class="cancel">キャンセル</div>
                <div class="yes" onclick = "location.href='newsetting.php';">はい、誓います</div>
                </div>
            </div>
    </div>

    <script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
 
    <script src="js/app.js"></script>
</body>
</html>



