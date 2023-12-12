

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion Practicas Cesur</title>
    <?php require("views/headprofesores.php"); ?>

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
    background-color: #4CAF50;
    color: white;
  }

  
.formulario-container {
  background-color: #fff;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
  padding: 20px;
  border-radius: 8px;
}

form {
  display: flex;
  flex-direction: column;
}

label {
  margin-top: 10px;
}

input {
  padding: 8px;
  margin-top: 5px;
  margin-bottom: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
}
.fila:hover {
    background-color: #e0e0e0; /* Cambia este color según tus preferencias */
    cursor: pointer;
  }


  .container {
            display: flex;
        }

        .tabla-container {
            flex: 1;
        }

        #ficha-practica {
            flex: 1;
            padding: 20px;
            border-radius: 8px;
            background-color: #fff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            display: none;
        }


    </style>
    
</head>
<body>

<br>
<br>
<br>
<br>
<br>
<div class="container">
        <div class="tabla-container">
<h2>Registro de Prácticas Alumnado > DUAL</h2>
<table>
  <thead>
    <tr>
      <th>Alumno</th>
      <th>Fecha</th>
      <th>Tipo de práctica</th>
      <th>Total de horas</th>
      <th>Actividad realizada</th>
      <th>Observaciones o incidencias</th>
      <th>Horas restantes</th>
    </tr>
  </thead>
  <tbody>
  <tr class="fila" onclick="mostrarFichaPractica('Juan Pérez González', '1990-05-15', 'Dual', '8', 'Realización de tareas asignadas', 'No hubo incidencias', '392')">
      <td>Juan Pérez González</td>
      <td>2023-11-12</td>
      <td>Dual</td>
      <td>8</td>
      <td>Realización de tareas asignadas</td>
      <td>No hubo incidencias</td>
      <td>392</td>
    </tr>
    <tr class="fila" onclick="mostrarFichaPractica('Marta Gómez López', '1992-08-20', 'FCT', '6', 'Participación en reuniones', 'Problemas de conexión a Internet', '394')">
      <td>Marta Gómez López</td>
      <td>2023-11-12</td>
      <td>FCT</td>
      <td>6</td>
      <td>Participación en reuniones</td>
      <td>Problemas de conexión a Internet</td>
      <td>394</td>
    </tr>
    <tr class="fila" onclick="mostrarFichaPractica('Carlos Rodríguez García', '1988-12-10', 'Dual', '7', 'Desarrollo de proyectos prácticos', 'Excelente desempeño', '393')">
      <td>Carlos Rodríguez García</td>
      <td>2023-11-12</td>
      <td>Dual</td>
      <td>7</td>
      <td>Desarrollo de proyectos prácticos</td>
      <td>Excelente desempeño</td>
      <td>393</td>
    </tr>
    <tr class="fila" onclick="mostrarFichaPractica('Isabel López García', '1993-04-25', 'FCT', '5', 'Análisis de datos', 'Realizó informes detallados', '403')">
      <td>Isabel López García</td>
      <td>1993-04-25</td>
      <td>FCT</td>
      <td>5</td>
      <td>Análisis de datos</td>
      <td>Realizó informes detallados</td>
      <td>403</td>
    </tr>
    <!-- Agrega más filas según sea necesario -->
  </tbody>
</table>

<div id="ficha-practica" style="display: none;">
  <h2>Ficha de Prácticas</h2>
  <p><strong>Alumno:</strong> <span id="alumno"></span></p>
  <p><strong>Fecha:</strong> <span id="fecha"></span></p>
  <p><strong>Tipo de práctica:</strong> <span id="tipo-practica"></span></p>
  <p><strong>Total de horas:</strong> <span id="total-horas"></span></p>
  <p><strong>Actividad realizada:</strong> <span id="actividad-realizada"></span></p>
  <p><strong>Observaciones o incidencias:</strong> <span id="observaciones"></span></p>
  <p><strong>Horas restantes:</strong> <span id="horas-restantes"></span></p>
</div>

<script>
  function mostrarFichaPractica(alumno, fecha, tipoPractica, totalHoras, actividadRealizada, observaciones, horasRestantes) {
    document.getElementById('alumno').innerText = alumno;
    document.getElementById('fecha').innerText = fecha;
    document.getElementById('tipo-practica').innerText = tipoPractica;
    document.getElementById('total-horas').innerText = totalHoras;
    document.getElementById('actividad-realizada').innerText = actividadRealizada;
    document.getElementById('observaciones').innerText = observaciones;
    document.getElementById('horas-restantes').innerText = horasRestantes;

    // Mostrar la ficha de prácticas
    document.getElementById('ficha-practica').style.display = 'block';
  }
</script>
    
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


