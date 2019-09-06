<?php

    function h($s) {
        return htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
    } 

    //一日から末日までの要素を作る
    //1. td要素を作る

    /*
        new DatePeriod('最初の日', 'どのくらいの期間を開けて日付を作るか', '期間の終わり');
            最初の日-> DateTimeオブジェクトを使う(DateTime('適当な文字で解釈してくれる'))
            期間 　 -> DateIntervalクラスを使う(1日ごとと書く= 'P + 1D(一日という意味)')
            終わり　-> DateTime('first of next month')で結果として、1日からこれを含まない(=つまり末日まで) 
    */

    /*
        翌月の部分 => 翌月の1日の曜日が何曜日かという情報
            曜日がわかれば、その曜日からSaturdayまでを埋めていけばOK
                → while文で曜日を、次の日曜日になるまで〇〇
            add()で1日ずつ'P1D'進める('引数')にはDateIntervalクラスのオブジェクトを取る
    */

    /*
        前月の部分 => 前月の末日の曜日を調べて、1 日ずつ引く
    */

    /*
        パラメータを変えることで指定した月のカレンダーを表示させる
        URLにtを渡して、カレンダーに表示されるようにする
    */

    /*
        正規表現 /\A\d{4}-\d{2}\z/
        数字が4桁で、数字が2桁
    */


     //URLから取得したつもり
    //  $t = '2015-09';
    try {
        if (!isset($_GET['t']) || !preg_match('/\A\d{4}-\d{2}\z/', $_GET['t']) ) {
            throw new Exception();
        }
        $thisMonth = new DateTime($_GET['t']);
    } catch (Exception $e) {
        $thisMonth = new DateTime('first day of this month');
    }

    /*
        前月、翌月のリンク
        $thisMonthを変化させる=>modify()メソッド
        ただ、直接呼ぶと、値が変わってしまうので、一旦、$thisMonthのコピーのオブジェクトを作ってあげて、それを元にmodify()をかけてあげて、
        $prevと$nextを作る
    */

    $dt = clone $thisMonth;
    // modifyは日付を足したり、引いたりできる modify('日付の足し引き')->format('対象の日付')
    $prev = $dt->modify('-1 month')->format('Y-m');
    $dt = clone $thisMonth;
    $next = $dt->modify('+1 month')->format('Y-m');
    


    //  $thisMonth = new DateTime($t); // 2015-08-01
     $yearMonth = $thisMonth->format('F Y');
 
    $tail = '';
    // $lastDayOfPrevMonth = new DateTime('last day of previous month');
    $lastDayOfPrevMonth = new DateTime('last day of ' . $yearMonth . '-1 month');
    while ($lastDayOfPrevMonth->format('w') < 6) {
        // $lastDayOfPrevMonth->format('d')で取ってきた10進数を、<td> ここ！ </td>に入れる
        $tail .= sprintf('<td class="gray">%d</td>', $lastDayOfPrevMonth->format('d'));
        // 1日ずつ引く
        $lastDayOfPrevMonth->sub(new DateInterval('P1D'));
    }


    $body = '';

    $period = new DatePeriod(
        // new DateTime('first day of this month'), // 最初の日
        new DateTime('first day of ' . $yearMonth), // 最初の日
        new DateInterval('P1D'), // どのくらいの期間
        // new DateTime('first day of next month') // 終わり
        new DateTime('first day of ' . $yearMonth . '+1 month') // 終わり
    );

    $today = new DateTime('today');
    

    //$body に対して td の要素が 1 から末日まで入ってくる
    foreach ($period as $day) {
        // 行変えは、曜日に降ってある番号(format)で条件処理
        if ($day->format('w') % 7 === 0) {
            $body .= '</tr><tr>'; // 行がえ
        }

        $todayClass = '';
        if($day->format('Y-m-d') === $today->format('Y-m-d')) {
            $todayClass = 'today';
        } else {
            $todayClass = '';
        }


        //書式付きで文字列を作ってくれる sprintf() という命令
        //$dayに数値 小文字のdで日付を表す(dateメソッド)
        //format('w')は曜日の扱えるやつ 0-6までがある
        $body .= sprintf('<td class="youbi_%d %s">%d</td>', $day->format('w'), $todayClass, $day->format('d'));
    }


    //翌月部分
    $head = '';
    // $firstDayOfNextMonth = new DateTime('first day of next month');
    $firstDayOfNextMonth = new DateTime('first day of ' . $yearMonth . '+1 month');
    // 翌月の1日が、日曜日になるまで
    while($firstDayOfNextMonth->format('w') > 0) {
        $head .= sprintf('<td class="gray">%d</td>', $firstDayOfNextMonth->format('d'));
        $firstDayOfNextMonth->add(new DateInterval('P1D')); //1日ずつ進める
    }

    $html = '<tr>' . $tail . $body . $head . '</tr>';



?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calender</title>
</head>
<body>

    <!-- カレンダー -->
    <table>
        <!-- ヘッド -->
        <thead>
            <tr>
                <!-- 前月へのリンク -->
                <!-- ？　パラメータ　値を渡すイメージ -->
                <th><span class="calendar-change-button" data-month="<?php echo h($prev); ?>">前へ</span></th>
                <th id="Month"><?php echo h($yearMonth); ?></th>
                <!-- 翌月へのリンク -->
                <th><span class="calendar-change-button" data-month="<?php echo h($prev); ?>">次へ</span></th>
            </tr>
        </thead>
        <!-- ボディー -->
        <tbody>

            <tr id="youbi">
                <td class="youbi_0">日</td>
                <td>月</td>
                <td>火</td>
                <td>水</td>
                <td>木</td>
                <td>金</td>
                <td class="youbi_6">土</td>
            </tr>
            <?php echo $html; ?>


        </tbody>
        <!-- フッター -->
        <tfoot>
            <tr>
                <!-- 本日のリンク -->
                <th><a href="?">Today</a></th>
            </tr>
        </tfoot>

    </table>


    
</body>
</html>
