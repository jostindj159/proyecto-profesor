<?php 

if (isset($_REQUEST['accion'])) {
	$accion = $_REQUEST['accion'];

	if ($accion == 'salir') {
		session_start();
		session_destroy();
    
	}
	if ($accion == 'panel') {
		session_start();
		include('../view/panel.php');
		exit();
	}if ($accion == 'agenda') {
		include('../view/agenda.php');
		exit();
	}if ($accion == 'articulo') {
		include('../view/panelarticulos.php');
		exit();
	}
}

?>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
<div class="container">
<div class="row">
<div class="col-sm-4" >
</div>
<div class="col-sm-4" ></br>
<center><a href="../view/index.php">ir a la web</a></center>
<center></br></br></br></br></br>

<form name="form1" action="../controller/c_validar.php" method="POST">
    <p>
      <label>Username</label>
      <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input id="username" value="" name="username" class="form-control" type="text" required="required" /><br>
      </div>
    </p>
    <p>
     <label>Password</label>
      <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
      <input id="password" name="password" class="form-control"  type="password" required="required" />
      </div><br/>
    </p>
      <p>
          <button type="submit" name="submit" class="btn btn-primary"><span>Ingresar</span></button> <button type="reset" class="btn btn-danger"span>Cancelar</span></button>
      </p>
</form>
</center>
</div>
<div class="col-sm-4" ></div>
</div>
</body>
</html>
