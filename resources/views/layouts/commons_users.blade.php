<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <!-- 左側のテキスト群 -->
            <div class="flex space-x-12">
                <a href="/users-top" class="left font-semibold text-xl leading-tight
                    {{ request()->is('users-top*') ? 'text-black-800' : 'text-gray-400' }}"
                    style="text-decoration: none; color: {{ request()->is('users-top*') ? '#000000' : '#a1a1aa' }};">
                    トップページ
                </a>

                <a href="/recommend" class="left font-semibold text-xl leading-tight
                    {{ request()->is('recommend*') ? 'text-black-800' : 'text-gray-400' }}"
                    style="text-decoration: none; color: {{ request()->is('recommend*') ? '#000000' : '#a1a1aa' }};">
                    今日のおすすめ
                </a>

                <a href="/quest_board" class="left font-semibold text-xl leading-tight
                    {{ request()->is('quest_board*') ? 'text-black-800' : 'text-gray-400' }}"
                    style="text-decoration: none; color: {{ request()->is('quest_board*') ? '#000000' : '#a1a1aa' }};">
                    クエストボード
                </a>

                <a href="/search" class="left font-semibold text-xl leading-tight
                    {{ request()->is('search*') ? 'text-black-800' : 'text-gray-400' }}"
                    style="text-decoration: none; color: {{ request()->is('searc*') ? '#000000' : '#a1a1aa' }};">
                    店を探す
                </a>
            </div>

            <!-- 右側に寄せたいテキスト群 -->
            <div class="flex items-center space-x-6">
                <!-- 右揃えテキスト1 -->
                <div class="flex items-center">
                    <h4 class="font-semibold text-2xl text-black-800 leading-tight">
                        クーポン獲得まで
                    </h4>
                </div>
                <!-- 右揃えテキスト2 -->
                <div class="flex items-center">
                    <h4 class="font-extrabold text-4xl text-red-600 leading-tight">
                        {{ $totalClearCount }}
                    </h4>
                    <h4 class="font-extrabold text-4xl text-black-800 leading-tight">
                        /7
                    </h4>
                </div>
            </div>
        </div>
    </x-slot>

    @yield('content')
</x-app-layout>