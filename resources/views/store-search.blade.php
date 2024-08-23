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
    @foreach ($stores as $store)
        <a href>
            <div class="quest_board">
                <div class="quest_board_h">
                    <h2 class="store_name">{{ $store->name }}</h2>
                    <p class="store_open_day">オープン日： {{ $store->opening_year }} 年 {{ $store->opening_month }} 月 {{ $store->opening_day }} 日</p>
                </div>

                <div class="quest_board_b">
                    <div>
                        <p class="store_explanation">{{ $store->discriptionn }}</p>
                        <p class="store_address">〒{{ $store->postal_code }} {{ $store->address}} {{ $store->building_name}}</p>
                    </div>
                    
                    <!-- 実際はimg -->
                    
                </div>
            </div>
        </a>
    @endforeach

     


        
    </main>
@endsection