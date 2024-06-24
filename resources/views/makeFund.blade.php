<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>فرم ایجاد صندوق</title>
    <style>
        body {
            font-family: Tahoma, sans-serif;
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
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-control {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        .btn-primary {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        .alert {
            padding: 10px;
            color: white;
            background-color: green;
            border-radius: 5px;
            margin-bottom: 15px;
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

        <h1 class="text-center">فرم ایجاد صندوق</h1>

        <form action="{{ route('fund.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="fundName">نام صندوق</label>
                <input type="text" class="form-control" id="fundName" name="fundName" required>
            </div>
            <div class="form-group">
                <label for="adminName">نام مدیر</label>
                <input type="text" class="form-control" id="adminName" name="adminName" required>
            </div>

            <!-- <div class="form-group">
                <label for="createDate">تاریخ ایجاد</label>
                <input type="datetime-local" class="form-control" id="createDate" name="createDate" value="{{ date('Y-m-d\TH:i') }}" required>
            </div> -->
            <div class="form-group">
                <label for="entry">مبلغ ورودی</label>
                <input type="number" class="form-control" id="entry" name="entry" required>
            </div>
            <div class="form-group">
                <label for="monthlyPay">مبلغ پرداخت ماهانه</label>
                <input type="number" class="form-control" id="monthlyPay" name="monthlyPay" required>
            </div>
            <div class="form-group">
                <label for="bankAccount">شماره حساب بانکی</label>
                <input type="number" class="form-control" id="bankAccount" name="bankAccount" required>
            </div>
            <div class="form-group">
                <label for="maxMember">حداکثر تعداد اعضا</label>
                <input type="number" class="form-control" id="maxMember" name="maxMember" required>
            </div>
            <div class="form-group">
                <label for="info">اطلاعات</label>
                <textarea class="form-control" id="info" name="info"></textarea>
            </div>
            <button type="submit" class="btn-primary">ایجاد صندوق</button>
        </form>
    </div>
</body>
</html>
