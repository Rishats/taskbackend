<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
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
        <?php echo e(csrf_field()); ?>

        <div class="form-group">
            <label for="zagon_1">Загон 1</label>
            <select multiple class="form-control" id="zagon_1">
                <?php $__currentLoopData = $zagon_1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $animal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option><?php echo e($animal); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
    <!-- Загон второй -->
        <div class="form-group">
            <label for="zagon_2">Загон 2</label>
            <select multiple class="form-control" id="zagon_2">
                <?php $__currentLoopData = $zagon_2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $animal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option><?php echo e($animal); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
    <!-- Загон третий -->
        <div class="form-group">
            <label for="zagon_3">Загон 3</label>
            <select multiple class="form-control" id="zagon_3">
                <?php $__currentLoopData = $zagon_3; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $animal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option><?php echo e($animal); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
    <!-- Загон четвертый -->
        <div class="form-group">
            <label for="zagon_4">Загон 4</label>
            <select multiple class="form-control" id="zagon_4">
                <?php $__currentLoopData = $zagon_4; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $animal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option><?php echo e($animal); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
    </form>
    </br>

    <div class="button2">
        <button type="button" class="btn btn-danger" id="kill">Зарубить овечек</button>
    </div>
</div>
<div class="button1">
    <button type="button" class="btn btn-success"><a href="/" class="menu">Обновить страницу</a></button>
</div>
</br>
</br>
<div class="button3">
    <form action="killbyid" method="POST">
        <?php echo e(csrf_field()); ?>

        Убить овечку по номеру:<br>
        <input type="text" name="id" value="0">
        <br><br>
        <input type="submit" value="Убить">
    </form>
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