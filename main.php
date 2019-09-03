<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>COUPLE BAY</title>
    <link rel="stylesheet" href="css/styles-main.css">
    <link rel="stylesheet" href="Calender.php/style.css">
</head>
<body>
    <!-- header -->
    <div id="Header">
        <!-- Service-logo -->
        <div id="ServiceLogo"><img src="img/festisite_nike.png" alt=""></div>
        <!-- Service-Title -->
        <div id="ServiceTitle">Long Distance Lover Service</div>
        <!-- Button -->
        <div id="Button">
            <!-- album -->
            <div><a href="createAlbum.php">日記📝</a></div>
            <!-- calender -->
            <div><a href="createCalender.php">予定✍️</a></div>
            <!-- setting -->
            <div><a href="">設定✏️</a></div>
        </div>
    </div>

    <!-- slideshow-images -->
    <div id="Slideshow">
        <!-- ここにslideshowでイメージ画像を配置する -->
        
    </div>

    
    <!-- profile -->
    <div id="Profile">
        <!-- 彼氏のプロフィール -->
        <div id="BF-profile">
            <div id="BFface-image"></div>
            <div id="BFface-description">Yuto Hisamatsu <br> 1998年5月8日</div>
        </div>
        <!-- 付き合って〇〇日カウント -->
        <div id="DayCount">Loving each other<br><span id="DayCountDisplay">1年6ヶ月10日</span></div>
        <!-- 彼女のプロフィール -->
        <div id="GF-profile">
            <div id="GFface-image"></div>
            <div id="GFface-description">Maya Nakamura <br> 1998年7月17日</div>
        </div>
    </div>
    
    <!-- album -->
    <div id="Album">
        <div id="AlbumTitle">日記</div>
        <div id="AlbumDisplay">
            <div id="AlbumDisplay-row1">
                <div class="albums">
                    <div class="albums-title">#Happy</div>
                    <div class="albums-image"><img src="img/black.jpg" alt=""></div>
                    <div class="albums-description">タイトル:こんにちは<br>日時:2019/4/7</div>
                </div>
                <div class="albums">
                    <div class="albums-title">#Sad</div>
                    <div class="albums-image"><img src="img/hands.jpg" alt=""></div>
                    <div class="albums-description">タイトル:七夕！<br>日時:2019/7/7</div>                        
                </div>
                <div class="albums">
                    <div class="albums-title">#Happy</div>
                    <div class="albums-image"><img src="img/sea.jpg" alt=""></div>
                    <div class="albums-description">タイトル:おはよう<br>日時:2019/8/10</div>    
                </div>
            </div>
            <div id="AlbumDisplay-row2">
                <div class="albums">
                    <div class="albums-title">#Surprising</div>
                    <div class="albums-image"><img src="img/topImage.jpg" alt=""></div>
                    <div class="albums-description">タイトル:こんばんは<br>日時:2019/8/17</div>    
                </div>
                <div class="albums">                        
                    <div class="albums-title">#Happy</div>
                    <div class="albums-image"><img src="img/yuto.JPG" alt=""></div>
                    <div class="albums-description">タイトル:こんにちは<br>日時:2019/9/7</div>    
                </div>
                <div class="albums">
                    <div class="albums-title">#Happy</div>
                    <div class="albums-image"><img src="img/maya.JPG" alt=""></div>
                    <div class="albums-description">タイトル:こんにちは<br>日時:2019/9/17</div>    
                </div>
            </div>
        </div>
    </div>
    
    <!-- calender -->
    <div id="Calender">
        <div id="CalenderTitle">9月の予定表</div>
        <div id="result"></div>
        <div id="CalenderDisplay">
            <?php require_once "Calender.php/index.php"; ?>
        </div>
    <!-- Detail of calender -->
        <div id="CalenderDisplay-Detail-title"></div>
        <div id="CalenderDisplay-Detail">yuto</div>
        <!-- カレンダーの日付がクリックされたら予定の詳細を表示 -->
    </div>
    
    <!-- footer -->
    <div id="Footer">
        <div id="Developer">Yuto Hisamatsu</div>
    </div>


    <script
    src="https://code.jquery.com/jquery-3.4.1.js"
    integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
    crossorigin="anonymous"></script>

    <script src="js/app-main.js"></script>
    <script src="Calender.php/app.js"></script>
</body>
</html>