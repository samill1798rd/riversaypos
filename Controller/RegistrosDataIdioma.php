<?PHP
require('../Model/Conexion.php');
require('Constans.php');

if(!isset($_SESSION)){
    session_start();
}

$usuarioLogin = $_POST['usuarioLogin'];
$passwordLogin = $_POST['passwordLogin'];

$con = new Conexion();

$allUsuarios = $con->getAllUserData();
$searchUser = $con->getMenuMain();

if(isset($_POST['update_data_idioma'])){
    $userioLogin = $_POST['usuarioLogin'];
    $passwordLogin = $_POST['passwordLogin'];
    $idIdioma = $_POST['idIdioma'];
    $idioma = $_POST['idioma'];

    if($idioma == "1"){
        $lengua = "Espaniol";
        $pais = "Republica Dominicana";
    }

    // if($idioma == "2"){
    //     $lengua = "Ingles";
    //     $pais = "EE.UU";
    // }

    $mensaje = "Se actualizo los datos del Idioma correctamente !!";
    $alerta = "alert alert-info";

    $updateMensaje = $con->updateMensajeAlert($mensaje, $alerta);
    $updateDataIdioma = $con->updateDataIdioma($pais, $lengua, $idIdioma);
  
}

header("Location: Languaje.php?usuario=$usuarioLogin&password=$passwordLogin&estado='Activo'");

?>