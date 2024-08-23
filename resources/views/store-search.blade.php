@extends('layouts.commons_users')

@section('content')
<style>
    main{
        max-width: 800px;
        margin: 0 auto;
        text-align:center;
        
    }
    
    .quest_board{
        margin: 40px 0;
        background-color: white;
        padding: 30px;
        
        
    }
    .quest_board_h{
        display:flex;
        justify-content: space-between;
        border: solid;
        border: 2px solid;
        border-color: #f5f5f5;
        border-top: transparent; 
        border-left: transparent; 
        border-right: transparent; 
        align-items: flex-end; /* 下に寄せる */
        
    }

    
    .store_name{
        text-align: left;
        margin: 0;
    }
    .store_open_day{
        text-align: right;
        margin: 0;
    }

    .quest_board_b{
        display:flex;
        justify-content: space-between;
        text-align: left;

    }

    .black{
        background-color: black;
    }
    .store_explanation{
        margin-top:20px; 
        margin-right: 100px;
        text-align:left;
    }

    .store_address{
        text-align:left;
    }

    a {
    color: inherit; /* リンクの色を親要素の色に合わせる */
    text-decoration: none; /* 下線を削除する */
}



    
</style>
    <main>
        <a href>
            <div class="quest_board">
                <div class="quest_board_h">
                    <h2 class="store_name">油そば佐の藤</h2>
                    <p class="store_open_day">オープン日：2024年 8月 23日</p>
                </div>

                <div class="quest_board_b">
                    <div>
                        <p class="store_explanation">油たっぷりでめっちゃうまい！</p>
                        <p class="store_address">〒464-0000 愛知県名古屋市中区〇〇町1-3 からまぜビル1階</p>
                    </div>
                    
                    <!-- 実際はimg -->
                    
                </div>
            </div>
        </a>

        <a href>
            <div class="quest_board">
                <div class="quest_board_h">
                    <h2 class="store_name">ラーメン三郎</h2>
                    <p class="store_open_day">オープン日：2024年 3月 14日</p>
                </div>

                <div class="quest_board_b">
                    <div>
                        <p class="store_explanation">ニンニクヤサイアブラマシマシできます！
                        </p>
                        <p class="store_address">〒123-0000 東京都〇〇区〇〇町2-3 夢を語るビル12階</p>
                    </div>
                    
                    <!-- 実際はimg -->
                    
                </div>
            </div>
        </a>

        <a href>
            <div class="quest_board">
                <div class="quest_board_h">
                    <h2 class="store_name">混喫茶あんこ</h2>
                    <p class="store_open_day">オープン日：2024年 5月 1日</p>
                </div>

                <div class="quest_board_b">
                    <div>
                        <p class="store_explanation">名物四あんこサンドを是非ご賞味あれ！　¥32,000からテイクアウトも可能！
                        </p>
                        <p class="store_address">〒180-0001 三重県〇〇市〇〇町4-5 天和ビル3階</p>
                    </div>
                    
                    <!-- 実際はimg -->
                    
                </div>
            </div>
        </a>
            
        <a href>
            <div class="quest_board">
                <div class="quest_board_h">
                    <h2 class="store_name">C.C.Cafe</h2>
                    <p class="store_open_day">オープン日：2024年 4月 1日</p>
                </div>

                <div class="quest_board_b">
                    <div>
                        <p class="store_explanation">本格ピザで自分も、世界さえも変えてしまうような安らぎのひとときを。
                        </p>
                        <p class="store_address">〒000-0000 東京都〇〇区〇〇町0-0 </p>
                    </div>
                    
                    <!-- 実際はimg -->
                    
                </div>
            </div>
        </a>

        <a href>
            <div class="quest_board">
                <div class="quest_board_h">
                    <h2 class="store_name">金だこ</h2>
                    <p class="store_open_day">オープン日：2024年 7月 7日</p>
                </div>

                <div class="quest_board_b">
                    <div>
                        <p class="store_explanation">ゴリゴリに焼かれたたこ焼きを食べたらあなたも終わりです！
                        </p>
                        <p class="store_address">〒000-0000 宮城県仙台市国分町0-0 </p>
                    </div>
                    
                    <!-- 実際はimg -->
                    
                </div>
            </div>
        </a>

        
    </main>
@endsection