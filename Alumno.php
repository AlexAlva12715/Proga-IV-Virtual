<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Alumnos</title>
</head>
<body>
    <form action="procesar_datos_alumnos.php" method="POST">
        <label for="txtnombre">Nombre: </label>
        <input type="text" name= "txtnombre" id="txtnombre">
        <br><br>

        <label for="txtDireccion">Direccion: </label>
        <input type="text" name= "txtDireccion" id="txtDireccion">
        <br><br>


        <label for="txtedad">Edad: </label>
        <input type="text" name= "txtEdad" id="txtEdad">


        <input type="submit" value="Enviar Datos"


    </form>
</body>
</html>