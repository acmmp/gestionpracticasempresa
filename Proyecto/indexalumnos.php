<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion Practicas Cesur</title>
    <?php require("views/headalumnos.php"); ?>

</head>
<body>
<!DOCTYPE html>
<html lang="es">
<head>
    
 
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
<br>
<br>

<br>

<br>

<br>

    <h2>Registro de Prácticas</h2>

    <table>
        <thead>
            <tr>
                <th>Fecha</th>
                <th>Tipo de práctica</th>
                <th>Total de horas</th>
                <th>Actividad realizada</th>
                <th>Observaciones o incidencias</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>2023-11-12</td>
                <td>Dual</td>
                <td>8</td>
                <td>Realización de tareas asignadas</td>
                <td>No hubo incidencias</td>
            </tr>
            <!-- Puedes agregar más filas según sea necesario -->
        </tbody>
    </table>

<br>

    <div class="button-container">
        <button onclick="modificarTabla()">
            <img src="images/editar.png" alt="Modificar Tabla">
        </button>
        <button onclick="borrarTabla()">
            <img src="images/borrar.png" alt="Borrar Tabla">
        </button>
    </div>

</body>
</html>

</body>
</html>