$(function() {

  // 現在の日付取得
  let today = new Date();

  // 日付情報から月を取得
  let thisMonth = today.getMonth()+1;

  // 今月でカレンダー作成
  createCalendar(thisMonth);

  // 前へ、または次へが押された時に呼ばれる
  $(document).on('click','.calendar-change-button',function(){
    // 押されたボタンのdata-month="〇〇"の、〇〇を取得。
    // ちなみに〇〇には月の情報が入っている
    let month = $(this).data('month');

    // 取得した月でカレンダー再作成
    createCalendar(month);
  });

});

// 月を引数にもらって、カレンダーを作成する関数
function createCalendar(month) {
  $.ajax({
    'type': 'GET',
    'url': 'http://localhost/Long_Distance_Lover_Service/Calender.php/',
    'dataType': 'html',
    'data': {
      't': month
    }
  }).done((data) => {
    $('#CalenderDisplay').html(data);
  }).fail((error) => {
    console.warn(error);
  })
}