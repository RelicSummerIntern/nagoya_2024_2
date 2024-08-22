@extends('layouts.commons_users')

@section('content')
<head>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>マイページ - 個人情報</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            width: 80%;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center
        }
        a {
            text-align: center
        }
        h1 {
            color: #333;
        }
        h2 {
            color: #333;
        }
        h3 {
            color: red;
            
        }
        h4 {
            color: #333;
        }
        .info {
            margin: 10px 0;
            padding: 10px 0;
            border-bottom: 1px solid #ddd;
        }
        .info:last-child {
            border-bottom: none;
        }
        .label {
            font-weight: bold;
            color: #555;
        }
        .value {
            margin-left: 10px;
            color: #000;
        }
    </style>
</head>

<body>

    <div class="container">
        <h1>クエストクリア！</h1>
        <h4>クーポン獲得まで 7/7</h4>
        <div style="border: 1px solid; background-color: #00ffff;"><h3>クーポンゲット！<h3></div>
    </div>
    <a href="/home">トップページに戻る</a>
</body>

@endsection