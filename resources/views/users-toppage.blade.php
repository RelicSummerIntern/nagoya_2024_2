@extends('layouts.commons_users')

@section('content')
<style>
    main {
        max-width: 800px;
        margin: 50px auto; /* フォーム全体を少し下に下げる */
        text-align: center;
    }
    
    .recent_open {
        margin: 40px 0;
        background-color: white;
        padding: 40px; /* パディングを増やして、全体の高さを調整 */
        font-size: 30px;
        font-weight: bold;
        border-radius: 10px; /* 角を少し丸くする */
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* 影を追加して立体感を出す */
    }

    .recent_open_title{
        font-size: 50px;
        font-weight: bold;
    }

    .store_name{
        text-align: left;
        margin: 0;
    }
    .store_open_day{
        text-align: right;
        margin: 0;
        font-size: 20px;
    }

    .quest_board_b{
        display:flex;
        justify-content: space-between;
        text-align: left;

    }

    .black{
        background-color: black;
    }
    .store_explanation{
        margin-top:20px; 
        font-size: 30px;
        text-align: center;
    }

    .store_address{
        text-align:left;
    }

    .store_sale{
        margin: 30px 0;
        background-color: lightgray;
        font-weight: bold;
        border-radius: 10px; /* 角を少し丸くする */
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* 影を追加して立体感を出す */
    }

    .store_sale_title{
        font-size: 20px;
        text-align: left;
        margin-left: 10px;
    }

    .store_sale_main{
        text-align: left;
        font-size: 30px;
        margin-left: 10px;
    }
    
</style>
<main>
    <div class="recent_open">
        <p class="recent_open_title">
            ⭐️NEW OPEN⭐️
        </p>
        <img src="images/sample.jpg" alt="店舗画像">
        <p class="store_name">油そば佐の藤</p>
        <p class="store_open_day">8月23日OPEN!</p>
        <p class="store_explanation">ニンニクたっぷりでめっちゃうまい！</p>
        <div class="store_sale">
            <p class="store_sale_title">〜お得なお知らせ〜</p>
            <p class="store_sale_main">開店セール！美味しかったら全額返金します！</p>
        </div>
    </div>
</main>
@endsection
