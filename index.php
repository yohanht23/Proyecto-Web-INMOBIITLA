<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>    
     <!--CDN DEL CODIGO CSS DE BOOTSTRAP-->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<style>
    header{
        background:#eee;
    }
    table thead th{
        vertical-align: middle;
        text-align: center;
    }
</style>
<body>
    <!--HEADER-->
    <header>
        <div class="container">
            <h1>Inicia sesión en tu cuenta para ver o publicar anuncios</h1>
        </div>
    </header>
    <br>
     <div class="row">
       <div class="col-xs-6">
         <!--FORMULARIO PARA LOS DATOS-->
          <div class="container" style="padding:30px 40px 30px;border:thin solid #aaa; width:400px;">
              <form action="login.php" method="post">
                  <h3>Inserta tus credenciales</h3>
                  <hr>
                  <label>Nombre</label>
                    <input type="text" class="form-control" name="nombre" placeholder="Inserta tu nombre">
                    <label>Apellido</label>
                    <input type="text" class="form-control" name="apellido" placeholder="Inserta tu apellido">
                    <label>Correo</label>
                    <input type="text" class="form-control" name="correo" placeholder="Inserta tu correo">
                    <label>Nombre de usuario</label>
                    <input type="text" class="form-control" name="usuario" placeholder="Inserta tu usuario">
                    <label>Clave</label>
                    <input type="text" class="form-control" name="clave" placeholder="Inserta tu clave">
                    <label>Repetir clave</label>
                    <input type="text" class="form-control" name="rclave" placeholder="Repetir clave">
                    <hr>
                    <button class="btn btn-primary btn-block btn-lg" name="submit" type="submit">Registrarse</button>

              </form>
          </div>  
  
    
  

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery.min.js"></script>
</body>
</html>