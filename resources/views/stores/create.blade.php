<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            新規店舗登録
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('stores.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="grid grid-cols-1 gap-6">
                            <div class="col-span-1">
                                <label for="name" class="block text-sm font-medium text-gray-700">店名 <span class="text-red-500">*</span></label>
                                <input id="name" name="name" type="text" required class="mt-1 block w-full" value="{{ $store->name ?? '' }}">
                            </div>
                            <div class="col-span-1">
                                <label for="genre_id" class="block text-sm font-medium text-gray-700">ジャンルID <span class="text-red-500">*</span></label>
                                <input id="genre_id" name="genre_id" type="number" required class="mt-1 block w-full" value="{{ $store->genre_id ?? '' }}">
                            </div>
                            <div class="col-span-1">
                                <label for="opening_year" class="block text-sm font-medium text-gray-700">開業年 <span class="text-red-500">*</span></label>
                                <input id="opening_year" name="opening_year" type="number" required class="mt-1 block w-full" value="{{ $store->opening_year ?? '' }}">
                            </div>
                            <div class="col-span-1">
                                <label for="opening_month" class="block text-sm font-medium text-gray-700">開業月 <span class="text-red-500">*</span></label>
                                <input id="opening_month" name="opening_month" type="number" required class="mt-1 block w-full" value="{{ $store->opening_month ?? '' }}">
                            </div>
                            <div class="col-span-1">
                                <label for="opening_day" class="block text-sm font-medium text-gray-700">開業日 <span class="text-red-500">*</span></label>
                                <input id="opening_day" name="opening_day" type="number" required class="mt-1 block w-full" value="{{ $store->opening_day ?? '' }}">
                            </div>
                            <div class="col-span-1">
                                <label for="postal_code" class="block text-sm font-medium text-gray-700">郵便番号 <span class="text-red-500">*</span></label>
                                <input id="postal_code" name="postal_code" type="text" required class="mt-1 block w-full" value="{{ $store->postal_code ?? '' }}">
                            </div>
                            <div class="col-span-1">
                                <label for="prefecture" class="block text-sm font-medium text-gray-700">都道府県 <span class="text-red-500">*</span></label>
                                <input id="prefecture" name="prefecture" type="text" required class="mt-1 block w-full" value="{{ $store->prefecture ?? '' }}">
                            </div>
                            <div class="col-span-1">
                                <label for="address" class="block text-sm font-medium text-gray-700">住所 <span class="text-red-500">*</span></label>
                                <input id="address" name="address" type="text" required class="mt-1 block w-full" value="{{ $store->address ?? '' }}">
                            </div>
                            <div class="col-span-1">
                                <label for="building_name" class="block text-sm font-medium text-gray-700">建物名</label>
                                <input id="building_name" name="building_name" type="text" class="mt-1 block w-full" value="{{ $store->building_name ?? '' }}">
                            </div>
                            <div class="col-span-1">
                                <label for="phone_number" class="block text-sm font-medium text-gray-700">電話番号 <span class="text-red-500">*</span></label>
                                <input id="phone_number" name="phone_number" type="text" required class="mt-1 block w-full" value="{{ $store->phone_number ?? '' }}">
                            </div>
                            <div class="col-span-1">
                                <label for="email" class="block text-sm font-medium text-gray-700">メールアドレス <span class="text-red-500">*</span></label>
                                <input id="email" name="email" type="email" required class="mt-1 block w-full" value="{{ $store->email ?? '' }}">
                            </div>
                            <div class="col-span-1">
                                <label for="discription" class="block text-sm font-medium text-gray-700">説明</label>
                                <textarea id="discription" name="discription" class="mt-1 block w-full" rows="3">{{ $store->discription ?? '' }}</textarea>
                            </div>
                            <div class="col-span-1">
                                <label for="image_url" class="block text-sm font-medium text-gray-700">店舗画像</label>
                                <input id="image_url" name="image_url" type="file" accept="image/*" class="mt-1 block w-full">
                            </div>
                            <div class="col-span-1 flex justify-end">
                                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">
                                    登録する
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
