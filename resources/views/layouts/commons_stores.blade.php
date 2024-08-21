<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <!-- 左側のテキスト群 -->
            <div class="flex space-x-12">
                <h3 class="left font-semibold text-xl text-black-800 leading-tight">
                    トップページ
                </h3>

                <h4 class="left font-semibold text-xl text-gray-400 leading-tight">
                    クエスト集計
                </h4>

                <h4 class="left font-semibold text-xl text-gray-400 leading-tight">
                    アンケート集計
                </h4>

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
