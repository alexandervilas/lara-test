<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="">
        @csrf
        Введите логин администратора: <input type="text" name="login" id="">
        <br>
        Введите пароль администратора: <input type="password" name="password" id="">
        <br>
        <input type="submit" value="Отправить">
    </form>
</body>
</html>
