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
        text-align:left;
    }

    .store_address{
        text-align:left;
    }


    
</style>
    <main>
        <div class="quest_board">
            <div class="quest_board_h">
                <h2 class="store_name">店の名前</h2>
                <p class="store_open_day">オープン日 ~~年 ~~月 ~~日</p>
            </div>

            <div class="quest_board_b">
                <div>
                    <p class="store_explanation">説明・コメント</p>
                    <p class="store_address">所在地など</p>
                </div>
                
                <!-- 実際はimg -->
                <div class="black">画像を貼る</div>
            </div>
               

            

        </div>
    </main>
@endsection