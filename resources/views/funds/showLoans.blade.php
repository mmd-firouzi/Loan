<!doctype html>
<html lang="fa" dir = "rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>وام ها</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>

        body {
            font-family: Tahoma, sans-serif;
            direction: rtl;
            text-align: right;
        }

        .container {
            max-width: 900px;
            margin: auto;
            padding: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }

        tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tbody tr:hover {
            background-color: #e6e6e6;
        }

        table {
            table-layout: fixed;
            width: 100%;
            border-collapse: collapse;
            text-align: center;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>مشاهده وام های درخواستی صندوق شما</h1>
    <br>
    @if(session('success'))
        <div class="alert">
            {{ session('success') }}
        </div>
    @endif

    @if ($loans->isEmpty())
        <h2>وامی درخواست داده نشده است</h2>
    @else
        <table>
            <thead>
            <th>آیدی کاربر</th>
            <th>میزان وام</th>
            <th>بهره</th>
            <th>تعداد اقساط</th>
            <th>میزان قسط</th>
            <th>تاریخ درخواست</th>
            <th>توضیحات</th>

            </thead>

            <tbody>
            @foreach($loans as $loan)
                <tr>
                    <td>{{$loan->userID}}</td>
                    <td>{{$loan->loan_amount}}</td>
                    <td>{{$loan->interest}}</td>
                    <td>{{$loan->installment_count}}</td>
                    <td>{{$loan->installment}}</td>
                    <td>{{$loan->start_date}}</td>
                    <td>{{$loan->info}}</td>
                </tr>
            @endforeach

            </tbody>

        </table>
        <br>
        {{$loans->onEachSide(1)->links()}}
    @endif
</div>
</body>
</html>
