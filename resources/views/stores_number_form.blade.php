@extends('layouts.commons_stores')

@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>認証コード入力フォーム</title>
    <style>
        body {
            text-align: center;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            text-align:center;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            margin-top: 40px;
        }
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 16px;
        }
        input[type="submit"] {
            background-color: #367ab7;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #367ab7;
        }
        .font{
            font-weight: bold;
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
    </style>
</head>
<body>

    <div class="container">
        <h1 class="font">3桁の数字を入力</h1>
        <form action="process.php" method="post">
            <input type="number" name="number" min="000" max="999" required>
            <button class="send">
                送信
            </button>
        </form>
    </div>

</body>

@endsection