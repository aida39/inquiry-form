<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    @vite(['resources/css/app.css'])
</head>

<body class="bg-gray-50 text-gray-800">
    <div class="max-w-5xl mx-auto py-12 px-6">
        <!-- タイトル -->
        <h1 class="text-2xl font-medium text-center mb-3">Confirm</h1>
        <p class="text-center mb-12">入力した内容を確認してください</p>

        <form action="" method="POST" class="bg-white rounded-lg shadow-sm p-8">
            @csrf

            <table class="w-44 border mt-3">
                <tr class="w-44 border mt-3">
                    <th>お名前</th>
                    <td>入力した名前</td>
                </tr>
                <tr>
                    <th>お名前</th>
                    <td>入力した名前</td>
                </tr>
                <tr>
                    <th>お名前</th>
                    <td>入力した名前</td>
                </tr>
                <tr>
                    <th>お名前</th>
                    <td>入力した名前</td>
                </tr>
                <tr>
                    <th>お名前</th>
                    <td>入力した名前</td>
                </tr>
            </table>


        </form>
    </div>

</body>

</html>