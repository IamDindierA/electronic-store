<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--Bloque de cabecera -->
    <div class="Header">
        @yield("Header")
    </div>
    <!--Bloque de cuerpo -->
    <div class="Body">
        @yield("Body")
    </div>
    <!--Bloque de pie -->
    <div class="Footer">
        @yield("Footer")
    </div>
</body>
</html>