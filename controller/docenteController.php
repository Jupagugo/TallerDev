<?php
require_once("models/docente.php");
class docenteController{
private $model;
function __construct(){
$this->model=new Modelo();
}
// MOSTRAR DOCENTES
function index(){
 $dato= $this->model->mostrar("docentes","1");
require_once("views/index.php");
}
// Método que llama la vista views/insertar.php
function nuevo(){
    require_once("views/insertar.php"); 
    }
    //Método que llama al modelo para insertar datos
    function guardar(){
        $nombre = $_REQUEST['nombre'];
        $apellido = $_REQUEST['apellido'];
        $documento_identidad = $_REQUEST['documento_identidad'];
        $genero = $_REQUEST['genero'];
        $telefono = $_REQUEST['telefono'];
        $direccion = $_REQUEST['direccion'];   
        $email = $_REQUEST['email'];
   
        $data = "'".$nombre."','".$apellido."','".$documento_identidad."','".
        $genero."','".$telefono."','".$direccion."','".
        $email."'";
        $dato = $this->model->insertar("docentes",$data);
     header("location: index.php");
    }
    function editar(){
        $id=$_REQUEST['id'];
        $dato=$this->model->mostrar("docentes","id=".$id); 
        require_once("views/editar.php");
        }
        function update(){
        $id = $_REQUEST['id'];
        $nombre = $_REQUEST['nombre'];
        $apellido = $_REQUEST['apellido'];
        $documento_identidad = $_REQUEST['documento_identidad'];
        $genero = $_REQUEST['genero'];
        $telefono = $_REQUEST['telefono'];
        $direccion = $_REQUEST['direccion'];   
        $email = $_REQUEST['email'];
        $data = "nombre='".$nombre."',apellido='".$apellido."',documento_identidad='".$documento_identidad."',genero='".$genero."',telefono='".$telefono."',direccion='".$direccion."',email='".$email."'";
        $condicion = "id=".$id;
        $dato = $this->model->actualizar("docentes",$data,$condicion);
        header("location: index.php");
        }
        // ELIMINAR
function eliminar(){ 
    $id = $_REQUEST['id']; 
   $condicion = "id=".$id;
   $dato = $this->model->eliminar("docentes",$condicion);
   header("location: index.php");
   }
   
        
}
?>