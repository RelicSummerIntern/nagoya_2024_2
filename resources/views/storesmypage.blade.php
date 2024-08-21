@extends('layouts.commons_stores')

@section('content')


    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>店舗情報</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
                margin: 0;
                padding: 0;
                margin-bottom: 20px;
            }
            .container {
                max-width: 800px;
                margin: 0 auto;
                padding: 20px;
                background-color: #ffffff;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                margin-top: 30px;

            }
            .header, .footer {
                text-align: center;
                margin-bottom: 20px;
            }
            .header img {
                max-width: 100%;
                height: auto;
            }
            .shop-info {
                text-align: left;
            }
            .shop-info h1 {
                .shop-info h1 {
                font-size: 24px;
                margin-bottom: 10px;
                font-weight: extrabold; /* 文字を太くする */
    }
            }
            .shop-info p {
                margin-top: 20px;
                margin-bottom: 20px;
                font-size: 18px;
            }
            .description {
                font-size: 16px;
                line-height: 1.5;
                margin-bottom: 20px;
                padding: 15px; /* 内側のスペースを設定 */
                border: 1px solid #e0e0e0; /* 四角い枠線を追加 */
                background-color: #f9f9f9; /* 背景色を設定（必要に応じて変更可能） */
            }
            .contact-info {
                background-color: #f9f9f9;
                padding: 10px;
                border-top: 1px solid #e0e0e0;
                text-align: left;
            }
            .contact-info p {
                margin: 5px 0;
            }
            .social-icons {
                text-align: right;
            }
            .social-icons a {
                margin: 0 5px; /* アイコン間のスペースを調整 */
                text-decoration: none;
                display: inline-block; /* アイコンを横並びにする */
            }
            .social-icons img {
                vertical-align: middle; /* アイコンの縦位置を揃える */
                width: 50px; /* アイコンの幅を統一 */
                height: 50px; /* アイコンの高さを統一 */
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="header">
                <img src="images/sample.jpg" alt="店舗画像">
            </div>
            <div class="shop-info">
                <h1>よよい軒</h1>
                <p>オープン日: 2024 年 8 月 19 日</p>
            </div>
            <div class="description">
                <p>説明：ここに店舗の説明文が入ります。お店の特徴や提供するサービスについて詳しく書かれています。</p>
            </div>
                <div class="contact-info">
                    <p>住所: T450-0002 愛知県名古屋市中村区名駅4丁目7-1</p>
                    <p>電話番号: 090-0000-0000</p>
                    <p>メールアドレス: example@gmail.com</p>
                    <div class="social-icons">
                    <a href="https://www.twitter.com/" target="_blank">
                        <img src="{{ asset('images/twitter-icon.png') }}" alt="Twitter" width="30" height="30">
                    </a>

                    <a href="https://www.instagram.com/" target="_blank">
                        <img src="{{ asset('images/instagram-icon.png') }}" alt="Instagram" width="30" height="30">
                    </a>
                    
                    <a href="https://line.me/" target="_blank">
                        <img src="{{ asset('images/line-icon.png') }}" alt="LINE" width="30" height="30">
                    </a>
                </div>
            </div>
            <div class="footer">
                <p>&copy; 2024 店舗名. All Rights Reserved.</p>
            </div>
        </div>
    </body>


@endsection