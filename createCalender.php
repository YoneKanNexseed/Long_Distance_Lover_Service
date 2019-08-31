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
        <div id="schedule">
            <div id="selectDate">セレクトされた日付を返す</div>
            <div>
                <select name="" id="">
                    <?php for($i = 1; $i <= 24; $i++) { ?>
                    <option value=""><?php echo $i ;?>時</option>
                    <?php }?>
                </select>

                <select name="" id="">
                    <?php $i = 0; ?>
                    <?php while($i < 60) { 
                      $i += 5;  
                    ?>
                    <option value=""><?php echo $i ;?>分</option>
                    <?php }?>
                </select>
                    
                <select name="" id="">
                    <?php for($i = 1; $i <= 24; $i++) { ?>
                    <option value=""><?php echo $i ;?>時</option>
                    <?php }?>
                </select>

                <select name="" id="">
                    <?php for($i = 1; $i <= 24; $i++) { ?>
                    <option value=""><?php echo $i ;?>時</option>
                    <?php }?>
                </select>
            </div>
            <div></div>

        </div>
    </div>

    <?php require_once "Calender.php/HelpsCreateCalender.php"; ?>



        <div id="Button">
            <button>更新❤️</button>
        </div>



    <script
    src="https://code.jquery.com/jquery-3.4.1.js"
    integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
    crossorigin="anonymous"></script>

    <script scr="Calender.php/HelpsCreateCalender.js"></script>
    <script src="js/app-createCalender.js"></script>
</body>
</html>