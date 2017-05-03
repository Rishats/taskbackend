<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/add.css" rel="stylesheet">
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>

    <title>Овечки</title>
</head>
<body>
<div class="divzagons">
    <h1>Фермочка для овечек</h1>
    <!-- Загон первый-->
    <form action="ajax" method="POST" id="zagon_all" enctype= multipart/form-data>
        {{ csrf_field() }}
        <div class="form-group">
            <label for="zagon_1">Загон 1</label>
            <select multiple class="form-control" id="zagon_1">
                @foreach($zagon_1 as $animal)
                    <option>{{ $animal }}</option>
                @endforeach
            </select>
        </div>
    <!-- Загон второй -->
        <div class="form-group">
            <label for="zagon_2">Загон 2</label>
            <select multiple class="form-control" id="zagon_2">
                @foreach($zagon_2 as $animal)
                    <option>{{ $animal }}</option>
                @endforeach
            </select>
        </div>
    <!-- Загон третий -->
        <div class="form-group">
            <label for="zagon_3">Загон 3</label>
            <select multiple class="form-control" id="zagon_3">
                @foreach($zagon_3 as $animal)
                    <option>{{ $animal }}</option>
                @endforeach
            </select>
        </div>
    <!-- Загон четвертый -->
        <div class="form-group">
            <label for="zagon_4">Загон 4</label>
            <select multiple class="form-control" id="zagon_4">
                @foreach($zagon_4 as $animal)
                    <option>{{ $animal }}</option>
                @endforeach
            </select>
        </div>
    </form>
    </br>

    <div class="button2">
        <button type="submit" class="btn btn-danger" id="kill">Зарубить овечек</button>
    </div>
</div>
<div class="button1">
    <form action="/">
        <button type="submit" class="btn btn-success">Обновить страницу</button>
    </form>
</div>
</br>
</br>
<div class="button3">
    <form action="killbyid" method="POST">
        {{ csrf_field() }}
        Убить овечку по номеру:<br>
        <input type="text" name="id" value="0">
        <br><br>
        <input class="btn btn-warning" type="submit" value="Убить">
    </form>
    </br>
    </br>
    </br>
</div>
<div>
    <form action="/living" target="_blank">
    <button type="submit" class="btn btn-primary btn-lg btn-block">Посмотреть живых овечек</button>
    </form>
    <form action="/dead" target="_blank">
        <button type="submit" class="btn btn-primary btn-lg btn-block">Посмотреть мертвых овечек</button>
    </form>
    <form action="/population" target="_blank">
        <button type="submit" class="btn btn-primary btn-lg btn-block">Посмотреть населенность загонов</button>
    </form>
</div>

</body>
</html>