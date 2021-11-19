<?php 

include("con_db.php");

if (isset($_POST['Pizzas'])) {
    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['apellido']) >= 1 && strlen($_POST['Numero']) >= 1 && strlen($_POST['Direccion']) >= 1 && strlen($_POST['pizza']) >= 1) {
	    $name = trim($_POST['nombre']);
	    $price = trim($_POST['apellido']);
	    $supplier = trim($_POST["Numero"]);
		$product = trim($_POST["Direccion"]);
		$serie = trim($_POST["pizza"]);


	    $consulta = "INSERT INTO Pizzas(nombre, apellido, Numero, Direccion, pizza) VALUES ('$name','$price','$supplier','$product','$serie')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Felicidades tupizza esta en camino!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha algo a salido mal, intente de nuevo!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>