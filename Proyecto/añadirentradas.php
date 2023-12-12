<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion Practicas Cesur</title>
    <?php require("views/headalumnos.php"); ?>


    <style>
        body {
            font-family: Arial, sans-serif;
        }

        form {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input, select, textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 12px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
   
</head>
<body>

<br>
<br>
<br>
<br>
<br>
<br>


<form>
        <label for="fecha">Fecha:</label>
        <input type="date" id="fecha" name="fecha" required>

        <label for="tipoPractica">Tipo de práctica (Dual o FCT):</label>
        <select id="tipoPractica" name="tipoPractica" required>
            <option value="dual">Dual</option>
            <option value="fct">FCT</option>
        </select>

        <label for="horas">Total de horas realizadas ese día:</label>
        <input type="number" id="horas" name="horas" required>

        <label for="actividad">Actividad realizada:</label>
        <textarea id="actividad" name="actividad" rows="4" required></textarea>

        <label for="observaciones">Observaciones o incidencias:</label>
        <textarea id="observaciones" name="observaciones" rows="4"></textarea>

        <button type="submit">Enviar</button>
    </form>


   

</body>
</html>

