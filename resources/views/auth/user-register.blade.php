<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            新規登録
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden">
                <div class="p-6 bg-white">

                <div class="flex justify-center mb-6">
                    <div class="relative w-full max-w-md flex space-x-0">
                        <!-- 下線を作成するための要素 -->
                        <div class="absolute bottom-0 left-0 right-0 flex">
                            <div class="w-1/2 bg-gray-300 h-1"></div>
                            <div class="w-1/2 bg-gray-300 h-1"></div>
                        </div>
                        
                        <a href="#" class="bg-gray-300 text-gray-800 px-6 py-3 rounded w-1/2 font-bold text-lg text-center block relative z-10">
                            個人用
                        </a>
                        <a href="{{ route('store-register') }}" class="text-gray-800 px-6 py-3 rounded w-1/2 font-bold text-lg text-center block relative z-10">
                            ビジネス用
                        </a>
                    </div>
                </div>

                    <form id="registerForm" method="POST" action="{{ route('user-register') }}">
                        @csrf
                        
                        <div class="grid grid-cols-1 gap-6">
                            <div class="col-span-1">
                                <label for="name" class="block text-sm font-medium text-gray-700">ユーザーネーム <span class="text-red-500">*</span></label>
                                <input id="name" name="name" type="text" required class="mt-1 block w-full">
                            </div>

                            <div class="col-span-1">
                                <label class="block text-sm font-medium text-gray-700">生年月日 <span class="text-red-500">*</span></label>
                                <div class="flex space-x-4 mt-1">
                                    <select id="birth_year" name="birth_year" class="block w-1/3" required>
                                        <!-- 年のオプションを生成 -->
                                        @for ($year = 1900; $year <= date('Y'); $year++)
                                            <option value="{{ $year }}">{{ $year }}</option>
                                        @endfor
                                    </select>
                                    <select id="birth_month" name="birth_month" class="block w-1/3" required>
                                        <!-- 月のオプションを生成 -->
                                        @for ($month = 1; $month <= 12; $month++)
                                            <option value="{{ $month }}">{{ $month }}</option>
                                        @endfor
                                    </select>
                                    <select id="birth_day" name="birth_day" class="block w-1/3" required>
                                        <!-- 日のオプションはJavaScriptで生成 -->
                                    </select>
                                </div>
                            </div>

                            <div class="col-span-1">
                                <label class="block text-sm font-medium text-gray-700">性別 <span class="text-red-500">*</span></label>
                                <div class="flex space-x-4 mt-1">
                                    <label class="inline-flex items-center">
                                        <input type="radio" name="gender" value="male" class="form-radio">
                                        <span class="ml-2">男</span>
                                    </label>
                                    <label class="inline-flex items-center">
                                        <input type="radio" name="gender" value="female" class="form-radio">
                                        <span class="ml-2">女</span>
                                    </label>
                                    <label class="inline-flex items-center">
                                        <input type="radio" name="gender" value="none" class="form-radio">
                                        <span class="ml-2">登録しない</span>
                                    </label>
                                </div>
                            </div>

                            <div class="col-span-1">
                                <label for="email" class="block text-sm font-medium text-gray-700">メールアドレス <span class="text-red-500">*</span></label>
                                <input id="email" name="email" type="email" required class="mt-1 block w-full">
                            </div>

                            <div class="col-span-1">
                                <label for="password" class="block text-sm font-medium text-gray-700">パスワード <span class="text-red-500">*</span></label>
                                <input id="password" name="password" type="password" required class="mt-1 block w-full">
                            </div>

                            <div class="col-span-1">
                                <label for="password_confirmation" class="block text-sm font-medium text-gray-700">パスワードを再入力 <span class="text-red-500">*</span></label>
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

    <script>
    function updateDays() {
        const year = document.getElementById('birth_year').value;
        const month = document.getElementById('birth_month').value;
        const daySelect = document.getElementById('birth_day');

        // 日の選択肢をリセット
        daySelect.innerHTML = '';

        if (year && month) {
            const daysInMonth = new Date(year, month, 0).getDate();

            for (let day = 1; day <= daysInMonth; day++) {
                const option = document.createElement('option');
                option.value = day;
                option.textContent = day;
                daySelect.appendChild(option);
            }
        }
    }

    document.getElementById('birth_year').addEventListener('change', updateDays);
    document.getElementById('birth_month').addEventListener('change', updateDays);

    document.getElementById('registerForm').addEventListener('submit', function(event) {
        const password = document.getElementById('password').value;
        const passwordConfirmation = document.getElementById('password_confirmation').value;

        // 必須項目がすべて入力されているかをチェック
        const requiredFields = ['username', 'birth_year', 'birth_month', 'birth_day', 'email', 'password', 'password_confirmation'];
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

        if (password !== passwordConfirmation) {
            alert('パスワードが一致しません。');
            event.preventDefault(); // フォームの送信を防ぐ
        }
    });
    </script>
</x-guest-layout>
