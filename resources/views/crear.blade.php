<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Pizzeria ESI</h1>

    <h3>Crear una pizza</h3>

    @if(session("creado"))
        <b>Pizza creada</b> <br>
    @endif
    <form action="/crear" method="post">
        @csrf
        Nombre: <input type="text" name="nombre"> <br>
        Precio: <input type="text" name="precio"> <br><br>
        <input type="submit" value="Enviar">
    </form>
    
    

</body>
</html>