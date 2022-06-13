<?php



class Conexion{

    private $user;
    private $password;
    private $server;
    private $database;
    private $con;

    public function __construct(){
        $user = 'root';
        $password = '';
        $server = 'localhost';
        $database = 'riversaypos';
        $this->con = new mysqli($server,$user,$password,$database);
    }

    public function getUser($usuario, $password){

        $query = $this->con->query("SELECT * FROM usuarios WHERE login='" . $usuario . "'AND password='" . $password . "'");

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

    public function getRegisterNewUser($nombre,$tipo,$usuario,$password,$imagenUsuario){

        $query = $this->con->query("INSERT INTO usuarios (`login`,`tipo`,`nombre`,`password`,`foto`) 
        VALUES('$usuario','$tipo','$nombre','$password','$imagenUsuario')");
        
        return $query;
    }
    
    public function deleteUsuario($idUsuario){

        $query = $this->con->query("DELETE FROM usuarios WHERE id_usu = '$idUsuario'");

        return $query;
    }

    // public function updateUsuario($login, $tipo, $nombre, $password, $foto, $idUsuario)
    // {
        
    //     $query = $this->con->query("UPDATE `usuarios` 
    //                                       SET `login` = '$login', 
    //                                            `tipo` = '$tipo', 
    //                                             `nombre` = '$nombre',
    //                                              `password` = '$password', 
    //                                              `foto` = '$foto' WHERE `usuarios`.`id_usu` = $idUsuario");

    //     return $query;
    // }


    
    public function updateUsuario($login, $tipo, $nombre, $password, $foto, $idUsuario)
    {

        $query = $this->con->query("UPDATE `usuarios` 
                                          SET `login` = '$login', 
                                               `tipo` = '$tipo', 
                                                `nombre` = '$nombre',
                                                 `password` = '$password', 
                                                 `foto` = '$foto' WHERE `usuarios`.`id_usu` = $idUsuario");

        return $query;
    }


    public function getMensajeAlerta(){

        $query = $this->con->query("SELECT * FROM ALERTA");

        $retorno = [];

        $i = 0;

        while ($fila = $query->fetch_assoc()){
            $retorno[$i] = $fila;
            $i++;
        }

        return $retorno;
    }

    public function updateMensajeAlert($mensaje, $alerta)
    {
        $query = $this->con->query("UPDATE `alerta` SET `tipoAlerta` = '$alerta',
                                                `mensaje` = '$mensaje'  WHERE `alerta`.`alertaId` = 1");
        return $query;
    }

    public function getDatosFactura()
    {
        $query = $this->con->query("SELECT * FROM datos");

        return $query;
    }

    public function updateDataFactura($propietario, $razon, $direccion, $nro, $telefono, $iddatos)
    {
        $query = $this->con->query("UPDATE `datos` SET `propietario` = '$propietario', 
                                                       `razon` = '$razon',
                                                       `direccion` = '$direccion',
                                                       `nro` = '$nro', 
                                                       `telefono` = '$telefono' 
                                                        WHERE `datos`.`iddatos` = $iddatos");

        return $query;

    }

    public function getMoneda()
    {
        $query = $this->con->query("SELECT * FROM moneda");

        return $query;
    }


    public function updateDataMoneda($pais, $tipoMoneda, $contexto, $idMoneda)
    {
        $query = $this->con->query("UPDATE `moneda` SET `pais` = '$pais', 
                                                        `tipoMoneda` = '$tipoMoneda', 
                                                        `contexto` = '$contexto' 
                                                        WHERE `moneda`.`idMoneda` = $idMoneda");

        return $query;
    }

    public function getIdioma()
    {
        $query = $this->con->query("SELECT * FROM `idioma`");

        return $query;
    }

    public function updateDataIdioma($pais, $idioma, $idIdioma)
    {
        $query = $this->con->query(" UPDATE `idioma` SET `pais` = '$pais',
                                                         `idioma` = '$idioma' 
                                                         WHERE `idioma`.`idIdioma` = $idIdioma");

        return $query;
    }



   

   

    

}

?>