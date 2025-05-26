<?php

$mail='';
$msg_mail='';


 if(isset($_POST['btn_enviar'])) {
    
    if(!isset($_POST['mail'])){
        $msg_mail="Error en el campo CORREO";
    }else{
        $mail=trim($_POST['mail']);
        
        if(empty($mail)){
            $msg_mail="Por favor, ingrese un coreo";
        }else{
            if(strlen($mail)<4 || strlen($mail)>11){
                $msg_mail="POr favor, ingrese un correo entre 4 y 10 caracteres";
            }
        }
        
    }
    
 }

    
		
		
		









?>


<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Mensaje de error</title>
	<link rel="stylesheet" href="./css/reset.css">
	<link rel="stylesheet" href="./css/grid.css">
	<link rel="stylesheet" href="./css/style.css">
</head>
<body>
	<main class="row">
		<section class="col_12 flex flex-j-c flex-a-c">
			<form action="" class="form_01 col_3 flex flex-j-c flex-flow-c flex-a-c" method="post">
				<input type="text" name="mail" class="col_10" placeholder="Correo" value="<?=$mail?>">
				<div class="form_error"><?=$msg_mail?></div>

				<input type="text" name="nm" class="col_10" placeholder="Nombre y apellido" value="<?=$name?>">
				<div class="form_error"><?=$msg_name?></div>
 
                <div class="col_100"></div>

				<label for="fecha_" class="col_10">Fecha:</label>
				<input type="date" name="fecha" class="col_10" placeholder="Fecha" value="<?=$fecha?>">
                <div class="form_error"><?=$msg_fecha?></div>

				<button class="col_6 send_btn" name="btn_enviar" type="submit">Ingresar</button>

			</form>
		</section>
	</main>
</body>
</html>