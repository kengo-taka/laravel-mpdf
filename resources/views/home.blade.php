<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDF Generetor</title>
</head>
<style>
    .center {
        text-align: center;
    }

    label {
        font-size: 14px;
        color: #333;
        margin-bottom: 0px;
        /* display: block; */
    }

    /* 入力フィールド */
    input[type="text"],
    input[type="email"],
    input[type="date"] {
        width: 200px;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 16px;
    }

    /* エラーメッセージ */
    .error-message {
        color: red;
        font-size: 14px;
    }

    /* ボタン */
    input[type="submit"] {
        background-color: #007bff;
        color: white;
        border: none;
        border-radius: 5px;
        padding: 12px 20px;
        font-size: 18px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #0056b3;
    }

    .space {

    }
</style>

<body>
    <div class="center">
        <h1>Laravel-mpdf</h1>

        <form id="myForm" action="{{ route('viewPdf') }}" method="post">
            @csrf
            <label for="company_name">会社名</label><br>
            <input type="text" id="company_name" name="company_name"><br>
            @error('company_name')
                <span class="error-message">{{ $message }}</span><br>
            @enderror
            <div style="margin-bottom: 20px;"></div>
            <label for="name">名前</label><br>
            <input type="text" id="name" name="name"><br>
            @error('name')
                <span class="error-message">{{ $message }}</span><br>
            @enderror
            <div style="margin-bottom: 20px;"></div>
            <label for="email">メールアドレス</label><br>
            <input type="email" id="email" name="email"><br>
            @error('email')
                <span class="error-message">{{ $message }}</span>
            @enderror
            <div style="margin-bottom: 20px;"></div>
            <label for="date">日付</label><br>
            <input type="date" id="date" name="date"><br>
            @error('date')
                <span class="error-message">{{ $message }}</span>
            @enderror
            <div style="margin-bottom: 20px;"></div>
            <input type="submit" value="次へ">
        </form>
    </div>
</body>

</html>
