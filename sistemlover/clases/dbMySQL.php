<?php

require_once("db.php");

class dbMySQL extends db {
  private $conn;

  public function __construct() {
    $dsn = 'mysql:host=192.168.0.194;dbname=LOVERDB;
    charset=utf8mb4;port:3306';
    $db_user = 'root';
    $db_pass = '1111';

    try {
      $opciones = array( PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION );
      $this->conn = new PDO($dsn, $db_user, $db_pass, $opciones);
    }
    catch( PDOException $Exception ) {
     echo $Exception->getMessage();
     // header('Location: ../php/create_db.php'); exit;
    }

  }

// -------------------------------FUNCIONES UTILIZADAS POR IMAGE-----------------------------------------------------

    public function traerTodos() {
    		$query = $this->conn->prepare("Select * from image");
    		$query->execute();

    		$arrayDeArrays = $query->fetchAll();

        $arrayDeObjetos = [];

        // foreach ($arrayDeArrays as $resultado) {
        //   $arrayDeObjetos[] = new Usuario($resultado["email"], $resultado["password"], $resultado["edad"], $resultado["username"], $resultado["pais"], $resultado["id"]);
        // }

        return $arrayDeObjetos;
    	}

?>
