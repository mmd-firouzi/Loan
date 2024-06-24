<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <title>لیست صندوق‌ها</title>
    <style>
        body {
            font-family: Tahoma, sans-serif;
            direction: rtl;
            text-align: right;
        }
        .container {
            max-width: 800px;
            margin: auto;
            padding: 20px;
        }
        .fund-item {
            padding: 10px;
            border-bottom: 1px solid #ccc;
        }
        .fund-item a {
            text-decoration: none;
            color: #000;
        }
        .fund-item a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>لیست صندوق‌ها</h1>
        @if($funds->isEmpty())
            <p>هیچ صندوقی یافت نشد.</p>
        @else
            <ul>
                @foreach($funds as $fund)
                    <li class="fund-item">
                        <a href="{{ route('manageFund', $fund->ID) }}">{{ $fund->fund_name }}</a>
                    </li>
                @endforeach
                {{$funds->onEachSide(1)->links()}}
            </ul>
        @endif
    </div>

</body>
</html>
