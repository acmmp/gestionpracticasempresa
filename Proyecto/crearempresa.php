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
    h2 {
    text-align: center;
}

    
  </style>
</head>
<body>

<br><br><br><br><br>
<h2>Añadir Empresa </h2>
  <form>
    <label for="nombre">Nombre de la empresa:</label>
    <input type="text" id="nombre" name="nombre" required>

    <label for="apellidos">Tutor practicas empresa:</label>
    <input type="text" id="apellidos" name="apellidos" required>

    

    <button type="submit">Enviar</button>
  </form>

</body>
</html>