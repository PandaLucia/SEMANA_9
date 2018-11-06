<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title ?> - Aplicación</title>
    <link rel="stylesheet" href="styles/css/bootstrap.min.css">
  </head>
  <body>
    <header>
      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed"
              data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" >
                <span class="sr-only">CRUD</span>
                <span class="icon-bar">-</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="http://localhost/empresa">CRUD</a>
          </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                   aria-haspopup="true">Empleados<span class="caret"></span></a>

                  <ul class="dropdown-menu">
                    <li><a href="index.php?c=empleado&a=empleado">Nuevo registro</a></li>
                    </ul>
                </li>
              </ul>
            </div>
        </div>
      </nav>
    </header>
