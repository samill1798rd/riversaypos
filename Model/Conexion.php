<?php



class Conexion{

    private $user;
    private $password;
    private $server;
    private $database;
    private $con;

    public function __construct(){
        $user = 'root';
        $password = 'Carlos1798';
        $server = 'localhost:3306';
        $database = 'riversaypos';
        $this->con = new mysqli($server,$user,$password,$database);
    }

    public function getUser($usuario, $password){

        $query = $this->con->query("SELECT * FROM usuarios WHERE login='" . $usuario . "'AND passwordC='" . $password . "'");

        $retorno = [];

        $i = 0;

        while ($fila = $query->fetch_assoc()){
            $retorno[$i] = $fila;
            $i++;
        }

        return $retorno;
    }

    public function getMenuMain(){

        $query = $this->con->query("SELECT * FROM menu");

        $retorno = [];

        $i = 0;

        while ($fila = $query->fetch_assoc()){
            $retorno[$i] = $fila;
            $i++;
        }

        return $retorno;
    }

    public function getMenuMainVentas(){

        $query = $this->con->query("SELECT * FROM menu WHERE acceso = 'A'");

        $retorno = [];

        $i = 0;

        while ($fila = $query->fetch_assoc()){
            $retorno[$i] = $fila;
            $i++;
        }

        return $retorno;
    }

    public function getAllUserData(){

        $query = $this->con->query("SELECT * FROM usuarios");

        return $query;
    }
}

?>