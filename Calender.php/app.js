$(function(){

    let cell = $('tbody').children('tr:first').siblings().children()
    console.log( cell.text() );

    cell.each(function(index, element) {

        $(element).on('mouseover', function(){
            $(this).css('cursor', 'pointer');
        }).on('mouseout', function(){
            $(this).css('cursor', 'none');
        });

        $(element).on('click', function() {
            let selectDate = $(element).text();
            let selectMonth = $('#Month').text();
            //キャッシュ　が問題　コマンド＋シフト＋R
            let text = $('<div class="js"></div>').text(selectDate + 'th ' + selectMonth);



            if($('#CalenderDisplay-Detail-title').text() == ''){
                $('#CalenderDisplay-Detail-title').append(text);
                $('#CalenderDisplay-Detail').css('display', 'flex');
            } else {
                $('#CalenderDisplay-Detail-title').text('');
                $('#CalenderDisplay-Detail-title').append(text);
                $('#CalenderDisplay-Detail').css('display', 'flex');

            }

        });
    });









});