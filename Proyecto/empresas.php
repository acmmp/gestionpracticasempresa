<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion Practicas Cesur</title>
    <?php require("views/headprofesores.php"); ?>


    <style>
    table {
      border-collapse: collapse;
      width: 100%;
    }

    th, td {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
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


<h2> Informacion empresa </h2>
<br>

<div class="company-info">Decra</div>
    <table>
        <tr>
            <th>Teléfono</th>
            <th>Email</th>
            <th>Responsable de empresa</th>
        </tr>
        <tr>
            <td>123-456-789</td>
            <td>info@Decra.com</td>
            <td>Juan Pérez</td>
        </tr>
    </table>
    <br>
    <!-- Repite la estructura para las otras 9 empresas -->

    <!-- Empresa 2 -->
    <div class="company-info">Accentur</div>
    <table>
        <tr>
            <th>Teléfono</th>
            <th>Email</th>
            <th>Responsable de empresa</th>
        </tr>
        <tr>
            <td>987-654-321</td>
            <td>info@Accent.com</td>
            <td>Maria Rodríguez</td>

        </tr>
    </table>
    <br>
    <div class="company-info">Yoloho</div>
<table>
    <tr>
        <th>Teléfono</th>
        <th>Email</th>
        <th>Responsable de empresa</th>
    </tr>
    <tr>
        <td>999-888-777</td>
        <td>info@Yoloho.com</td>
        <td>Pablo Sánchez</td>
    </tr>
</table>

<br>

<div class="company-info">Opplus</div>
<table>
    <tr>
        <th>Teléfono</th>
        <th>Email</th>
        <th>Responsable de empresa</th>
    </tr>
    <tr>
        <td>111-222-333</td>
        <td>info@Opplus.com</td>
        <td>Ana Martínez</td>
    </tr>
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