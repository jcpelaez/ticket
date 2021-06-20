<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Login</title>
     
     <link rel="shortcut icon" href="images/logo2.png" type="image/x-icon">
    
    <meta name="description" content=".">
    <meta name="author" content=".">
    
    <meta name="msapplication-TileColor" content="#5bc0de" />
    <meta name="msapplication-TileImage" content="images/icono.png" />
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/lib/bootstrap/css/bootstrap.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/lib/font-awesome/css/font-awesome.css">
    
    <link rel="stylesheet" href="assets/css/main.css">
    
    <link rel="stylesheet" href="assets/lib/metismenu/metisMenu.css">
    
    <link rel="stylesheet" href="assets/lib/onoffcanvas/onoffcanvas.css">
    
    <!-- animate.css stylesheet -->
    <link rel="stylesheet" href="assets/lib/animate.css/animate.css">
     
</head>

<body class="login">

      <div class="form-signin">
    <div class="text-center">
        <img src="images/logo.png" width="223" height="147">
    </div>
    <hr>
    <div class="tab-content">
    <div id="alertBoxes"></div>
        <div id="login" class="tab-pane active">
            <form>
                <p class="text-muted text-center">
                    Ingrese su usuario y contraseña
                </p>
                <input name="usuario" type="email" class="form-control top" id="usuario" placeholder="Usuario" required onKeyUp="this.value=this.value.toUpperCase()"><br>
              <input name="clave" type="password" class="form-control bottom" id="clave" placeholder="Contraseña" required>
                           
               <br>
                <button class="btn btn-lg btn-primary btn-block" id="login_userbttn" type="submit">Iniciar sesión</button>
            </form>
        </div>
        <div id="forgot" class="tab-pane">
            <form id="recordar">
                <p class="text-muted text-center">Ingrese sus datos para registrarse</p>
                <input name="emailusuario" type="text" class="form-control" id="emailusuario" placeholder="Email" required>
                 <input name="claves" type="password" class="form-control" id="claves" placeholder="Clave" required>
                  <input name="claverepetir" type="password" class="form-control" id="claverepetir" placeholder="Repetir Clave" required>
                  
                     <?php
require_once 'php/db_connect.php';

$query = "SELECT * FROM compania";
$result = $con->query($query);
?>
                 <select name="compania" class="select2_single form-control" id="compania">
                   <option value="0" selected="selected">Seleccione su compania</option>
                  <?php
			 while($row = $result->fetch_array()) {  	 echo  "<option value='".$row[0]."'>".$row[1]."</option>";
			}
$con->close();
			?>
              </select>
                  
                <br>
                <button class="btn btn-lg btn-danger btn-block" id="add_userbttn" type="submit">Registrarme</button>
            </form>
        
        
        </div>
       </div>
    <hr>
    <div class="text-center">
        <ul class="list-inline">
         <li><a class="text-muted" href="#login" data-toggle="tab">Iniciar sesión</a></li>
            <li><a class="text-muted" href="#forgot" data-toggle="tab">Registrarme</a></li>
            </ul>
    </div>
    <div class="text-center">
       
        <p class="box-inicio" style="text-align:center" data-toggle="tab">Recomendamos utilizar Google Chrome</p>
    </div>
  </div>


    <!--jQuery -->
    <script src="assets/lib/jquery/jquery.js"></script>

    <!--Bootstrap -->
    <script src="assets/lib/bootstrap/js/bootstrap.js"></script>


    <script type="text/javascript">
        (function($) {
            $(document).ready(function() {
                $('.list-inline li > a').click(function() {
                    var activeForm = $(this).attr('href') + ' > form';
                  //console.log(activeForm);
                    $(activeForm).addClass('animated fadeIn');
					$('.box-info, .box-success, .box-alert, .box-error').hide();
					
                    //set timer to 1 seconds, after that, unload the animate animation
                    setTimeout(function() {
                        $(activeForm).removeClass('animated fadeIn');
                    }, 1000);
                });
            });
        })(jQuery);
		
    </script>
    
      <script type="text/javascript" src="js/login.js"></script>
</body>

</html>