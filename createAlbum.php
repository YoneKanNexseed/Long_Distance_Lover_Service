<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>日記の作成</title>
    <link rel="stylesheet" href="css/styles-createAlbum.css">
</head>
<body>
    <div id="Contents">
        <form action="" method="POST">
            <div id="SubContents">
            <!-- 日記タイトルの記入 -->
                <div id="InsertTitle">
                    <input type="text" name="albumTitle" value="" placeholder="日記のタイトルを記入">
                </div>
            <!-- 日記のイメージPhotoを指定 -->
                <div id="InsertPhoto">
                    <input type="file" name="albumFile">
                </div>
            <!-- ハッシュタグの選択 -->
                <div id="InsertHashTag">
                    <?php $feelings = ['Happy', 'Sad', 'Angry']; ?>
                    <?php foreach ($feelings as $feeling) { ?>
                        <div class="feelings">
                            <label><input id="feeling" type="radio" name="feeling" value="<?php echo $feeling; ?>"><?php echo '#'.$feeling; ?></label>
                        </div>
                    <?php }?>
                </div>
            </div>
            <div id="MainContents">
            <!-- 日記のContentを記入 -->
                <div id="InsertContent">
                    <textarea name="albumText" value="" placeholder="ここに日記を書く"></textarea>
                </div>
            </div>
            <div id="Submit">
            <!-- 送信ボタン -->
                <div id="Button">
                    <button type="submit">送信❤️</button>
                </div>
            </div>
        </form>
    </div>
    

    <script src="js/app-createAlbum.js"></script>
</body>
</html>

<?php

var_dump ($_POST['albumTitle']);
var_dump ($_POST['albumFile']);
var_dump ($_POST['feeling']);
var_dump ($_POST['albumText']);

?>