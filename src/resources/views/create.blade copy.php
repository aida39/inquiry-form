<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css'])
</head>

<body>
    <div class="container mx-auto">
        <h1 class="text-4xl text-gray-800 font-bold text-center my-10">お問い合わせ</h1>
        <h2 class="text-xl text-gray-800 font-bold text-center">お問い合わせ内容を以下のフォームに入力してください</h2>
    </div>
    <div>
        <form action="{{ route('create') }}" method="post">
            @csrf
            <div class="m-10">
                <label for="first_name">お名前<span class="text-red-500">*</span></label>
                <input type="text" name="first_name" id="first_name" class="border-2 border-gray-300 rounded-md mr-5 p-2" placeholder="山田">
                <input type="text" name="last_name" id="last_name" class="border-2 border-gray-300 rounded-md p-2" placeholder="太郎">
            </div>
            <div class="m-10">
                <label class="mr-5">性別 <span class=" text-red-500">*</span></label>
                <!-- <div class="flex items-center space-x-2 ml-5"> -->
                <input type="radio" name="gender" id="male" value="0" class="w-5 h-5 border-gray-300 mr-2">
                <label for="male" class="mr-4">男性</label>
                <input type="radio" name="gender" id="female" value="1" class="w-5 h-5 border-gray-300">
                <label for="female" class="mr-4">女性</label>
                <input type="radio" name="gender" id="other" value="2" class="w-5 h-5 border-gray-300">
                <label for="other">その他</label>
                <!-- </div> -->
            </div>
            <div class="m-10">
                <label for="category_id">カテゴリ</label>
                <select name="category_id" id="category_id">
                    @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->content }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit">送信</button>
        </form>
    </div>
</body>

</html>