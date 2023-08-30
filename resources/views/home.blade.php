<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Привет! Это моя первая страница на Laravel</h1>
    <p>{{$var}}</p>
    <p>{{$var2}}</p>

    @if($var3 > 90)
    <p>{{$var3}}</p>
    @else
    <p>Переменная меньше 90</p>
    @endif
    <hr>
    <x-alert user="Vasya" type="error" class="mt-4"/>
    
</body>
</html>