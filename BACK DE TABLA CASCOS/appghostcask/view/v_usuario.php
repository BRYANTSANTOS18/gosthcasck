<?php

require_once("..\controller\c_usuario");


header("HHTP//1.1 200");
header("Content-Type:application/json; charset:UFT-8");

if($_SERVER['REQUEST_METHOD']=="POST"){
    NuevoUsuario($_POST['id'],$_POST['cor'],$_POST['cla'],$_POST['rol'],$_POST['idcacs']);
    
}
if($_SERVER['REQUEST_METHOD']=="GET"){
    echo json_encode(ExtraerUsuario());
}