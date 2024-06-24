<!DOCTYPE html>
<html lang="fa" dir = "rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>درخوواست وام</title>

    <style>
        /* Global reset and styles */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        body {
            background-color: #f8f9fa;
            color: #495057;
            line-height: 1.6;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            font-size: 24px;
            margin-bottom: 20px;
            text-align: center;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
        }

        .form-control {
            width: 100%;
            padding: 8px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .btn-primary {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 4px;
            font-size: 16px;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .alert { padding: 10px; background-color: #4caf50; color: white; margin-bottom: 20px; }

    </style>
</head>
<body>
<div class="container">
    <h2>درخواست وام</h2>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('loan.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="userID">کاربر</label>
            <select name="userID" id="userID" class="form-control">
                <option value="">کاربر را انتخاب کنید</option>
                @foreach ($users as $user)
                    <option value="{{ $user->ID }}">{{ $user->name }}</option>
                @endforeach
            </select>

        </div>

        <div class="form-group">
            <label for="fundID">صندوق ها</label>
            <select name="fundID" id="fundID" class="form-control">
                <option value="">صندوق را انتخاب کنید</option>
                @foreach ($funds as $fund)
                    <option value="{{ $fund->ID }}">{{ $fund->fund_name }}</option>
                @endforeach
            </select>

        </div>

        <div class="form-group">
            <label for="loan_amount">مقدار وام</label>
            <input type="number" name="loan_amount" id="loan_amount" class="form-control" value="{{ old('loan_amount') }}">
        </div>

        <div class="form-group">
            <label for="installment_count"> مدت بازپرداخت</label>
            <select name="installment_count" id = "installment_count"  class="form-control">
                <option value="">تعداد ماه مورد نیاز را انتخاب کنید</option>
                <option value="12"> 12 ماه</option>
                <option value="18">18 ماه </option>
            </select>
        </div>

        <div class="form-group">
            <label for="info">اطلاعات</label>
            <textarea class="form-control" id="info" name="info"></textarea>
        </div>




        <button type="submit" class="btn btn-primary">تایید</button>
    </form>
</div>


</body>
</html>
