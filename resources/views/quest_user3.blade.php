@extends('layouts.commons_users')

@section('content')
<style>
    main {
        max-width: 800px;
        margin: 50px auto; /* フォーム全体を少し下に下げる */
        text-align: center;
    }
    
    .quest {
        margin: 40px 0;
        background-color: white;
        padding: 40px; /* パディングを増やして、全体の高さを調整 */
        font-size: 20px;
        font-weight: bold;
        border-radius: 10px; /* 角を少し丸くする */
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* 影を追加して立体感を出す */
    }

    .large_text {
        font-size: 60px;
    }

    .sub_text {
        margin-top: 20px; /* 上下の間隔を調整 */
        margin-left: 5px;
        font-size: 15px;
        text-align: left;
    }
    
    .centertext {
        margin-top: 40px;
        font-size: 20px; /* テキストボックス内の文字サイズを調整 */
        display: flex;
        justify-content: space-between;
        
    }

    .lefttext{
        text-align: left;
        margin-left: 200px;
    }

    .righttext{
        text-align: right;
        margin-right: 250px;
    }

    .black-box {
        margin-top: 20px;
        background-color: black; /* 背景色を黒に設定 */
        color: white; /* 文字色を白に設定 */
        padding: 20px; /* 四角形内のパディングを設定 */
        display: inline-block; /* 四角形が内容に応じてサイズを調整するように設定 */
        font-size: 60px;
    }
    

    

    .return {
        padding: 10px 20px;
        background-color: #ccc;
        color: black;
        font-size: 18px;
        font-weight: bold;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
        text-decoration: none;

    }

    .return:hover {
        background-color: #999;
    }
</style>
    <main>
        <div class="quest">
            <p class="main_text">
                <span class="large_text">クエストクリア！</span>
                
            </p>
            <div class="centertext">
                <span class="lefttext">クーポン獲得まで</span>
                <span class="righttext"><span class="font-extrabold text-20px text-red-600 leading-tight">{{ $totalClearCount }}</span>/7</span>
            </div>
            
            <div class="black-box">クーポンGET！</div>
        </div>

        

        <a href="{{ route('Quest.index') }}" class="return">
            クエストボードに戻る
        </a>
    </main>
@endsection
