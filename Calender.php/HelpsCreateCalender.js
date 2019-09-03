$(function(){

    let cell = $('tbody').children('tr:first').siblings().children()
    // console.log( cell.text() );

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
            let text = selectDate + 'th ' + selectMonth;

            $('#selectDate').text(text);

            $('#schedules').css('display', 'flex');
        });
    });


    

    $(document).on('click', '#addSchedule', function(){
        let clone = $('#Times').clone();
        clone.insertAfter($('#Times'));
    });

    // $('#addSchedule').on('click', function(){
    //     let clone = $('#Times').clone();
    //     clone.insertAfter($('#Times'));
    // });


    $(document).on("click", '.deleteSchedule', function () {
        $(this).each(function(index, element){
            $(this).on('click', function() {
                $('#Times').remove();
            });
        });
    });




    // $('.deleteSchedule').on('click', function(){
    //     $(this).each(function(index, element){
    //         $(this).on('click', function() {
    //             $('#Times').remove();
    //         });
    //     });
    // })


    $('#back button').on('mouseover', function(){
        $(this).css('cursor', 'pointer');
    }).on('click', function(){
        $('#schedules').css('display', 'none');
    });







});