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
    $menuMain = $con->getMenuMain();

    require('../Views/Wellcome.php');
}

else if($tipo == 'VENTAS'){

    $urlViews = URL_VIEWS;
    $userLogueado = $nombre;
    $imageUser = $foto;
    $menuMain = $con->getMenuMainVentas();

    require('../Views/WellcomeVentas.php');
}


?>