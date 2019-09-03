$(function(){

    // やりたいこと: カレンダーのボタンが押されたときに、再読み込みなしで、表示する

    // 1. カレンダーボタン(前月・次月・今日)がクリックされたときにajaxで値をindex.phpに渡す？
    // 2. 既存のカレンダーを消す
    // 3. 変更された値を入れたカレンダーを表示する

    
    //　次月ボタンをクリック
    $('#nextMonth').click(function(){
        
       $('#CalenderDisplay').load('Calender.php/index.php', function(){ // コールバック関数を使う(第二引数をとる)
           $(this).insertAfter('#CalenderTitle');
       });
   });



});