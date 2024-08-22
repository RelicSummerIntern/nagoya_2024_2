<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <!-- 左側のテキスト群 -->
            <div class="flex space-x-12">
                <a href="{{ url('/home') }}" class="left font-semibold text-xl leading-tight
                    {{ request()->is('home') ? 'text-black' : 'text-gray-400' }}" 
                    style="text-decoration: none; color: {{ request()->is('home') ? '#000000' : '#a1a1aa' }};">
                    トップページ
                </a>

                <a href="{{ url('/quest-summary*') }}" class="left font-semibold text-xl leading-tight
                    {{ request()->is('quest-summary*') ? 'text-black' : 'text-gray-400' }}" 
                    style="text-decoration: none; color: {{ request()->is('quest-summary*') ? '#000000' : '#a1a1aa' }};">
                    クエスト集計
                </a>

                <a href="{{ url('/survey-summary*') }}" class="left font-semibold text-xl leading-tight
                    {{ request()->is('survey-summary*') ? 'text-black' : 'text-gray-400' }}" 
                    style="text-decoration: none; color: {{ request()->is('survey-summary*') ? '#000000' : '#a1a1aa' }};">
                    アンケート集計
                </a>
            </div>
        </div>
    </x-slot>

    @yield('content')
</x-app-layout>
