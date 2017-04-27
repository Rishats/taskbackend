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
    {!! Form::label('multipleselect[]', 'Загон 1', ['class' => 'col-lg-2 control-label'] )  !!}
    <div class="col-lg-10">
        {!!  Form::select('multipleselect[]', ['honda' => 'Honda', 'toyota' => 'Toyota', 'subaru' => 'Subaru', 'ford' => 'Ford', 'nissan' => 'Nissan'], $selected = null, ['class' => 'form-control', 'multiple' => 'multiple']) !!}
    </div>
</div>
<!-- Загон второй -->
    </br></br></br></br>
<div class="form-group">
    {!! Form::label('multipleselect[]', 'Загон 2', ['class' => 'col-lg-2 control-label'] )  !!}
    <div class="col-lg-10">
        {!!  Form::select('multipleselect[]', ['honda' => 'Honda', 'toyota' => 'Toyota', 'subaru' => 'Subaru', 'ford' => 'Ford', 'nissan' => 'Nissan'], $selected = null, ['class' => 'form-control', 'multiple' => 'multiple']) !!}
    </div>
</div>
<!-- Загон третий -->
    </br></br></br></br>
<div class="form-group">
    {!! Form::label('multipleselect[]', 'Загон 3', ['class' => 'col-lg-2 control-label'] )  !!}
    <div class="col-lg-10">
        {!!  Form::select('multipleselect[]', ['honda' => 'Honda', 'toyota' => 'Toyota', 'subaru' => 'Subaru', 'ford' => 'Ford', 'nissan' => 'Nissan'], $selected = null, ['class' => 'form-control', 'multiple' => 'multiple']) !!}
    </div>
</div>
<!-- Загон четвертый -->
    </br></br></br></br>
<div class="form-group">
    {!! Form::label('multipleselect[]', 'Загон 4', ['class' => 'col-lg-2 control-label'] )  !!}
    <div class="col-lg-10">
        {!!  Form::select('multipleselect[]', ['honda' => 'Honda', 'toyota' => 'Toyota', 'subaru' => 'Subaru', 'ford' => 'Ford', 'nissan' => 'Nissan'], $selected = null, ['class' => 'form-control', 'multiple' => 'multiple']) !!}
    </div>
</div>
    </br></br></br></br>
</div>
</br></br>
<div class="button1">
    <button type="button" class="btn btn-success">Обновить</button>
</div>
<div class="button2">
    <button type="button" class="btn btn-danger">Зарубить овечек</button>
</div>
</body>
</html>