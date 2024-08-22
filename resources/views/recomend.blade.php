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
            .container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            }
            @media (max-width: 576px){
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
            }
        </style>
</head>
<body>
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
</body>

@endsection