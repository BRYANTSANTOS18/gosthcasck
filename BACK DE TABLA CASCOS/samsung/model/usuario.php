<?php
class usuario {
    private $id;
    private $correo;
    private $clave;
    private $rol;
    private $idcasco;


public function __constrcut($id,$cor,$cla,$rol,$idcasc){
    $this->id=$id;
    $this->correo=$cor;
    $this->clave=$cla;
    $this->rol=$rol;
    $this->idcasco=$idcasc;
}

public function insertar(){
    return "INSERT INTO usuarios(id, correo, clave, rol,idcasco)values('$this->id','$this->correo','$this->clave','$this->rol','$this->idcasco')";
}
public function eliminar($id){
    return "DELETE  usuarios where id=($id)";
}
public function extraer(){
    return "SELECT * FROM usuarios"
}

};

?>