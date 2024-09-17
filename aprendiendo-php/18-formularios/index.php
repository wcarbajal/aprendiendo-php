<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formularios PHP y HTML</title>
</head>

<body>
  <h1>Formulario</h1>

  <form action="" method="post" enctype="multipart/form-data">

    <label for="nombre">Nombre:</label>
    <p> <input type="text" id="nombre" name="nombre" placeholder="Ingrese su nombre" required autofocus> </p>

    <label for="apellido">Apellido:</label>

    <p> <input type="text" id="apellido" name="apellido" required> </p>

    <label for="sexo">Sexo:</label>
    <p>
      <input type="checkbox" id="masculino" name="masculino">Masculino </input>

      <input type="checkbox" id="femenino" name="femenino">Femenino</input>
    </p>

    <label for="color">Color:</label>

    <input type="color" name="color" /><br>







    <label for="miboton">Boton:</label>
    <p> <input type="button" id="apellido" name="miboton" value="Mi boton"> </p>

    <input type="submit" value="Enviar">



  </form>

</body>

</html>