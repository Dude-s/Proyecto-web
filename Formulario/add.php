<?php
	if (isset($_POST['submit'])) {
		require_once("db.php");
		//if(!empty($nombres)){
		$sql = $conn->prepare("INSERT INTO forms (nombre,telefono,email,mensaje) VALUES (?, ?, ?, ?)");  
		$nombre = $_POST['nombre'];
		$telefono = $_POST['tel'];
		$email = $_POST['correo'];
    $mensaje = $_POST['introducir_mensaje'];


	
    $sql->bind_param(/*"sssiss"*/"ssss",$nombre,$telefono,$email,$mensaje);

		if($sql->execute()) {
			$success_message = "Added Successfully";
		} else {
			$error_message = "Problem in Adding New Record";
		}
		$sql->close();   
		$conn->close();
	} 
?>
<html>
<head>
<link href="style.css" rel="stylesheet" type="text/css" />
	
<style>
.tbl-qa{border-spacing:0px;border-radius:4px;border:#6ab5b9 1px solid;}
</style>
  <title>Contacto - Sucub Games</title> 	
</head>
<body>
<?php if(!empty($success_message)) { ?>
<div class="success message"><?php echo $success_message; ?></div>
<?php } if(!empty($error_message)) { ?>
<div class="error message"><?php echo $error_message; ?></div>
<?php } ?>


<form name="frmUser" method="post" action="">
  <!--div class="button_link"><a href="index.php"> Back to List </a></!--div>-->
  <div id="header">
            <h2 id="titulo">FORMULARIO DE CONTACTO</h2>
        </div>
        <br>
     <!--   <div id="art1">
                <label>DATOS PERSONALES</label><br>
            </div>    
        <br>-->
        <table id="section1">
            <tr>
                <th id="art1" colspan="2"><label>DATOS DE CONTACTO</label>
                <pre>De ser de mucha importancia mandar un<br> mensaje al siguiente correo<br>
          sucub_games@gmail.com</pre>
              </th>
            </tr>
            <tr>
                <td><label for="nombre">Nombre</label></td>
                <td><input type="text" id="nom" name="nombre" required="obligatorio" placeholder="Haga clic aqui para escribir texto."><br></td>
            </tr>
            <tr>
                <td><label for="tel">Telefono</label> </td>
                <td><input type="text" id="tel" name="tel" required="obligatorio" placeholder="Haga clic aqui para escribir texto."><br></td>
            </tr>
            <tr>
                <td><label for="correo">Correo electronico</label> </td>
                <td><input type="email" id="correo" name="correo" required="obligatorio" placeholder="Haga clic aqui para escribir texto."><br></td>
            </tr>
            <tr>
                <td><label for="introducir_mensaje">mensaje</label> </td>
                <td><textarea type="textarea" id="mensaje" name="introducir_mensaje" required="obligatorio" placeholder="Haga clic aqui para escribir texto."></textarea><br></td>
            </tr>
        </table>
        <div class="boton">
            <input type="submit" name="submit" value="Submit" class="demo-form-submit">
        </div>
</form> 

<footer>
    <div class="Copy">
      <p class="Copy-text">Copyright © 2023 Sucub Games.</p>
    </div>

    <div class="redes">
      <a href="https://es-la.facebook.com/" target="_blank"><img src="Imagenes/facebook.png" class="img-redes"></a>
      <a href="https://twitter.com/" target="_blank"><img src="Imagenes/twitter.png" class="img-redes"></a>
    </div>

  </footer>

</body>
</html>