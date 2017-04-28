<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/add.css" rel="stylesheet">
    <title>Живые овечки</title>
</head>
<body>
<div class="container">
    <h2>Живые овечки</h2>
    <p>На данный момент живых овечек: {{ $count }}</p>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Номер</th>
            <th>Название животного</th>
        </tr>
        </thead>
        <tbody>
        @foreach($zagon_all as $animal)
        <tr>
            <td>{{ $animal->id }}</td>
            <td>Овечка</td>
        </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>