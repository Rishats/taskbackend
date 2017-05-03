<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/add.css" rel="stylesheet">
    <title>Убитые овечки</title>
</head>
<body>
<div class="container">
    <h2>Убитые овечки</h2>
    <p>На данный момент мертвых овечек: {{ $count }}</p>
<table class="table table-bordered">
    <thead>
    <tr>
        <th>Номер который был у животного</th>
        <th>Название животного</th>
        <th>Время смерти</th>
    </tr>
    </thead>
    <tbody>
    @foreach($zagon_dead as $animal)
        <tr>
            <td>{{ $animal->idanimal }}</td>
            <td>Овечка</td>
            <td>{{ $animal->time }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</div>
</body>
</html>
