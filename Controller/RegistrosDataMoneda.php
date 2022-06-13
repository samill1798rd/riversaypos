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

if(isset($_POST['update_data_moneda'])){
    $userioLogin = $_POST['usuarioLogin'];
    $passwordLogin = $_POST['passwordLogin'];
    $idMoneda = $_POST['idMoneda'];
    $Moneda = $_POST['moneda'];

    if($Moneda == "1"){
        $pais = "Republica Dominicana";
        $tipoMoneda = "$";
        $contexto = "pesos dominicanos";

    }

    if($Moneda == "2"){
        $pais = "Estados Unidos";
        $tipoMoneda = "$";
        $contexto = "dólar estadounidense";
    }

    $mensaje = "Se actualizo los datos de la moneda correctamente !!";
    $alerta = "alert alert-info";

    $updateMensaje = $con->updateMensajeAlert($mensaje, $alerta);
    $con->updateDataMoneda($pais, $tipoMoneda, $contexto, $idMoneda);
  
}

header("Location: Moneda.php?usuario=$usuarioLogin&password=$passwordLogin&estado='Activo'");

?>