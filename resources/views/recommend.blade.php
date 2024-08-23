@extends('layouts.commons_users')

@section('content')
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>今日のオススメ</title>
        <style>
            body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
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
            .container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            }
            @media (max-width: 782px){
                .container{
                display: flex;
                flex-direction: column;
                }
            }
            .header, .footer {
                text-align: center;
                margin-bottom: 20px;
            }
            .recomend_text {
                text-align: left;
                font-size: 80px
            }
            .return {
                width: 960px;
                margin: auto;
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
                text-align: center;
            }
        </style>
</head>
<body>
    <div class="recent_open">
        <div class="container">
            <div class="header">
                <img src="images/sample.jpg" alt="店舗画像">
            </div>
            <div class="rocomend_text">
                <ol>
                    <li>店舗名:</li>
                    <li>ジャンル:</li>
                    <li>住所:</li>
                    <li>電話番号:</li>
                    <li>その他・詳細:</li>
                </ol>
            </div>
        </div>
        <a href="{{ route('Quest.index') }}" class="return">
            クエストボードに移動
        </a>
    </div>
</body>

@endsection