

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion Practicas Cesurs</title>
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
<h2>Registro de Prácticas Alumnado > FCT </h2>

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
  <tr class="fila" onclick="mostrarFichaPractica('Ana Rodríguez Martínez', '1995-03-25', 'FCT', '5', 'Presentación de informes', 'Cumplió con los objetivos', '395')">
  <td>Ana Rodríguez Martínez</td>
  <td>1995-03-25</td>
  <td>FCT</td>
  <td>5</td>
  <td>Presentación de informes</td>
  <td>Cumplió con los objetivos</td>
  <td>395</td>
</tr>

<tr class="fila" onclick="mostrarFichaPractica('Javier López Sánchez', '1991-07-18', 'Dual', '6', 'Colaboración en equipo', 'Buen trabajo en grupo', '396')">
  <td>Javier López Sánchez</td>
  <td>1991-07-18</td>
  <td>Dual</td>
  <td>6</td>
  <td>Colaboración en equipo</td>
  <td>Buen trabajo en grupo</td>
  <td>396</td>
</tr>

<tr class="fila" onclick="mostrarFichaPractica('Elena García Fernández', '1993-11-05', 'FCT', '8', 'Investigación de mercado', 'Aportó ideas innovadoras', '397')">
  <td>Elena García Fernández</td>
  <td>1993-11-05</td>
  <td>FCT</td>
  <td>8</td>
  <td>Investigación de mercado</td>
  <td>Aportó ideas innovadoras</td>
  <td>397</td>
</tr>

<tr class="fila" onclick="mostrarFichaPractica('David Martínez García', '1989-09-12', 'Dual', '7', 'Resolución de problemas', 'Manejo eficiente de situaciones difíciles', '398')">
  <td>David Martínez García</td>
  <td>1989-09-12</td>
  <td>Dual</td>
  <td>7</td>
  <td>Resolución de problemas</td>
  <td>Manejo eficiente de situaciones difíciles</td>
  <td>398</td>
</tr>

<tr class="fila" onclick="mostrarFichaPractica('Laura Pérez Martínez', '1994-02-28', 'FCT', '6', 'Gestión de proyectos', 'Seguimiento adecuado del cronograma', '399')">
  <td>Laura Pérez Martínez</td>
  <td>1994-02-28</td>
  <td>FCT</td>
  <td>6</td>
  <td>Gestión de proyectos</td>
  <td>Seguimiento adecuado del cronograma</td>
  <td>399</td>
</tr>

<tr class="fila" onclick="mostrarFichaPractica('Pedro Gómez Rodríguez', '1990-06-15', 'Dual', '9', 'Innovación tecnológica', 'Propuso soluciones creativas', '400')">
  <td>Pedro Gómez Rodríguez</td>
  <td>1990-06-15</td>
  <td>Dual</td>
  <td>9</td>
  <td>Innovación tecnológica</td>
  <td>Propuso soluciones creativas</td>
  <td>400</td>
</tr>

<tr class="fila" onclick="mostrarFichaPractica('María Ruiz Sánchez', '1992-09-20', 'FCT', '7', 'Comunicación efectiva', 'Destacó en presentaciones orales', '401')">
  <td>María Ruiz Sánchez</td>
  <td>1992-09-20</td>
  <td>FCT</td>
  <td>7</td>
  <td>Comunicación efectiva</td>
  <td>Destacó en presentaciones orales</td>
  <td>401</td>
</tr>

<tr class="fila" onclick="mostrarFichaPractica('Roberto Fernández Martínez', '1987-12-10', 'Dual', '8', 'Desarrollo de software', 'Entregó productos de alta calidad', '402')">
  <td>Roberto Fernández Martínez</td>
  <td>1987-12-10</td>
  <td>Dual</td>
  <td>8</td>
  <td>Desarrollo de software</td>
  <td>Entregó productos de alta calidad</td>
  <td>402</td>
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
<tr class="fila" onclick="mostrarFichaPractica('Carmen López Rodríguez', '1994-12-05', 'FCT', '6', 'Gestión de proyectos', 'Excelente colaboración', '388')">
        <td>Carmen López Rodríguez</td>
        <td>1994-12-05</td>
        <td>FCT</td>
        <td>6</td>
        <td>Gestión de proyectos</td>
        <td>Excelente colaboración</td>
        <td>388</td>
    </tr>
    <tr class="fila" onclick="mostrarFichaPractica('Carmen López Rodríguez', '1994-12-05', 'FCT', '6', 'Gestión de proyectos', 'Excelente colaboración', '388')">
        <td>Carmen López Rodríguez</td>
        <td>1994-12-05</td>
        <td>FCT</td>
        <td>6</td>
        <td>Gestión de proyectos</td>
        <td>Excelente colaboración</td>
        <td>388</td>
    </tr>
    <tr class="fila" onclick="mostrarFichaPractica('Carmen López Rodríguez', '1994-12-05', 'FCT', '6', 'Gestión de proyectos', 'Excelente colaboración', '388')">
        <td>Carmen López Rodríguez</td>
        <td>1994-12-05</td>
        <td>FCT</td>
        <td>6</td>
        <td>Gestión de proyectos</td>
        <td>Excelente colaboración</td>
        <td>388</td>
    </tr>
  
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

<br>
<br>
<br>
<br>
<br>





</body>
</html>

</body>
</html>


