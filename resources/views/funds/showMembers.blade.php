<!doctype html>
<html lang="fa" dir = "rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>اعضای صندوق</title>
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
        <h1>مشاهده اعضای صندوق: {{$fund->fund_name}}</h1>
        <br>
        @if(session('success'))
            <div class="alert">
                {{ session('success') }}
            </div>
        @endif

        @if ($users->isEmpty())
            <h2>هیچ عضوی یافت نشد</h2>
        @else
            <table>
                <thead>
                    <th>نام</th>
                    <th>شماره ملی</th>
                    <th>شماره تلفن</th>
                    <th>ایمیل</th>
                    <th>آدرس</th>

                </thead>

                <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{$user->name}}</td>
                            <td>{{$user->nationID}}</td>
                            <td>{{$user->phone_number}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->address}}</td>
                        </tr>
                    @endforeach

                </tbody>

            </table>
            <br>
            {{$users->onEachSide(1)->links()}}
        @endif
    </div>
</body>
</html>
