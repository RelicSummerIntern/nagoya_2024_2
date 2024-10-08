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
    @foreach($quests as $quest)
        <a href="{{ route('Store.show', ['id' => $quest->store->id]) }}">
            <div class="quest_board">
                <div class="quest_board_h">
                    <h2 class="store_name">{{ $quest->store->name }}</h2>
                    <p class="store_open_day">{{ $quest->store->opening_year }} 年 {{ $quest->store->opening_month }} 月 {{$quest->store->opening_day }} 日</p>
                </div>

                <div class="quest_board_b">
                    <div>
                        <p class="store_explanation">{{ $quest->store->discription }}</p>
                        <p class="store_address">{{ $quest->store->postal_code }}  {{ $quest->store->address }}  {{ $quest->store->building_name }}</p>
                    </div>
                    
                    <!-- 実際はimg -->
                    @if ($quest->is_completed == 0)
                        <<a href="{{ route('Quest.coupon', ['quest' => $quest->id]) }}" style="margin-top: 20px;">
                            <img src="{{ asset('images/quest_logo1.png') }}" width="100%" height="auto">
                        </a>
                    @else
                        <div style="margin-top: 20px;">
                            <img src="{{ asset('images/quest_logo2.png') }}" alt="クリア" width ="100%" height="auto">
                        </div>
                    @endif
                </div>
            </div>
        </a>
    @endforeach

            

        
    </main>
@endsection