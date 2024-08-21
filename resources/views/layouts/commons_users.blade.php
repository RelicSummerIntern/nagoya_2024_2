<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <!-- 左側のテキスト群 -->
            <div class="flex space-x-12">
                <h3 class="left font-semibold text-xl text-black-800 leading-tight">
                    トップページ
                </h3>    

                <h3 class="left font-semibold text-xl text-gray-400 leading-tight">
                    今日のおすすめ
                </h3>

                <h4 class="left font-semibold text-xl text-gray-400 leading-tight">
                    クエストボード
                </h4>

                <h4 class="left font-semibold text-xl text-gray-400 leading-tight">
                    店を探す
                </h4>

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
                        4
                    </h4>
                    <h4 class="font-extrabold text-4xl text-black-800 leading-tight">
                        /7
                    </h4>
                </div>
            </div>
        </div>
    </x-slot>

    <script>
        // 左側のテキスト要素のみを取得
        const leftTexts = document.querySelectorAll('.left');

        // クリックイベントを各左側テキストに追加
        leftTexts.forEach(text => {
            text.addEventListener('click', function() {
                // 全ての左側テキストをグレーにする
                leftTexts.forEach(t => {
                    t.classList.remove('text-black-800');
                    t.classList.add('text-gray-400');
                });

                // クリックされたテキストを黒にする
                this.classList.remove('text-gray-400');
                this.classList.add('text-black-800');
            });
        });
    </script>
</x-app-layout>
