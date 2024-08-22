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
        font-size: 20px;
        font-weight: bold;
        border-radius: 10px; /* 角を少し丸くする */
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* 影を追加して立体感を出す */
    }

    
</style>
<main>
    <div class="recent_open">
        〜オープン〜
    </div>
</main>
@endsection
