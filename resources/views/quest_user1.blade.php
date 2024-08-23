@extends('layouts.commons_users')

@section('content')
<style>
    /* スタイルはここに記述 */
    main {
        max-width: 800px;
        margin: 50px auto;
        text-align: center;
    }

    .quest {
        margin: 40px 0;
        background-color: white;
        padding: 40px;
        font-size: 20px;
        font-weight: bold;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .large_text {
        font-size: 60px;
    }

    .sub_text {
        margin-top: 20px;
        margin-left: 5px;
        font-size: 15px;
        text-align: left;
    }

    .text_box {
        margin-top: 15px;
        height: 70px;
        font-size: 30px;
        padding: 10px;
        border-radius: 5px;
        border: 1px solid #ccc;
        width: 100%;
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
            <span class="large_text">あいことば</span> を入力
        </p>
        <p class="textbox">
            <form action="{{ route('quest.complete', ['quest' => $quest->id]) }}" method="POST">
                @csrf
                <input type="text" id="code" name="code" class="text_box" placeholder="あいことば" required>
                <button type="submit" class="send">送信</button>
            </form>
        </p>
    </div>

    <a href="{{ route('Quest.index') }}" class="return">クエストボードに戻る</a>
</main>

@endsection