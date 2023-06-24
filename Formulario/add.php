<?php
	if (isset($_POST['submit'])) {
		require_once("db.php");
		//if(!empty($nombres)){
		$sql = $conn->prepare("INSERT INTO datos_personales (nombres,apellidos,direccion,telefono,email,documento,fecha_nacimiento,curso ,horario,Lunes,Martes,Miercoles,Jueves,Viernes,Pago_Contado_Moneda,Pago_Tarjeta,num_contrato,persona_que_atendio,fecha_inscripcion) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");  
		$nombres = $_POST['nombre'];
		$apellidos = $_POST['apellido'];
		$direccion = $_POST['direc'];
		$telefono = $_POST['tel'];
		$email = $_POST['correo'];
		$documento = $_POST['doc'];
		$fecha_nacimiento = $_POST['nac'];
        $fecha_nacimiento = date('Y-m-d', strtotime($fecha_nacimiento));

		$curso = $_POST['cur'];
		$horario = $_POST['hor'];
        $Lunes = isset($_POST['diaL']) ? 1 : 0;
        $Martes = isset($_POST['diaMa']) ? 1 : 0;
        $Miercoles = isset($_POST['diaMi']) ? 1 : 0;
        $Jueves = isset($_POST['diaJ']) ? 1 : 0;
        $Viernes = isset($_POST['diaV']) ? 1 : 0;

        $Moneda = isset($_POST['pago_moneda']) ? 1 : 0;
        $Tarjeta = isset($_POST['pago_tarjeta']) ? 1 : 0;

        $num_contra = $_POST['contra'];
		$atend_per = $_POST['per'];

        $fecha = $_POST['ins'];
        $fecha = date('Y-m-d', strtotime($fecha));



	
        $sql->bind_param(/*"sssiss"*/"sssssssisiiiiiiisss",$nombres,$apellidos ,$direccion ,$telefono ,$email ,$documento ,$fecha_nacimiento,$curso,$horario,$Lunes, $Martes, $Miercoles, $Jueves, $Viernes,$Moneda,$Tarjeta,$num_contra,$atend_per,$fecha);

        /*$stmt = $conexion->prepare($sql);
        $stmt->execute();*/
/*
		$sql = $conn->prepare("INSERT INTO pago(opcion) VALUES (?,)");  
		$opcion = $_POST['opcion'];
		$sql->bind_param("s",$opcion);

		$sql = $conn->prepare("INSERT INTO institucion(num_contrato ,persona_que_atendio,fecha_inscripcion) VALUES (?, ?, ?)");  
		$num_contrato = $_POST['num_contrato'];
		$persona_que_atendio = $_POST['persona_que_atendio'];
		$dias = $_POST['fecha_inscripcion'];
		$sql->bind_param("sss",$num_contrato ,$persona_que_atendio ,$fecha_inscripcion);

*/
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
<link href="style 8.1.css" rel="stylesheet" type="text/css" />
	
<style>
.tbl-qa{border-spacing:0px;border-radius:4px;border:#6ab5b9 1px solid;}
</style>
  <title>Add New Employee</title> 	
</head>
<body>
<?php if(!empty($success_message)) { ?>
<div class="success message"><?php echo $success_message; ?></div>
<?php } if(!empty($error_message)) { ?>
<div class="error message"><?php echo $error_message; ?></div>
<?php } ?>
<div class="button_link"><a href="index.php" >Back to List </a></div>
<form name="frmUser" method="post" action="">
<!--div class="button_link"><a href="index.php"> Back to List </a></!--div>-->
<div id="header">
            <h2 id="titulo">FORMULARIO DE INSCRIPCIONES</h2>
        </div>
        <br>

        <form>
     <!--   <div id="art1">
                <label>DATOS PERSONALES</label><br>
            </div>    
        <br>-->
        <table id="section1">
            <tr>
                <th id="art1" colspan="2"><label>DATOS PERSONALES</label></th>
            </tr>
            <tr>
                <td><label for="nombre">Nombre</label></td>
                <td><input type="text" id="nom" name="nombre" required="obligatorio" placeholder="Haga clic aqui para escribir texto."><br></td>
            </tr>

            <tr>
                <td><label for="apellido">Apellido</label></td>
                <td><input type="text" id="ape" name="apellido" required="obligatorio" placeholder="Haga clic aqui para escribir texto."><br></td>
            </tr>
            <tr>
                <td><label for="direc">Direccion</label> </td>
                <td><input type="text" id="direc" name="direc" required="obligatorio" placeholder="Haga clic aqui para escribir texto."><br></td>
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
                <td><label for="doc">Documento</label> </td>
                <td><input type="text" id="doc" name="doc" required="obligatorio" placeholder="Haga clic aqui para escribir texto."><br></td>
            </tr>
            <tr>
                <td><label for="nac">Fecha de nacimiento</label> </td>
                <td><input type="date" id="nac" name="nac" required="obligatorio" placeholder="yyyy/mm/dd"><br></td>
            </tr>
    </table>


      <!--  <div id="art2">
            <label>CAPACITACION</label>
        </div>
pitopitopitopitopito    
        <br>-->
       
        <table id="section2">
            <tr>
                <th id="art2" colspan="7"><label>CAPACITACION</label></th>
            </tr>
            <tr>
                <td><label for="cur">Curso</label> </td>
                <!--td><input type="text" id="cur" name="cur" required="obligatorio" placeholder="Elija un curso"></!--td-->
                <td>
                    <select id="cur" name="cur" required="obligatorio" >
                        <option selected="selected" value=""></option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                    </select>
                </td>

                <td colspan="5" class="dias"><label for="dia">Dias</label> </td>
            </tr>
            <tr>
                <td><label for="hor">Horario</label></td>
                <!--td><input type="text" class="hor" name="hor" required="obligatorio" placeholder="Elija un horario"><br></td-->
                <td>
                    <select id="hor" name="hor" required="obligatorio" >
                        <option selected="selected" value=""></option>
                        <option value="Matutino">Matutino</option>
                        <option value="Vespertino">Vespertino</option>
                    </select>
                </td>

                <td class="dias">
                    <label for="dia" >Lunes</label> 
                    <input type="checkbox" class="dia" name="diaL" placeholder="SI/NO">
                </td>
                <td class="dias">
                    <label for="dia" >Martes</label> 
                    <input type="checkbox" class="dia" name="diaMa" placeholder="SI/NO">
                </td>
                <td class="dias">
                    <label for="dia" >Miercoles</label> 
                    <input type="checkbox" class="dia" name="diaMi" placeholder="SI/NO">
                </td>
                <td class="dias">
                    <label for="dia" >Jueves</label> 
                    <input type="checkbox" class="dia" name="diaJ" placeholder="SI/NO"><br>
                </td>
                <td class="dias">
                    <label for="dia" >Viernes</label> 
                    <input type="checkbox" class="dia" name="diaV" placeholder="SI/NO"><br>
                </td>
            </tr>
            
        </table>
      

      <!--  <div id="art3">
            <label>PLAN DE PAGO</label><br>
        </div>
-->
        <table id="section3">
            <tr>
                <th id="art3" colspan="3"> <label>PLAN DE PAGO</label></th>
            </tr>
            <tr>
                <td class="plan2"><input type="radio" id="pago" name="pago_moneda" placeholder="SI/NO"></td>
                <td class="plan"><label for="pago">Contado</label> </td>
                <td class="plan"><label for="pago">Moneda</label> </td>
            </tr>
            <tr>
                <td class="plan2"><input type="radio" id="pago" name="pago_tarjeta" placeholder="SI/NO"></td>
                <td class="plan"><label for="pago">Credito</label> </td>
                <td class="plan"><label for="pago">Tarjeta</label></td>
            </tr>
        </table>
        
        
     <!--   <div id="art3">
            <label>DATOS DE LA INSTITUCION</label>
        </div>
        <br>-->

        <table id="section4">
            <tr>
                <th id="art3" colspan="2"><label>DATOS DE LA INSTITUCION</label></th>
            </tr>
            <tr>
                <td><label for="contra"># de contrato</label> </td>
                <td><input type="text" id="contra" name="contra" required="obligatorio" placeholder="Haga clic aqui para escribir texto."><br></td>
            </tr>
            <tr>
                <td><label for="per">Persona que atendio</label> </td>
                <td><input type="text" id="per" name="per" required="obligatorio" placeholder="Haga clic aqui para escribir texto."><br></td>
            </tr>
            <tr>
                <td><label for="ins">Fecha de inscripcion</label> </td>
                <td><input type="date" id="ins" name="ins" required="obligatorio" placeholder="yyyy/mm/dd"><br></td>
            </tr>
        </table>


        <div class="boton">
            <input type="submit" name="submit" value="Submit" class="demo-form-submit">
            </div>
            </form> 
</form>
</body>
</html>