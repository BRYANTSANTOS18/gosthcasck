<?php 
require("..\model\conexion.php");
require("\model\usuario.php");
require("\model\cascos.php");

function NuevoUsuario($id,$cor,$cla,$rol,$idcasc){
    $con= new conexion();
    $usuario= new usuario ($id,$cor,$cla,$rol,$idcas);
    $con->conectar();
    $con->envio($usuario->insertar());
}

function ExtraerUsuario(){
    $con=new conexion();
    $usuario= new usuario('','','','','');
    $con->conectar();
    $tabla=$con->conectar($usuario->Extraer());
    $datos='';
    $registros=array();
    while($fila=mysqli_fecth_array($tabla)){
        extract($fila);
        $datos=array("id"=>$fila['id'],
        "correo"=>$fila['correo'],
        "clave"=>$fila['clave'],
        "rol"=>$fila['rol'],
        "idcasco"=>$fila['idcasco']
    );
    array_push($resgitros, $fila);
    }
    return $registros;
}

?>