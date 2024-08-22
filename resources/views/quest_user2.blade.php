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
        
        font-size: 60px; /* テキストボックス内の文字サイズを調整 */
        
        text-align: center;
    }

    .authentication{
        margin-top: 10px;
    }

    .code{
        font-size: 60px;
    }

    .refresh {
        width: 90px; /* 幅を設定 */
        height: 50px; /* 高さを設定 */
        background-color: #ccc; /* 背景色 */
        color: black;
        font-size: 18px;
        font-weight: bold;
        border: none;
        border-radius: 50%; /* 丸くするために50%のborder-radiusを設定 */
        transition: background-color 0.3s;
        text-align: center;
        line-height: 60px; /* ボタン内のテキストを中央に配置するためにline-heightを設定 */
        text-decoration: none;
        border-radius: 20px;
    }

    .refresh:hover {
        background-color: #999;
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
                <span class="large_text">あいことば</span>
                を入力
            </p>
            <p class="centertext">
                入力完了
            </p>
            <div class="authentication">
                <p>認証コード</p>
                <p class="code">000</p>
            </div>
            <button class="refresh">
                更新
            </button>
        </div>

        

        <a href="{{ route('Quest.index') }}" class="return">
            クエストボードに戻る
        </a>
    </main>
@endsection
