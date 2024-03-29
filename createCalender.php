<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>予定の記入</title>
    <link rel="stylesheet" href="css/styles-createCalender.css">
    <link rel="stylesheet" href="Calender.php/HelpsCreateCalender.css">
</head>
<body>

    <div id="schedules">
    
            <div id="selectDate">セレクトされた日付を返す</div>

            <button id="addSchedule">予定を追加</button>

            <div id="schedule"> 

                <div id="Times"><!--ここのコンテンツを増やす-->
                    <div id="Time">
                            <div>スケジュール</div>
                            <div id="timeStart">
                                <select name="" id="">
                                    <?php for($i = 1; $i <= 24; $i++) { ?>
                                    <option value=""><?php echo $i ;?>時</option>
                                    <?php }?>
                                </select>
                                <select name="" id="">
                                    <?php $i = 0; ?>
                                    <?php while($i < 60) { ?>
                                    <option value=""><?php echo $i ;?>分</option>
                                    <?php $i += 5; }?>
                                </select>
                            </div>
                            
                            <div>から</div>

                            <div id="timeEnd">
                                <select name="" id="">
                                    <?php for($i = 1; $i <= 24; $i++) { ?>
                                    <option value=""><?php echo $i ;?>時</option>
                                    <?php }?>
                                </select>
                                <select name="" id="">
                                    <?php $i = 0; ?>
                                    <?php while($i < 60) { ?>
                                    <option value=""><?php echo $i ;?>分</option>
                                    <?php $i += 5; }?>
                                </select>
                            </div>
                        </div>

                        <div id="Description">
                            <textarea name="" id="" cols="30" rows="10"></textarea>
                        </div>

                        <button class="deleteSchedule">取り消す</button>

                    </div> <!-- Time -->
                </div> <!-- Times -->
                <div id="back"><button>カレンダーに戻る</button></div>
            </div> <!-- schedule -->
        </div> <!-- selectDate -->
    </div> <!-- schedules -->



    <?php require_once "Calender.php/HelpsCreateCalender.php"; ?>
    



        <div id="Button">
            <button>更新❤️</button>
        </div>



    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>

    <script src="Calender.php/HelpsCreateCalender.js"></script>
    <script src="js/app-createCalender.js"></script>

</body>
</html>