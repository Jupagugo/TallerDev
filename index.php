<?php
//Lamado al Controlador
require_once("controller/docenteController.php");
$controller = new docenteController;
//Condicion para establecer el metodo
if(isset($_GET['m'])):
$metodo = $_GET['m'];
if(method_exists( $controller,$metodo)):
$controller->{$metodo}();
endif;
else:
$controller->index(); 
endif;
?>
