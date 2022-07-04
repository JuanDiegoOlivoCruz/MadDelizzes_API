<?php
class Database
{
    protected $connection = null;
 
    public function __construct()
    {
        try {
            $this->connection = new mysqli(DB_HOST, DB_NOMBREUSUARIO, DB_CONTRASENA, DB_BASEDEDATOS_NOMBRE);
         
            if ( mysqli_connect_errno()) {
                throw new Exception("No se pudo conectar a la base de datos.");   
            }
        } catch (Exception $e) {
            throw new Exception($e->getMessage()); 


        }
    }

}
?>