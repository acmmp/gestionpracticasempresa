<!doctype html>
<html class="no-js" lang="">
<head>
<meta charset="utf-8">
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title></title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/flexslider.css">
<link rel="stylesheet" href="css/jquery.fancybox.css">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/responsive.css">
<link rel="stylesheet" href="css/font-icon.css">
<link rel="stylesheet" href="css/animate.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"> 
<link rel="icon" type="image/png" href="images/logomini.png" sizes="16x16">
<link rel="stylesheet" href="css/loginindex.css"> 

</head>
<body>

    <style>
    .login-image {
            width: 100px; /* Puedes ajustar el tamaño según tus necesidades */
            height: auto;
            margin-right: 10px; /* Espacio entre la imagen y el texto */
        }    
</style>
    



  </header>
  <section id="services" class="services service-section">
    <div class="container">
      <div class="section-header">


      <h2 class="wow fadeInDown animated">
        <img src="images/Cesur.png" alt="" class="login-image">
        Iniciar Sesión:
    </h2>     
  
              <!-- Los divs son para el resposive -->

  </div>
      <div class="container">
        <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <div class="panel panel-login">
            <div class="panel-heading">
              <div class="row">
                <div class="col-xs-6">
                  <a href="#" class="active" id="login-form-link">Iniciar sesión</a>
                </div>
                <div class="col-xs-6">
                  <a href="#" id="register-form-link">Regístrate ahora</a>
                </div>
              </div>
              <hr>
            </div>

            
            <!-- INICIAR SESION  ( los divs son para el responsive)-->
            <div class="panel-body">
              <div class="row">
                <div class="col-lg-12">
                  <form id="login-form" action="login.php" method="post" role="form" style="display: block;">
                    <div class="form-group"> Correo electronico:
                      <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Correo electronico" value="">
                    </div>
                    <div class="form-group"> Contraseña:
                      <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Contraseña">
                    </div>
                   
                    <div class="form-group">
                      <div class="row">
                        <div class="col-sm-6 col-sm-offset-3">
                          <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Iniciar sesión">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-lg-12">
                          <div class="text-center">
                            <a href="" tabindex="5" class="forgot-password">¿Has olvidado tu contraseña?</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
    <!-- Otro contenido y scripts aquí -->
    <!-- ... -->
</body>
</html>






                  </form>

                  <!-- CREAR CUENTA -->
                  <form id="register-form" action="registrarse.php" method="post" role="form" style="display: none;">
    <div class="form-group"> <!-- Usuario -->
        <label for="username" class="control-label">Correo electronico:</label>
        <input type="text" class="form-control" id="username" name="username" placeholder="Correo electronico" required>
    </div>

    <div class="form-group"> <!-- Contraseña -->
        <label for="password" class="control-label">Contraseña:</label>
        <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Contraseña" required>
    </div>

    

    <hr class="featurette-divider"> 
    <div class="form-group">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Crear cuenta">
            </div>
        </div>
    </div>
</form>
<?php
    // Verifica si hay un error en la URL
    if (isset($_GET['error'])) {
        $error = $_GET['error'];

        // Muestra un mensaje de error correspondiente
        if ($error == 'login_failed') {
            echo '<p style="color: red;">Usuario o contraseña incorrectos. Inténtelo de nuevo.</p>';
        }
    }
    ?>
    
</body>

<!-- JS FILES --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.flexslider-min.js"></script> 
<script src="js/jquery.fancybox.pack.js"></script>  
<script src="js/modernizr.js"></script> 
<script src="js/main.js"></script> 
<script type="text/javascript" src="js/jquery.contact.js"></script> 
<script type="text/javascript" src="js/jquery.devrama.slider.min-0.9.4.js"></script>
<script type="text/javascript">
        $(document).ready(function(){
            $('.slider-banner').DrSlider({
                'transition': 'fade',
                showNavigation: false,
                progressColor: "#03A9F4"
            });
        });
</script> 
<script>
  $(function() {

$('#login-form-link').click(function(e) {
$("#login-form").delay(100).fadeIn(100);
 $("#register-form").fadeOut(100);
$('#register-form-link').removeClass('active');
$(this).addClass('active');
e.preventDefault();
});
$('#register-form-link').click(function(e) {
$("#register-form").delay(100).fadeIn(100);
 $("#login-form").fadeOut(100);
$('#login-form-link').removeClass('active');
$(this).addClass('active');
e.preventDefault();
});

});
</script>

</html>