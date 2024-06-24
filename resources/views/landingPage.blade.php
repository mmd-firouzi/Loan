<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>مدیریت صندوق ها</title>
    <style>
        body {
            direction: rtl;
            text-align: right;
        }
        .container {
            max-width: 600px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .container h1 {
            margin-bottom: 20px;
            font-size: 1.5rem;
        }
        .container h1 a {
            text-decoration: none;
            color: #007bff;
        }
        .container h1 a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        @if(session('success'))
            <div class="alert">
                {{ session('success') }}
            </div>
        @endif
        <h1><a href="{{ route('makeFund') }}">ایجاد یک صندوق</a></h1>
        <h1><a href="{{ route('showFunds') }}">مشاهده صندوق ها</a></h1>
        <h1><a href="{{route('users.create')}}">ایجاد کاربر</a></h1>
        <h1><a href="{{route('loan.create')}}">درخواست وام</a></h1>
    </div>
</body>
</html>
