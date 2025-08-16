<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    @vite(['resources/css/app.css'])
    <style>
        /* カスタムスタイル */
        .required-asterisk {
            color: #ef4444;
            font-size: 0.875rem;
            margin-left: 4px;
        }

        .custom-radio {
            appearance: none;
            width: 1.5em;
            height: 1.5em;
            border: 1px solid #4B5563;
            border-radius: 50%;
            background: #fff;
            cursor: pointer;
        }

        .custom-radio:checked {
            border-color: #4B5563;
            background: #4B5563;
        }
    </style>
</head>

<body class="bg-gray-50">
    <div class="max-w-5xl mx-auto py-12 px-6">
        <!-- タイトル -->
        <h1 class="text-2xl font-medium text-gray-800 text-center mb-12">Contact</h1>

        <form action="" method="POST" class="bg-white rounded-lg shadow-sm p-8">
            @csrf

            <!-- お名前 -->
            <div class="flex items-start mb-8">
                <label for="last_name" class="w-44 flex-shrink-0 pt-3 text-gray-700 font-medium">
                    お名前<span class="required-asterisk">※</span>
                </label>
                <div class="flex-1 flex gap-4">
                    <div class="flex-1">
                        <input type="text"
                            name="last_name"
                            placeholder="例: 山田"
                            class="w-full px-4 py-3 bg-gray-100 border-0 rounded focus:bg-white focus:ring-2 focus:ring-blue-500 focus:outline-none transition-colors"
                            id="last_name"
                            required>
                        @error('last_name')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="flex-1">
                        <input type="text"
                            name="first_name"
                            placeholder="例: 太郎"
                            class="w-full px-4 py-3 bg-gray-100 border-0 rounded focus:bg-white focus:ring-2 focus:ring-blue-500 focus:outline-none transition-colors"
                            id="first_name"
                            required>
                        @error('first_name')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>

            <!-- 性別 -->
            <div class="flex items-start mb-8">
                <label for="gender" class="w-44 flex-shrink-0 pt-3 text-gray-700 font-medium">
                    性別<span class="required-asterisk">※</span>
                </label>
                <div class="flex-1">
                    <div class="flex gap-8 pt-2">
                        <label class="flex items-center cursor-pointer">
                            <input type="radio"
                                name="gender"
                                value="male"
                                class="custom-radio"
                                id="male"
                                checked>
                            <span class="ml-3 text-gray-700">男性</span>
                        </label>
                        <label class="flex items-center cursor-pointer">
                            <input type="radio"
                                name="gender"
                                value="female"
                                class="custom-radio"
                                id="female">
                            <span class="ml-3 text-gray-700">女性</span>
                        </label>
                        <label class="flex items-center cursor-pointer">
                            <input type="radio"
                                name="gender"
                                value="other"
                                class="custom-radio"
                                id="other">
                            <span class="ml-3 text-gray-700">その他</span>
                        </label>
                    </div>
                    @error('gender')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <!-- メールアドレス -->
            <div class="flex items-start mb-8">
                <label for="email" class="w-44 flex-shrink-0 pt-3 text-gray-700 font-medium">
                    メールアドレス<span class="required-asterisk">※</span>
                </label>
                <div class="flex-1">
                    <input type="email"
                        name="email"
                        placeholder="例: test@example.com"
                        class="w-full px-4 py-3 bg-gray-100 border-0 rounded focus:bg-white focus:ring-2 focus:ring-blue-500 focus:outline-none transition-colors"
                        id="email"
                        required>
                    @error('email')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <!-- 電話番号 -->
            <div class="flex items-start mb-8">
                <label for="phone_1" class="w-44 flex-shrink-0 pt-3 text-gray-700 font-medium">
                    電話番号<span class="required-asterisk">※</span>
                </label>
                <div class="flex-1">
                    <div class="flex gap-2 items-center">
                        <input type="text"
                            name="phone_1"
                            placeholder="080"
                            maxlength="3"
                            class="w-20 px-3 py-3 bg-gray-100 border-0 rounded text-center focus:bg-white focus:ring-2 focus:ring-blue-500 focus:outline-none transition-colors"
                            id="phone_1">
                        <span class="text-gray-500">-</span>
                        <input type="text"
                            name="phone_2"
                            placeholder="1234"
                            maxlength="4"
                            class="w-24 px-3 py-3 bg-gray-100 border-0 rounded text-center focus:bg-white focus:ring-2 focus:ring-blue-500 focus:outline-none transition-colors"
                            id="phone_2">
                        <span class="text-gray-500">-</span>
                        <input type="text"
                            name="phone_3"
                            placeholder="5678"
                            maxlength="4"
                            class="w-24 px-3 py-3 bg-gray-100 border-0 rounded text-center focus:bg-white focus:ring-2 focus:ring-blue-500 focus:outline-none transition-colors"
                            id="phone_3">
                    </div>
                    @error('phone_1')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                    @error('phone_2')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                    @error('phone_3')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <!-- 住所 -->
            <div class="flex items-start mb-8">
                <label for="address" class="w-44 flex-shrink-0 pt-3 text-gray-700 font-medium">
                    住所<span class="required-asterisk">※</span>
                </label>
                <div class="flex-1">
                    <input type="text"
                        name="address"
                        placeholder="例: 東京都渋谷区千駄ヶ谷1-2-3"
                        class="w-full px-4 py-3 bg-gray-100 border-0 rounded focus:bg-white focus:ring-2 focus:ring-blue-500 focus:outline-none transition-colors"
                        id="address"
                        required>
                    @error('address')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <!-- 建物名 -->
            <div class="flex items-start mb-8">
                <label for="building" class="w-44 flex-shrink-0 pt-3 text-gray-700 font-medium">
                    建物名
                </label>
                <div class="flex-1">
                    <input type="text"
                        name="building"
                        placeholder="例: 千駄ヶ谷マンション101"
                        class="w-full px-4 py-3 bg-gray-100 border-0 rounded focus:bg-white focus:ring-2 focus:ring-blue-500 focus:outline-none transition-colors"
                        id="building">
                    @error('building')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <!-- お問い合わせの種類 -->
            <div class="flex items-start mb-8">
                <label for="inquiry_type" class="w-44 flex-shrink-0 pt-3 text-gray-700 font-medium">
                    お問い合わせの種類<span class="required-asterisk">※</span>
                </label>
                <div class="flex-1">
                    <div class="relative">
                        <select name="inquiry_type"
                            class="w-full px-4 py-3 bg-gray-100 border-0 rounded appearance-none focus:bg-white focus:ring-2 focus:ring-blue-500 focus:outline-none transition-colors cursor-pointer"
                            id="inquiry_type"
                            required>
                            <option value="">選択してください</option>
                            <option value="general">一般的なお問い合わせ</option>
                            <option value="support">サポートについて</option>
                            <option value="business">ビジネスについて</option>
                            <option value="other">その他</option>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4">
                            <svg class="h-4 w-4 fill-current text-gray-500" viewBox="0 0 20 20">
                                <path d="M7 10l5 5 5-5H7z" />
                            </svg>
                        </div>
                    </div>
                    @error('inquiry_type')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <!-- お問い合わせ内容 -->
            <div class="flex items-start mb-12">
                <label for="message" class="w-44 flex-shrink-0 pt-3 text-gray-700 font-medium">
                    お問い合わせ内容<span class="required-asterisk">※</span>
                </label>
                <div class="flex-1">
                    <textarea name="message"
                        rows="6"
                        placeholder="お問い合わせ内容をご記載ください"
                        class="w-full px-4 py-3 bg-gray-100 border-0 rounded focus:bg-white focus:ring-2 focus:ring-blue-500 focus:outline-none transition-colors resize-none"
                        id="message"
                        required></textarea>
                    @error('message')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <!-- 送信ボタン -->
            <div class="text-center">
                <button type="submit"
                    class="px-12 py-3 bg-amber-600 hover:bg-amber-800 text-white font-medium rounded transition-colors focus:ring-amber-500 cursor-pointer">
                    確認画面
                </button>
            </div>
        </form>
    </div>

</body>

</html>