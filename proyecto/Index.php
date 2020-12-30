<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario HTML & PHP</title>
</head>
<body>
<!--Formulario-->
<div class="field">
<form action="servidor.php" method="post">

    <label for ="nombre">Nombre</label>
    <input type="text" name="nombre" id="name">

    <label for="correo">Correo Electronico</label>
    <input type "text" name="correo" id="email">

    <input type="submit" value="enviar">
    </form>


    <form action="servidor.php" method="get">

    <label for ="producto">Producto</label>
    <input type="text" name="producto" id="producto">

    <label for="cantidad">Cantidad</label>
    <input type "text" name="cantidad" id="cantidad">

    <input type="submit" value="enviar">
    </form>
</body>
</html>