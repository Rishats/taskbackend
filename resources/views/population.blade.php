<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/add.css" rel="stylesheet">
    <title>Населенность</title>
</head>
<body>
<div class="container">
    <h2>Населенность фермы</h2>
    <p>На данный момент живых овечек: {{ $count }}</p>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Загон 1</th>
            <th>Загон 2</th>
            <th>Загон 3</th>
            <th>Загон 4</th>
            <th>Самый населенный загон:</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{ $div_1 }}</td>
            <td>{{ $div_2 }}</td>
            <td>{{ $div_3 }}</td>
            <td>{{ $div_4 }}</td>
            <td>Загон 4:    {{ $max }}</td>
        </tr>
        </tbody>
    </table>
</div>
</body>
</html>