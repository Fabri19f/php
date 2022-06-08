<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Vehiculo</title>
</head>
<body>
    <h2>Registrar Vehiculo</h2>
    <form id = "nuevo" name = "nuevo" method="POST" action="index.php?c=vehiculos&a=guardar" autocomplete="off">
        <label>Placa</label>
        <input type="text" id="placa" name="placa">
        <br>
        <label>Marca</label>
        <input type="text" id="marca" name="marca">
        <br>
        <label>Modelo</label>
        <input type="text" id="modelo" name="modelo">
        <br>
        <label>Año</label>
        <input type="text" id="anio" name="anio">
        <br>
        <label>Color</label>
        <input type="text" id="color" name="color">
        <br>
        <button type="submit" id="guradar" name="guardar">Guardar</button>
    </form>
</body>
</html>