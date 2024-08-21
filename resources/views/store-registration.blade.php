<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            新規登録
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="grid grid-cols-1 gap-6">
                            <div class="col-span-1">
                                <label for="store_name" class="block text-sm font-medium text-gray-700">店名</label>
                                <input id="store_name" name="store_name" type="text" required class="mt-1 block w-full">
                            </div>

                            <div class="col-span-1">
                                <label for="zipcode" class="block text-sm font-medium text-gray-700">所在地</label>
                                <div class="flex mt-1">
                                    <input id="zipcode" name="zipcode" type="text" placeholder="〒" required class="block w-1/4 mr-2">
                                    <button type="button" class="bg-gray-100 border rounded px-2 py-1">番号から検索</button>
                                </div>
                            </div>

                            <div class="col-span-1">
                                <label for="prefecture" class="block text-sm font-medium text-gray-700">都道府県</label>
                                <select id="prefecture" name="prefecture" required class="mt-1 block w-full">
                                    <!-- 都道府県のオプションをここに追加 -->
                                </select>
                            </div>

                            <div class="col-span-1">
                                <label for="address" class="block text-sm font-medium text-gray-700">住所</label>
                                <input id="address" name="address" type="text" required class="mt-1 block w-full">
                            </div>

                            <div class="col-span-1">
                                <label for="building" class="block text-sm font-medium text-gray-700">建物名等</label>
                                <input id="building" name="building" type="text" class="mt-1 block w-full">
                            </div>

                            <div class="col-span-1">
                                <label for="phone_number" class="block text-sm font-medium text-gray-700">電話番号</label>
                                <input id="phone_number" name="phone_number" type="text" required class="mt-1 block w-full">
                            </div>

                            <div class="col-span-1">
                                <label for="email" class="block text-sm font-medium text-gray-700">メールアドレス</label>
                                <input id="email" name="email" type="email" required class="mt-1 block w-full">
                            </div>

                            <div class="col-span-1">
                                <label for="password" class="block text-sm font-medium text-gray-700">パスワード</label>
                                <input id="password" name="password" type="password" required class="mt-1 block w-full">
                            </div>

                            <div class="col-span-1">
                                <label for="password_confirmation" class="block text-sm font-medium text-gray-700">パスワードを再入力</label>
                                <input id="password_confirmation" name="password_confirmation" type="password" required class="mt-1 block w-full">
                            </div>

                            <div class="col-span-1 flex justify-end">
                                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">
                                    登録
                                </button>
                            </div>
                        </div>
                    </form>
                    <div class="mt-4 text-center">
                        <a href="{{ route('login') }}" class="text-sm text-gray-600 underline hover:text-gray-900">
                            既に登録済みの方
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
