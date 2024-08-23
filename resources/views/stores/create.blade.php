@extends('layouts.commons_stores')

@section('content')

<div class="py-12">
    <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">

                <form method="POST" action="{{ route('stores.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="grid grid-cols-1 gap-6">

                        <div class="col-span-1">
                            <label for="name" class="block text-sm font-medium text-gray-700">店名 <span class="text-red-500">*</span></label>
                            <input id="name" name="name" type="text" required class="mt-1 block w-full">
                        </div>

                        <div class="col-span-1">
                            <label for="genre_id" class="block text-sm font-medium text-gray-700">ジャンル <span class="text-red-500">*</span></label>
                            <select id="genre_id" name="genre_id" required class="mt-1 block w-full">
                                @for ($genre = 1; $genre <= 20; $genre++)
                                    <option value="{{ $genre }}">{{ $genre }}</option>
                                @endfor
                            </select>
                        </div>

                        <div class="col-span-1 flex space-x-4">
                            <div class="flex-1">
                                <label for="opening_year" class="block text-sm font-medium text-gray-700">オープン年 <span class="text-red-500">*</span></label>
                                <select id="opening_year" name="opening_year" required class="mt-1 block w-full">
                                    @php
                                        $currentYear = now()->year;
                                    @endphp
                                    <option value="{{ $currentYear + 1 }}">{{ $currentYear + 1 }}</option>
                                    <option value="{{ $currentYear }}" selected>{{ $currentYear }}</option>
                                    <option value="{{ $currentYear - 1 }}">{{ $currentYear - 1 }}</option>
                                </select>
                            </div>

                            <div class="flex-1">
                                <label for="opening_month" class="block text-sm font-medium text-gray-700">月 <span class="text-red-500">*</span></label>
                                <select id="opening_month" name="opening_month" required class="mt-1 block w-full">
                                    @for ($month = 1; $month <= 12; $month++)
                                        <option value="{{ $month }}">{{ $month }}</option>
                                    @endfor
                                </select>
                            </div>

                            <div class="flex-1">
                                <label for="opening_day" class="block text-sm font-medium text-gray-700">日 <span class="text-red-500">*</span></label>
                                <select id="opening_day" name="opening_day" required class="mt-1 block w-full"></select>
                            </div>
                        </div>

                        <div class="col-span-1">
                            <label for="postal_code" class="block text-sm font-medium text-gray-700">郵便番号（ハイフンなし） <span class="text-red-500">*</span></label>
                            <div class="flex mt-1">
                                <input id="postal_code" name="postal_code" type="text" placeholder="〒" required class="block w-1/4 mr-2" oninput="convertToHalfWidth(this);">
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
                            <label for="building_name" class="block text-sm font-medium text-gray-700">建物名等</label>
                            <input id="building_name" name="building_name" type="text" class="mt-1 block w-full">
                        </div>

                        <div class="col-span-1">
                            <label for="phone_number" class="block text-sm font-medium text-gray-700">電話番号（ハイフンなし） <span class="text-red-500">*</span></label>
                            <input id="phone_number" name="phone_number" type="text" required class="mt-1 block w-full" oninput="convertToHalfWidth(this);">
                        </div>

                        <div class="col-span-1">
                            <label for="email" class="block text-sm font-medium text-gray-700">メールアドレス <span class="text-red-500">*</span></label>
                            <input id="email" name="email" type="email" required class="mt-1 block w-full">
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

<script>
function convertToHalfWidth(input) {
    input.value = input.value.replace(/[Ａ-Ｚａ-ｚ０-９]/g, function (s) {
        return String.fromCharCode(s.charCodeAt(0) - 0xFEE0);
    });
}

function searchAddress() {
    const postalCode = document.getElementById('postal_code').value;
    if (!postalCode) {
        alert('郵便番号を入力してください。');
        return;
    }

    const apiUrl = `https://zipcloud.ibsnet.co.jp/api/search?zipcode=${postalCode}`;

    fetch(apiUrl)
        .then(response => response.json())
        .then(data => {
            if (data.results) {
                const result = data.results[0];
                const prefecture = result.address1;
                const city = result.address2;
                const town = result.address3;

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

document.getElementById('opening_year').addEventListener('change', updateDays);
document.getElementById('opening_month').addEventListener('change', updateDays);

function updateDays() {
    const year = document.getElementById('opening_year').value;
    const month = document.getElementById('opening_month').value;
    const daySelect = document.getElementById('opening_day');

    daySelect.innerHTML = '';

    const daysInMonth = new Date(year, month, 0).getDate();

    for (let i = 1; i <= daysInMonth; i++) {
        const option = document.createElement('option');
        option.value = i;
        option.textContent = i;
        daySelect.appendChild(option);
    }
}
</script>

@endsection
