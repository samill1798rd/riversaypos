<?PHP
require('../Model/Conexion.php');
require('Constans.php');

if(!isset($_SESSION)){
    session_start();
}

$usuario = $_GET['usuario'];
$password = $_GET['password'];

$con = new Conexion();
$searchUser = $con->getUser($usuario,$password);
$allUsuarios = $con->getAllUserData();


foreach($searchUser as $user){
    $idUsuario = $user['id_usu'];
    $tipo = $user['tipo'];
    $login = $user['login'];
    $nombre = $user['nombre'];
    $password = $user['password'];
    $foto = $user['foto'];
}

$colorElegido="#4e4e4e";
$colorDefecto="#0061c2";
$idMenu="7";

$updateMenuColorElegido=$con->updateOpcionElegida($colorElegido,$idMenu);
$updateMenuColorDefecto=$con->updateOpcionDefecto($colorDefecto,$idMenu);

$tipoDeAlerta = $con->getMensajeAlerta();

foreach($tipoDeAlerta as $tipoAlerta){
    $alerta = $tipoAlerta['tipoAlerta'];
    $mensaje = $tipoAlerta['mensaje'];
}

if(!isset($_GET['estado'])){

    $mensaje = "";
    $alerta = "";
    
    $updateMensaje = $con->updateMensajeAlert($mensaje, $alerta);
}

$userLogueado = $nombre;
$imageUser = $foto;
$urlViews = URL_VIEWS;
$userId =  $idUsuario;

$tipoDeMoneda = $con->getTipoMoneda();
foreach ($tipoDeMoneda as $moneda){
    $tipoMonedaElegida =$moneda['tipoMoneda'];
}



$allProducto =$con->getAllProducto();


if($tipo == 'ADMINISTRADOR'){
    $menuMain = $con->getMenuMain();
}
else{
    $menuMain = $con->getMenuMainToVentas();
}

require('../Views/VentasViews.php');

?>