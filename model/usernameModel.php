<?php
    class usernameModel{
        private $PDO;
        public function __construct()
        {
            require_once("C://xampp/htdocs/proyecto/config/db.php");
            $con = new db();
            $this->PDO = $con->conexion();
        }
        public function insertar($nombre,$apellido,$direccion,$ciudad,$pais,$gmail){
            $stament = $this->PDO->prepare("INSERT INTO tbl_cliente VALUES(null,:nombre,:apellido,:direccion,:ciudad,:pais,:gmail,null)");
            $stament->bindParam(":nombre",$nombre);
            $stament->bindParam(":apellido",$apellido);
            $stament->bindParam(":direccion",$direccion);
            $stament->bindParam(":ciudad",$ciudad);
            $stament->bindParam(":pais",$pais);
            $stament->bindParam(":gmail",$gmail);
            return ($stament->execute()) ? $this->PDO->lastInsertId() : false ;
        }
        public function show($id){
            $stament = $this->PDO->prepare("SELECT * FROM tbl_cliente where id = :id limit 1");
            $stament->bindParam(":id",$id);
            return ($stament->execute()) ? $stament->fetch() : false ;
        }
        public function index(){
            $stament = $this->PDO->prepare("SELECT * FROM tbl_cliente");
            return ($stament->execute()) ? $stament->fetchAll() : false;
        }
        public function update($id , $nombre, $apellido, $direccion, $ciudad, $pais, $gmail, $fecha){
            $stament = $this->PDO->prepare("UPDATE tbl_cliente SET nombre = :nombre, apellido = :apellido, direccion = :direccion, 
            ciudad = :ciudad, pais = :pais, gmail = :gmail, fecha = :fecha  
            WHERE id = :id");
            
            $stament->bindParam(":id", $id);
            $stament->bindParam(":nombre", $nombre);
            $stament->bindParam(":apellido", $apellido);
            $stament->bindParam(":direccion", $direccion);
            $stament->bindParam(":ciudad", $ciudad);
            $stament->bindParam(":pais", $pais);
            $stament->bindParam(":gmail", $gmail);
            $stament->bindParam(":fecha", $fecha);

            return ($stament->execute()) ? $id : false;
        }
        public function delete($id){
            $stament = $this->PDO->prepare("DELETE FROM tbl_cliente WHERE id = :id");
            $stament->bindParam(":id",$id);
            return ($stament->execute()) ? true : false;
        }
    }

?>