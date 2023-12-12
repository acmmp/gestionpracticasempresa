<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion Practicas Cesur</title>
    <?php require("views/headprofesores.php"); ?>


    <style>
   

    form {
      max-width: 600px;
      margin: 20px auto;
      background: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    label {
      display: block;
      margin-bottom: 8px;
    }

    input, select {
      width: 100%;
      padding: 10px;
      margin-bottom: 16px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    button {
      color: black;
      padding: 12px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-size: 16px;
    }

    button:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>

<br><br><br><br><br>

  <form>
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" required>

    <label for="apellidos">Apellidos:</label>
    <input type="text" id="apellidos" name="apellidos" required>

    <label for="password">Contraseña de acceso:</label>
    <input type="password" id="password" name="password" required>

    <label for="dni">DNI:</label>
    <input type="text" id="dni" name="dni" required>

    <label for="fechaNacimiento">Fecha de nacimiento:</label>
    <input type="date" id="fechaNacimiento" name="fechaNacimiento" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="telefono">Teléfono de contacto:</label>
    <input type="tel" id="telefono" name="telefono" required>

    <label for="empresa">Empresa donde realiza las prácticas:</label>
    <input type="text" id="empresa" name="empresa" required>

    <label for="profesorTutor">Profesor Tutor asignado:</label>
    <input type="text" id="profesorTutor" name="profesorTutor" required>

    <button type="submit">Enviar</button>
  </form>

</body>
</html>