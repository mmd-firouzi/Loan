<!-- resources/views/users/create.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <style>
        body { direction: rtl; text-align: right; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
        .form-group { margin-bottom: 15px; }
        .form-group label { display: block; }
        .form-group input, .form-group select { width: 100%; padding: 8px; }
        .alert { padding: 10px; background-color: #4caf50; color: white; margin-bottom: 20px; }
    </style>
</head>
<body>
<div class="container">
    @if(session('success'))
        <div class="alert">
            {{ session('success') }}
        </div>
    @endif

    <h1>ایجاد کاربر</h1>
    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">نام</label>
            <input type="text" name="name" id="name" required>
        </div>
        <div class="form-group">
            <label for="nationID">شماره ملی</label>
            <input type="number" name="nationID" id="nationID" required>
        </div>
        <div class="form-group">
            <label for="phone_number">شماره تلفن</label>
            <input type="number" name="phone_number" id="phone_number" required>
        </div>
        <div class="form-group">
            <label for="email">ایمیل</label>
            <input type="email" name="email" id="email" required>
        </div>
        <div class="form-group">
            <label for="address">آدرس</label>
            <input type="text" name="address" id="address" required>
        </div>
        <div class="form-group">
            <label for="fund_id">انتخاب صندوق</label>
            <select name="fund_id" id="fund_id" required>
                <option value="">انتخاب کنید</option>
                @if (!isset($funds))
                    <option value="{{ $fund->ID }}" selected>{{ $fund->fund_name }} </option>
                @else
                    @foreach($funds as $fund)
                        <option value="{{ $fund->ID }}">{{ $fund->fund_name }}</option>
                    @endforeach
                @endif
            </select>
        </div>

        <button type="submit">ذخیره</button>
    </form>
</div>
</body>
</html>
