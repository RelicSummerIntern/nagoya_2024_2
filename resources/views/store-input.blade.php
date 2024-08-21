<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            トップページ
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden">
                <div class="p-6 bg-white">
                    <form id="registerForm" method="POST" action="{{ route('register') }}">
                        @csrf
                        
                        <div class="grid grid-cols-1 gap-6">
                            <div class="col-span-1">
                                <label for="store_image" class="block text-sm font-medium text-gray-700">店舗画像</label>
                                <input id="store_image" name="store_image" type="file" accept="image/*" class="mt-1 block w-full">
                            </div>

                            <div class="col-span-1">
                                <label for="store_name" class="block text-sm font-medium text-gray-700">店名 <span class="text-red-500">*</span></label>
                                <input id="store_name" name="store_name" type="text" required class="mt-1 block w-full">
                            </div>

                            <div class="col-span-1">
                                <label for="store_detail" class="block text-sm font-medium text-gray-700">説明 <span class="text-red-500">*</span></label>
                                <textarea id="store_detail" name="store_detail" required class="mt-1 block w-full" rows="6"></textarea>
                            </div>

                            <div class="col-span-1">
                                <label for="zipcode" class="block text-sm font-medium text-gray-700">郵便番号（ハイフンなし） <span class="text-red-500">*</span></label>
                                <div class="flex mt-1">
                                    <input id="zipcode" name="zipcode" type="text" placeholder="〒" required class="block w-1/4 mr-2" oninput="convertToHalfWidth(this);">
                                    <button type="button" class="bg-gray-100 border rounded px-2 py-1" onclick="searchAddress()">番号から検索</button>
                                </div>
                            </div>

                            <div class="col-span-1">
                                <label for="prefecture" class="block text-sm font-medium text-gray-700">都道府県 <span class="text-red-500">*</span></label>
                                <input id="prefecture" name="prefecture" type="text" required class="mt-1 block w-full">
                            </div>

                            <div class="col-span-1">
                                <label for="address" class="block text-sm font-medium text-gray-700">住所 <span class="text-red-500">*</span></label>
                                <input id="address" name="address" type="text" required class="mt-1 block w-full">
                            </div>

                            <div class="col-span-1">
                                <label for="building" class="block text-sm font-medium text-gray-700">建物名等</label>
                                <input id="building" name="building" type="text" class="mt-1 block w-full">
                            </div>

                            <div class="col-span-1">
                                <label for="phone_number" class="block text-sm font-medium text-gray-700">電話番号（ハイフンなし） <span class="text-red-500">*</span></label>
                                <input id="phone_number" name="phone_number" type="text" required class="mt-1 block w-full" oninput="convertToHalfWidth(this);">
                            </div>

                            <div class="col-span-1">
                                <label for="email" class="block text-sm font-medium text-gray-700">メールアドレス <span class="text-red-500">*</span></label>
                                <input id="email" name="email" type="email" required class="mt-1 block w-full">
                            </div>

                            <div class="col-span-1 flex justify-end">
                                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">
                                    登録
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
    function convertToHalfWidth(input) {
        input.value = input.value.replace(/[Ａ-Ｚａ-ｚ０-９]/g, function (s) {
            return String.fromCharCode(s.charCodeAt(0) - 0xFEE0);
        });
    }

    function searchAddress() {
        const zipcode = document.getElementById('zipcode').value;
        if (!zipcode) {
            alert('郵便番号を入力してください。');
            return;
        }

        // API URL (郵便番号APIのエンドポイント)
        const apiUrl = `https://zipcloud.ibsnet.co.jp/api/search?zipcode=${zipcode}`;

        fetch(apiUrl)
            .then(response => response.json())
            .then(data => {
                if (data.results) {
                    const result = data.results[0];
                    const prefecture = result.address1; // 都道府県
                    const city = result.address2; // 市区町村
                    const town = result.address3; // 町名など

                    // フィールドに値を設定
                    document.getElementById('prefecture').value = prefecture;
                    document.getElementById('address').value = city + town;
                } else {
                    alert('住所が見つかりませんでした。');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('エラーが発生しました。');
            });
    }

    document.getElementById('registerForm').addEventListener('submit', function(event) {
        const password = document.getElementById('password').value;
        const passwordConfirmation = document.getElementById('password_confirmation').value;

        // 必須項目がすべて入力されているかをチェック
        const requiredFields = ['store_name', 'zipcode', 'prefecture', 'address', 'phone_number', 'email'];
        let allFieldsFilled = true;

        for (const field of requiredFields) {
            const input = document.getElementById(field);
            if (input && !input.value.trim()) {
                allFieldsFilled = false;
                break;
            }
        }

        if (!allFieldsFilled) {
            alert('必須項目が未入力です。');
            event.preventDefault(); // フォームの送信を防ぐ
            return;
        }

        // 画像ファイルが選択されているかをチェック
        const imageInput = document.getElementById('store_image');
        if (imageInput && imageInput.files.length === 0) {
            alert('店舗画像を選択してください。');
            event.preventDefault(); // フォームの送信を防ぐ
            return;
        }
    });
    </script>
</x-guest-layout>

