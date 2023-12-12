

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion Practicas Cesur</title>
    <?php require("views/headprofesores.php"); ?>


    <style>
      
    body {
      font-family: Arial, sans-serif;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 20px;
    }

    th, td {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }

    th {
    background-color: #4CAF50;
    color: white;
  }

    h2 {
      color: #333;
    }
    <style>
    /* Estilo básico para resaltar el clickeo */
    tr:hover {
      background-color: #f5f5f5;
      cursor: pointer;
    }

    /* Estilo para la ficha que inicialmente está oculta */
    #ficha-alumno {
      display: none;
      border: 1px solid #ccc;
      padding: 10px;
      margin-top: 10px;
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
  <h2>Formulario de Datos Alumnos > DAW</h2>

 

  <table border="1">
  <tr>
    <th>Nombre</th>
    <th>Apellidos</th>
    <th>Contraseña de acceso</th>
    <th>DNI</th>
    <th>Fecha de nacimiento</th>
    <th>Email</th>
    <th>Teléfono de contacto</th>
    <th>Empresa (Prácticas)</th>
    <th>Profesor Tutor</th>
    <th>Horas DUAL</th>
    <th>Horas FCT</th>
  </tr>
  <tr class="fila" onclick="mostrarFicha('Juan', 'Pérez González', '********', '12345678A', '1990-05-15', 'juan.perez@example.com', '123-456-789', 'Empresa XYZ', 'María Rodríguez', '600', '400')">
    <td>Sebastian</td>
    <td>Pérez González</td>
    <td>********</td>
    <td>12345678A</td>
    <td>1990-05-15</td>
    <td>juan.perez@example.com</td>
    <td>123-456-789</td>
    <td>Empresa XYZ</td>
    <td>María Rodríguez</td>
    <td>600</td>
    <td>400</td>
  </tr>
  <tr class="fila" onclick="mostrarFicha('Marta', 'Gómez López', '********', '87654321B', '1992-08-20', 'marta.gomez@example.com', '987-654-321', 'Empresa ABC', 'Pablo Sánchez', '550', '450')">
    <td>Maria</td>
    <td>Gómez López</td>
    <td>********</td>
    <td>87654321B</td>
    <td>1992-08-20</td>
    <td>marta.gomez@example.com</td>
    <td>987-654-321</td>
    <td>Empresa ABC</td>
    <td>Pablo Sánchez</td>
    <td>600</td>
    <td>400</td>
  </tr>
  <tr class="fila" onclick="mostrarFicha('Carlos', 'Ruiz Fernández', '********', '34567890C', '1988-12-10', 'carlos.ruiz@example.com', '234-567-890', 'Empresa 123', 'Ana Martínez', '700', '300')">
    <td>Rosa</td>
    <td>Castellano Fernández</td>
    <td>********</td>
    <td>34567890C</td>
    <td>1988-12-10</td>
    <td>carlos.ruiz@example.com</td>
    <td>234-567-890</td>
    <td>Empresa 123</td>
    <td>Ana Martínez</td>
    <td>600</td>
    <td>400</td>
  </tr>
  <tr class="fila" onclick="mostrarFicha('Laura', 'Fernández Rodríguez', '********', '56789012D', '1991-03-25', 'laura.fernandez@example.com', '345-678-901', 'Empresa XYZ', 'David López', '550', '450')">
  <td>Laura</td>
  <td>Fernández Rodríguez</td>
  <td>********</td>
  <td>56789012D</td>
  <td>1991-03-25</td>
  <td>laura.fernandez@example.com</td>
  <td>345-678-901</td>
  <td>Empresa XYZ</td>
  <td>David López</td>
  <td>600</td>
  <td>400</td>
</tr>
<tr class="fila" onclick="mostrarFicha('Javier', 'Sánchez Martínez', '********', '89012345E', '1993-06-18', 'javier.sanchez@example.com', '456-789-012', 'Empresa ABC', 'Elena González', '700', '300')">
  <td>Javier</td>
  <td>Sánchez Martínez</td>
  <td>********</td>
  <td>89012345E</td>
  <td>1993-06-18</td>
  <td>javier.sanchez@example.com</td>
  <td>456-789-012</td>
  <td>Empresa ABC</td>
  <td>Elena González</td>
  <td>600</td>
  <td>400</td>
</tr>
<tr class="fila" onclick="mostrarFicha('Isabel', 'López García', '********', '23456789F', '1994-09-12', 'isabel.lopez@example.com', '567-890-123', 'Empresa 123', 'Francisco Ruiz', '550', '450')">
  <td>Isabel</td>
  <td>López García</td>
  <td>********</td>
  <td>23456789F</td>
  <td>1994-09-12</td>
  <td>isabel.lopez@example.com</td>
  <td>567-890-123</td>
  <td>Empresa 123</td>
  <td>Francisco Ruiz</td>
  <td>600</td>
  <td>400</td>
</tr>
<tr class="fila" onclick="mostrarFicha('Pedro', 'Martínez Ruiz', '********', '67890123G', '1995-01-08', 'pedro.martinez@example.com', '678-901-234', 'Empresa XYZ', 'Carmen Rodríguez', '700', '300')">
  <td>Pedro</td>
  <td>Martínez Ruiz</td>
  <td>********</td>
  <td>67890123G</td>
  <td>1995-01-08</td>
  <td>pedro.martinez@example.com</td>
  <td>678-901-234</td>
  <td>Empresa XYZ</td>
  <td>Carmen Rodríguez</td>
  <td>600</td>
  <td>400</td>
</tr>
<tr class="fila" onclick="mostrarFicha('Eva', 'García Pérez', '********', '01234567H', '1996-04-02', 'eva.garcia@example.com', '789-012-345', 'Empresa ABC', 'Antonio Fernández', '550', '450')">
  <td>Eva</td>
  <td>García Pérez</td>
  <td>********</td>
  <td>01234567H</td>
  <td>1996-04-02</td>
  <td>eva.garcia@example.com</td>
  <td>789-012-345</td>
  <td>Empresa ABC</td>
  <td>Antonio Fernández</td>
  <td>600</td>
  <td>400</td>
</tr>
<tr class="fila" onclick="mostrarFicha('Roberto', 'Santos López', '********', '34567890I', '1997-07-27', 'roberto.santos@example.com', '890-123-456', 'Empresa 123', 'Isabel Martínez', '700', '300')">
  <td>Roberto</td>
  <td>Santos López</td>
  <td>********</td>
  <td>34567890I</td>
  <td>1997-07-27</td>
  <td>roberto.santos@example.com</td>
  <td>890-123-456</td>
  <td>Empresa 123</td>
  <td>Isabel Martínez</td>
  <td>600</td>
  <td>400</td>
</tr>
<tr class="fila" onclick="mostrarFicha('Cristina', 'Fernández García', '********', '78901234J', '1998-10-21', 'cristina.fernandez@example.com', '901-234-567', 'Empresa XYZ', 'Javier Sánchez', '550', '450')">
  <td>Cristina</td>
  <td>Fernández García</td>
  <td>********</td>
  <td>78901234J</td>
  <td>1998-10-21</td>
  <td>cristina.fernandez@example.com</td>
  <td>901-234-567</td>
  <td>Empresa XYZ</td>
  <td>Javier Sánchez</td>
  <td>600</td>
  <td>400</td>
</tr>
<tr class="fila" onclick="mostrarFicha('Alejandro', 'Gómez Martínez', '********', '23456789K', '1999-01-15', 'alejandro.gomez@example.com', '012-345-678', 'Empresa ABC', 'Eva Rodríguez', '700', '300')">
  <td>Alejandro</td>
  <td>Gómez Martínez</td>
  <td>********</td>
  <td>23456789K</td>
  <td>1999-01-15</td>
  <td>alejandro.gomez@example.com</td>
  <td>012-345-678</td>
  <td>Empresa ABC</td>
  <td>Eva Rodríguez</td>
  <td>600</td>
  <td>400</td>
</tr>
</table>

<p> Haz click sobre el alumno para ver informacion especifica </p>

<div id="ficha-alumno">
  <h2>Ficha del Alumno</h2>
  <p><strong>Nombre:</strong> <span id="nombre"></span></p>
  <p><strong>Apellidos:</strong> <span id="apellidos"></span></p>
  <p><strong>Contraseña de acceso:</strong> <span id="contrasena"></span></p>
  <p><strong>DNI:</strong> <span id="dni"></span></p>
  <p><strong>Fecha de nacimiento:</strong> <span id="fecha-nacimiento"></span></p>
  <p><strong>Email:</strong> <span id="email"></span></p>
  <p><strong>Teléfono de contacto:</strong> <span id="telefono"></span></p>
  <p><strong>Empresa (Prácticas):</strong> <span id="empresa"></span></p>
  <p><strong>Profesor Tutor:</strong> <span id="profesor"></span></p>
  <p><strong>Horas DUAL:</strong> <span id="horas-dual"></span></p>
  <p><strong>Horas FCT:</strong> <span id="horas-fct"></span></p>
</div>

<script>
  function mostrarFicha(nombre, apellidos, contrasena, dni, fechaNacimiento, email, telefono, empresa, profesor, horasDual, horasFct) {
    document.getElementById('nombre').innerText = nombre;
    document.getElementById('apellidos').innerText = apellidos;
    document.getElementById('contrasena').innerText = contrasena;
    document.getElementById('dni').innerText = dni;
    document.getElementById('fecha-nacimiento').innerText = fechaNacimiento;
    document.getElementById('email').innerText = email;
    document.getElementById('telefono').innerText = telefono;
    document.getElementById('empresa').innerText = empresa;
    document.getElementById('profesor').innerText = profesor;
    document.getElementById('horas-dual').innerText = horasDual;
    document.getElementById('horas-fct').innerText = horasFct;

    // Mostrar la ficha del alumno
    document.getElementById('ficha-alumno').style.display = 'block';
  }
</script>













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



                    




