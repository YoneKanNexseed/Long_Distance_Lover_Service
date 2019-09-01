'use strict';
{

    // 「このサービスについて」top-title[0]が押されたら
    let topTitle = document.getElementsByClassName('top-title');

/*
    // top-title[0]「このサービスについて」が押されたら、descriptionService「説明」を表示する
    topTitle[0].addEventListener('click', function() {
        // ログイン and 新規登録のIDを取得
        let Login = document.getElementById('Login');
        let NewAccount = document.getElementById('NewAccount');

        // ログイン and 新規登録の表示を消す
        Login.style.display = 'none';
        NewAccount.style.display = 'none';

        // descriptionServiceのIDを取得して、display=none;をflexに変更し、表示する
        let descriptionService = document.getElementById('descriptionService');
        descriptionService.style.display = 'flex';
    });
*/

/*
    // descriptionService「説明」部分の button-return「戻る」が押されたら、descriptionを消して、Login and　NewAccountを表示する
    let buttonReturn = document.getElementById('button-return');

    buttonReturn.addEventListener('click', function() {

        let descriptionService = document.getElementById('descriptionService');
        descriptionService.style.display = 'none';

        let Login = document.getElementById('Login');
        let NewAccount = document.getElementById('NewAccount');

        Login.style.display = 'flex';
        NewAccount.style.display = 'flex';

    });
*/
    // ログインボタンid="formLogin"を押されたら、formLogin「フォーム」を表示して、新規登録とのmarginを調整する



    topTitle[1].addEventListener('click', function() {
        let BeforePush = document.getElementById('formLoginBeforePush');

        BeforePush.id = 'formLogin';

        topTitle[2].style.marginTop = '-195px';

    });



 /*confirmやalertはカスタマイズができない->自作する
    // 新規登録が押されたら、confirmで確認する
    
    topTitle[2].addEventListener('click', function() {
        // confirmは、alertと違い結果を返り血で返してくれる
        let result = confirm('あなたたちは永遠の愛を誓えますか？');
        // 確認用のconsole.log表示
        if(result) {
            console.log('OKがクリックされました');
        } else {
            console.log('キャンセルがクリックされました');
        }
    });
*/


// 新規登録->ダイアログの表示

topTitle[2].addEventListener('click', function() {
    let dialog = document.getElementById('dialogBefore');
    dialog.id = 'dialog';
});

//cancelかYesかで処理を分けていく
let cancel = document.getElementsByClassName('cancel');
let yes = document.getElementsByClassName('yes');

cancel[0].addEventListener('click', function() {
    let dialog = document.getElementById('dialog');
    dialog.id = 'dialogBefore';    
});





/* 完さんへの質問

1. classNameで取得したときの、値の取れ方について・・

let cancel = document.getElementsByClassName('cancel');
htmlファイルで指定した、class="cancel"は一つしかない

?一つでも、配列の形のように取れてくるものなの？　HTMLCollection [div.cancel]

取得した結果が違う
console.log(cancel);    //HTMLCollection [div.cancel]
console.log(cancel[0]); //<div class="cancel">キャンセル</div>

2. 自作のダイアルボックスについて
confirm・・クライアントの結果をtrueとfalseで返してくれる
    後々、PHPなどで返ってきた値をもとに、処理を分岐していくことになると思うから、
    返すデータをくっつけたい
自作だから、できない。どうやったらいいの？どんな考え方で値をセットすればいいの？

3. cssファイルでのクラスについては、jsファイルからクラスを変更することできたけど、
　　id="◯◯"; #◯◯{ } についてもjsファイルから個別のプロパティを操作できるの？

    僕はわからなかったから、id名を変える処理をして、全体的に変更したイメージ
    気になったので聞いてみる。

4.技術的なことではなく。。今書いているのは、自力でコピペや写経をせずに、自分の頭で考えてコードを書いているが、
　もっと別にシンプルに書いたり、システムのことを考えて扱いやすい構成や書き方があると感じながら、やっているが。
　・現段階では、これでいいのか？笑　-> 経験や実務経験を積むにつれて、成長していけるやり方なのか？
　・また、もっと賢い仕組みや別の書き方に気づく？扱えるようになるタイミングや実感はあったのだろうか？(完さん自身)
    ※よく、エンジニアの人は、昔(初心者の頃)のコードをみると、突っ込みどころ満載って思うと言っている。
　・現段階で、一つの機能や作りたい構成の一部にだいぶ時間がかかってしまうが、
　　完さんも同じような道を辿ってきたのか？最初は、時間がかかってもやり方(勉強の仕方)は間違ってないだろうか？
    完さんくらいでもコピペとか？
    
    cssのクラスの付け方
    変数
    ルールブック　細かい名前の付け方
    クラスの考え方,
    MVC
    組み木(抽象(設計)->具体)
    オブジェクト指向・・最初から作る/おいおい後で共通項
    システムエンジニア・・プラモデルの設計図
    プログラマー・・ガンプラを作るほう
    
    1~10
    3.4  => コードのヒント→ 自分に置き換える(見つける力)
    
    「CSS テンプレート」


5.関数とクラスの違い・・イメージ、使いどころ、目的みたいな
    クラス＝人間　いくらでも作れる。処理や機能、型をまとめたもの
    関数　＝パンチ　処理ごとに書く。まとめる。(例)パンチ/キック


*/


    $(function(){
        
        $('.top-title').on('mouseover', function(){
            $(this).addClass('btn');
        }).on('mouseleave', function(){
            $(this).removeClass('btn');
        });
    
        $('#aboutService > .top-title').on('click', function(){
            $('#Login, #NewAccount').css('display', 'none');
            $('#descriptionService').fadeIn(400).css('display', 'flex');
        });
        $('#button-return').on('mouseover', function(){
            $(this).css('backgroundColor', 'red').css('opacity', '0.7');
        }).on('mouseout', function(){
            $(this).css('backgroundColor', 'white').css('opacity', '1');
        }).on('click', function(){
            $('#aboutService > div:last').fadeOut(400);
            $('#Login, #NewAccount').css('display', 'flex');
        });





        
    
    
    
    
    
    
    });











}