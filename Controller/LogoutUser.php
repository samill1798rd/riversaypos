<?php
require ('../Model/Conexion.php');
require ('Constans.php');

if (!isset($_SESSION)) {
    session_start();
}

if ($_SESSION['nombres'])
{
    session_destroy();
    echo '<script language = javascript>
	alert("su sesion ha terminado correctamente ")
	self.location = "../index.php"
	</script>';}
else
{
    echo '<script language = javascript>
	alert("su sesion no ha terminado correctamente 2")
	self.location = "../index.php"
	</script>';}

?>