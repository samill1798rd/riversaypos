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
$idMenu="1";

$updateMenuColorElegido=$con->updateOpcionElegida($colorElegido,$idMenu);
$updateMenuColorDefecto=$con->updateOpcionDefecto($colorDefecto,$idMenu);


if(empty($searchUser)){
    echo '
        <script language="javascript">
            alert("Usuario o password incorrectos, por favor intenta de nuevo")
            self.location = "../index.php"      
        </script>
    ';
}

else if($tipo == 'ADMINISTRADOR'){

    $urlViews = URL_VIEWS;
    $userLogueado = $nombre;
    $imageUser = $foto;

    $fechaInicial = date('2024-01-01');
    // var_dump($fechaInicial);
    // exit();
    $fechaInicialVentas =  $fechaInicial.' '. '06:00:00';
    $fechaFinal = date('Y-m-d');

    date_default_timezone_set("America/Caracas" ) ;
    $tiempo = getdate(time());
    $fecha = date_create($fechaFinal);
    date_add($fecha, date_interval_create_from_date_string('1 days'));
    $fechaVentasU = date_format($fecha, 'Y-m-d');

    $fechaFinalVentas = $fechaVentasU.' '. '04:00:00';


    $menuMain = $con->getMenuMain();
    $totalVentas =$con->getDataVentasTotal($fechaInicialVentas, $fechaFinalVentas);

    require('../Views/Wellcome.php');
}

else if($tipo == 'VENTAS'){

    $urlViews = URL_VIEWS;
    $userLogueado = $nombre;
    $imageUser = $foto;
    $menuMain = $con->getMenuMainToVentas();


    require('../Views/WellcomeVentas.php');
}


?>