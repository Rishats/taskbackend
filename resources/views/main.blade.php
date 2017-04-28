<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/add.css" rel="stylesheet">
    <title>Овечки</title>
</head>
<body>
<!-- Загон первый -->
<div class="divzagons">
    <h1>Фермочка для овечек</h1>
    </br></br>
<div class="form-group">
    {!! Form::label('multipleselect1[]', 'Загон 1', ['class' => 'col-lg-2 control-label'] )  !!}
    <div class="col-lg-10">
        {!!  Form::select('multipleselect1[]', $zagon_1, $selected = null, ['class' => 'form-control', 'multiple' => 'multiple']) !!}
    </div>
</div>
<!-- Загон второй -->
    </br></br></br></br>
<div class="form-group">
    {!! Form::label('multipleselect2[]', 'Загон 2', ['class' => 'col-lg-2 control-label'] )  !!}
    <div class="col-lg-10">
        {!!  Form::select('multipleselect[]2',  $zagon_2, $selected = null, ['class' => 'form-control', 'multiple' => 'multiple']) !!}
</div>
</div>
<!-- Загон третий -->
    </br></br></br></br>
<div class="form-group">
    {!! Form::label('multipleselect[]3', 'Загон 3', ['class' => 'col-lg-2 control-label'] )  !!}
    <div class="col-lg-10">
        {!!  Form::select('multipleselect3[]', $zagon_3, $selected = null, ['class' => 'form-control', 'multiple' => 'multiple']) !!}
    </div>
</div>
<!-- Загон четвертый -->
    </br></br></br></br>
<div class="form-group">
    {!! Form::label('multipleselect4[]', 'Загон 4', ['class' => 'col-lg-2 control-label'] )  !!}
    <div class="col-lg-10">
        {!!  Form::select('multipleselect4[]', $zagon_4, $selected = null, ['class' => 'form-control', 'multiple' => 'multiple']) !!}
    </div>
</div>
    </br></br></br></br>
</div>
</br></br>
<div class="button1">
    <button type="button" class="btn btn-success"><a href="/" class="menu">Обновить</a></button>
</div>
<div class="button2">
    <button type="button" class="btn btn-danger">Зарубить овечек</button>
</div>
</br>
</br>
<div>
    <button type="button" class="btn btn-primary btn-lg btn-block"><a href="/living" class="menu" target="_blank">Посмотреть живых овечек</a></button>
    <button type="button" class="btn btn-primary btn-lg btn-block"><a href="/dead" class="menu" target="_blank">Посмотреть мертвых овечек</a></button>
    <button type="button" class="btn btn-primary btn-lg btn-block"><a href="/population" class="menu" target="_blank">Посмотреть населенность загонов</a></button>
</div>
</body>
</html>