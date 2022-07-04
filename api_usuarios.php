<?php
include_once 'usuarios.php';

class api_usuarios{
    function getAll(){
        $usuarios = new usuarios();
        $usuarios = array();
        $usuarios['items']=array();
        
        $res = $usuarios->obtenerUsuarios();

        if($res->rowCount()){
            while ($row = $res-fetch(PDO::FETCH_ASSC)) {
                $item=array();
                'id_usuario'=>$row ['id_usuario'],
                'nombre'=>$row['nombre'],
                'apellido_p'=>$row ['apellido_p'],
                'apellido_m'=>$row['apellido_m'],
                'telefono'=>$row ['telefono'],
                'email'=>$row['email']
            }
        }

    }

?>