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
        }
        h1 {
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
        <h1>マイページ - 個人情報</h1>

        <?php
        // ユーザー情報の配列（通常はデータベースから取得する）
        $user = [
            '名前' => '山田 太郎',
            'メールアドレス' => 'taro.yamada@example.com',
            '住所' => '東京都港区赤坂1-2-3',
            '電話番号' => '090-1234-5678',
            '生年月日' => '1985年5月10日'
        ];
        ?>

        <!-- ユーザー情報の表示 -->
        <?php foreach ($user as $label => $value): ?>
            <div class="info">
                <span class="label"><?php echo htmlspecialchars($label); ?>:</span>
                <span class="value"><?php echo htmlspecialchars($value); ?></span>
            </div>
        <?php endforeach; ?>
    </div>

</body>

@endsection