<?PHP
require('../Model/Conexion.php');
require('Constans.php');

if(!isset($_SESSION)){
    session_start();
}

$usuario = $_POST['usuarioLogin'];
$password = $_POST['passwordLogin'];

$con = new Conexion();

$allUsuarios = $con->getAllUserData();
$searchUser = $con->getMenuMain();

if(isset($_POST['update_data_factura'])){
    $userioLogin = $_POST['usuarioLogin'];
    $passwordLogin = $_POST['passwordLogin'];
    $iddatos = $_POST['iddatos'];
    $propietario = $_POST['propietario'];
    $razon = $_POST['razon'];
    $direccion = $_POST['direccion'];
    $nro = $_POST['nro'];
    $telefono = $_POST['telefono'];
    $mensajeName = $_POST['mensaje'];

    // var_dump($mensaje);
    // exit();


    $mensaje = "Se actualizo los datos de la factura correctamente !!";
    $alerta = "alert alert-info";

    $updateMensaje = $con->updateMensajeAlert($mensaje, $alerta);

    $updateDatosFacturas = $con->updateDataFactura($propietario, $razon, $direccion, $nro, $telefono, $iddatos, $mensajeName );
  
}


header("Location: DatosFactura.php?usuario=$usuario&password=$password");



?>