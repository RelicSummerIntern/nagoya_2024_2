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
    
    .text_box {
        margin-top: 15px; /* テキストボックスとの間隔を広げる */
        height: 70px; /* テキストボックスの縦の高さを大きくする */
        font-size: 30px; /* テキストボックス内の文字サイズを調整 */
        padding: 10px; /* テキストボックス内の余白を調整 */
        border-radius: 5px; /* テキストボックスの角を丸くする */
        border: 1px solid #ccc; /* テキストボックスの枠線 */
        width: 100%; /* テキストボックスを親要素の幅いっぱいにする */
        text-align: center;
    }

    .send {
        margin-top: 20px;
        padding: 10px 30px;
        background-color: #4a90e2;
        color: white;
        font-size: 18px;
        font-weight: bold;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .send:hover {
        background-color: #357ab7;
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
            <p class="textbox">
                <input type="text" id="code" name="code" class="text_box" placeholder="あいことば" required>
            </p>
            <button class="send">
                送信
            </button>
        </div>

        <a href="{{ route('Quest.index') }}" class="return">
            クエストボードに戻る
        </a>
    </main>
@endsection
