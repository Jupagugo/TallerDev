<?php
class Modelo{
private $Modelo;
private $db;
public function __construct(){
$this->Modelo = array();
 $this->docentes = array();
//Conexion a La BD
$this->db=new PDO('mysql:host=localhost;dbname=crud',"root","");
}
//Consultar datos en la BD
public function mostrar($tabla,$condicion){
    $consul="select * from ".$tabla." where ".$condicion.";";
    $resu=$this->db->query($consul);
    while($filas = $resu->FETCHALL(PDO::FETCH_ASSOC)) {
    $this->docentes[]=$filas;
    }
    return $this->docentes;
    } 
    public function insertar($tabla, $data){
        $consulta="insert into ".$tabla." values(null,". $data .")";
        echo $consulta;
        $resultado=$this->db->query($consulta);
        if ($resultado) {
        return true;
        }else {
        return false;
        }
        }
        public function actualizar($tabla, $data, $condicion){ 
            $consulta="update ".$tabla." set ". $data ." where ".$condicion;
            $resultado=$this->db->query($consulta);
            if ($resultado) {
            return true;
            }else {
            return false;
            }
            }
            public function eliminar($tabla, $condicion){
                $eli="delete from ".$tabla." where ".$condicion;
                $res=$this->db->query($eli);
                if ($res) {
                return true; 
                }else {
                return false;
                }
                }
     }
    ?>
    