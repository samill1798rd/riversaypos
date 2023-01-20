<!DOCTYPE html>
<html lang="en">
<?php
include('Head.php');
include('LiteralMoney.php');
?>
<body>
<section id="container" class="">
    <header class="header dark-bg">
        <div class="toggle-nav">
            <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i
                    class="icon_menu"></i></div>
        </div>
        <?PHP include("Logo.php") ?>
        <div class="nav search-row" id="top_menu">
            <!--  search form start -->
            <ul class="nav top-menu">
                <li>
                    <form class="navbar-form">
                        <!--                              <input class="form-control" placeholder="Search" type="text">-->
                    </form>
                </li>
            </ul>
            <!--  search form end -->
        </div>
        <?PHP include("DropDown.php"); ?>
    </header>
    <?PHP include("Menu.php") ?>

</section>

<!--sidebar end-->
<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <!--overview start-->
        <div class="row">
            <div class="col-lg-12 ">
                <h3 class="page-header"><i class="fa fa-print"></i> PRINCIPAL</h3>
                <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a
                            href="principal.php?usuario=<?php echo $usuario; ?> &password=<?php echo $password; ?>">Inicio</a>
                    </li>
                    <li>
                        <i class="fa fa-print"></i><a
                            href="#">Vista Previa Facturacion</a>
                    </li>
                    <li>
                        <i class="fa fa-save"></i><a
                                href='RegistrarVenta.php?RegistarVenta="RegistarVenta"&usuario=<?PHP echo $usuario; ?>&password=<?PHP echo $password; ?>&ci=<?PHP echo $ci; ?>&ingreso1=<?PHP echo $totalApagar; ?>&ingreso2=<?PHP echo $efectivo; ?>&resultado=<?PHP echo $cambio; ?>'>
                             Nuevo Pedido </a></a>
                    </li>
                </ol>
            </div>
        </div>

        <table>
            <tr>
                <td width="150" align="center">
                    <a class="btnPrint"
                       href='ConFactura.php?usuario=<?PHP echo $usuario; ?>&password=<?PHP echo $password; ?>&ci=<?PHP echo $ci; ?>&ingreso1=<?PHP echo $totalApagar; ?>&ingreso2=<?PHP echo $efectivo; ?>&resultado=<?PHP echo $cambio; ?>'>
                        <img src="<?php echo $urlViews; ?>/ticket/images/impresora.png" alt="FACTURA"/><br>FACTURA </a>
                </td>

                <td width="150" align="center">
                    <a class="btnPrint"
                       href='SinFactura.php?usuario=<?PHP echo $usuario; ?>&password=<?PHP echo $password; ?>&ci=<?PHP echo $ci; ?>&ingreso1=<?PHP echo $totalApagar; ?>&ingreso2=<?PHP echo $efectivo; ?>&resultado=<?PHP echo $cambio; ?>'>
                        <img src="<?php echo $urlViews; ?>/ticket/images/impresora.png" alt="FACTURA"/><br>SIN FACTURA
                    </a></td>
                <td width="150" align="center"><a
                        href='RegistrarVenta.php?RegistarVenta="RegistarVenta"&usuario=<?PHP echo $usuario; ?>&password=<?PHP echo $password; ?>&ci=<?PHP echo $ci; ?>&ingreso1=<?PHP echo $totalApagar; ?>&ingreso2=<?PHP echo $efectivo; ?>&resultado=<?PHP echo $cambio; ?>'>
                        <img src="<?php echo $urlViews; ?>/ticket/images/factura.png" alt="FACTURA"/><br> NUEVO
                        PEDIDO </a></td>
            </tr>
        </table>
        <br>

        <div class="row">
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-6"></div>
                    <div class="col-md-6">

                        <table align="left" bgcolor="#ffffff" class="breadcrumb">

                            <tbody>
                            <tr>
                                <td colspan="6" align="Center">
                                    <span style="color: #2b2b2b;">
                                    <?PHP
                                    echo '
                                    <span style="font-size: x-large; "> <div style="text-align: center;"> <strong>'.$razon.'</strong>  </div></span>';
                                    echo '<div style="text-align: center;">Dirrecion: '.$direccion.'</div> ';
                                    echo '<div style="text-align: center;">RNC: '.$nro.'</div> ';
                                    echo '<div style="text-align: center;"> Telefono : '.$telefono.'  </div> ';
                                    echo '<div style="text-align: center;">  FACTURA ORIGINAL</div> ';
                                    echo ' -----------------------------------------------------------------------------------';
                                    echo '<br>';
                                    ?>
                                   </span>
                                </td>
                            </tr>

                            <tr>

                                <td colspan="3"><span style="color: #2b2b2b;"><b>NIT : </b></span></td>
                                <td colspan="3"><span style="color: #2b2b2b;"><?PHP echo $nit?></span></td>
                            </tr>
                            <tr>
                                <td colspan="3"><span style="color: #2b2b2b;"><b>N&ordm; FACTURA : </b></span></td>
                                <td colspan="3"><span style="color: #2b2b2b;"><?PHP echo $factura?></span></td>
                            </tr>
                            <tr>
                                <td colspan="3"><span style="color: #2b2b2b;"><b>N&ordm; AUTORIZACION : </b></span></td>
                                <td colspan="3"><span style="color: #2b2b2b;"><?PHP echo $autorizacion?></span></td>
                            </tr>
                            <tr>
                                <td colspan="6" align="center"><span style="color: #2b2b2b;"> Otros servicios de comidas</span></td>
                            </tr>

                            <tr>

                                <td colspan="6" align="center">
                                    <span style="color: #2b2b2b;">    -----------------------------------------------------------------------------------</span>
                                </td>
                            </tr>


                            <tr>

                                <td colspan="6"><span style="color: #2b2b2b;"><b>Fecha de Venta : </b> <?PHP echo $fecha; ?></span></td>
                            </tr>
                            <tr>
                                <td colspan="6"><span style="color: #2b2b2b;"><b>Identificacion : </b> <?PHP echo $ci; ?></span></td>
                            </tr>
                            <tr>
                                <td colspan="6"><span style="color: #2b2b2b;"><b>Se&ntilde;or(es): </b> <?PHP echo $nombreCliente; ?></span></td>
                            </tr>

                            <tr>

                                <td colspan="6" align="center">
                                    <span style="color: #2b2b2b;">    -----------------------------------------------------------------------------------</span>
                                </td>
                            </tr>
                            <tr>
                                <td width="10"></td>
                                <td width="40"><span style="color: #2b2b2b;"><b>Cant.</b></span></td>
                                <td width="100"><span style="color: #2b2b2b;"><b>Descripcion</b></span></td>
                                <td width="70"><span style="color: #2b2b2b;"><b>Precio</b></span></td>
                                <td width="70"><span style="color: #2b2b2b;"><b>Total</b></span></td>
                                <td width="70"><span style="color: #2b2b2b;"><b>Tipo</b></span></td>
                            </tr>
                            <?PHP
                            for ($i=0; $i<$pedido; $i++){
                                echo '<tr>';
                                $detallePedido = mysqli_fetch_array($pedidoTotalPreventa);
                                echo '<td>'.'</td>';
                                echo '<td width="40"><span style="color: #2b2b2b;">'.$detallePedido['cantidad'].'</span></td>';
                                echo '<td width="100"><span style="color: #2b2b2b;">'.$detallePedido['producto'].'</span></td>';
                                echo '<td width="70"><span style="color: #2b2b2b;">'.$detallePedido['precio'].'</span></td>';
                                echo '<td width="70"><span style="color: #2b2b2b;">'.$detallePedido['precio']*$detallePedido['cantidad'].'</span></td>';
                                echo '<td width="70"><span style="color: #2b2b2b;">'.$detallePedido['tipo'].'</span></td>';
                                echo '</tr>';
                              }


                            ?>

                            <tr>

                                <td colspan="6" align="center">
                                    <span style="color: #2b2b2b;">    -----------------------------------------------------------------------------------</span>
                                </td>
                            </tr>

                            <tr>

                                <td colspan="6"><span style="color: #2b2b2b;"><b>Total a Pagar : <?PHP echo $tipoMoneda; ?>  </b> <?PHP echo $totalAPagar; ?></span></td>
                            </tr>
                            <tr>
                                <td colspan="6"><span style="color: #2b2b2b;"><b>Efectivo : <?PHP echo $tipoMoneda; ?> </b> <?PHP echo $efectivo; ?></span></td>
                            </tr>
                            <tr>
                                <td colspan="6"><span style="color: #2b2b2b;"><b>Cambio : <?PHP echo $tipoMoneda; ?> </b> <?PHP echo $cambio; ?></span></td>
                            </tr>
                            <tr>
                                <td colspan="6">&nbsp;<span style="color: #2b2b2b;"> <b>Son : </b>
                                <?PHP
                                 $literalMoney = new  EnLetras();
                                  $shoLiteralMoney = strtoupper($literalMoney -> valorEnletras($totalAPagar,$contextMoneda));
                                //   echo "<b>".$shoLiteralMoney."</b>";
                                  echo "<b>Cien Pesos con 00/100</b>";
                                  ?>
                                      </span>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="6"><span style="color: #2b2b2b;"><b>Codigo de control : <?PHP echo $getCodigoControl; ?></b></span></td>
                            </tr>

                            <tr>
                                <td colspan="6"><span style="color: #2b2b2b;"><b>Fecha Limite de Emision :  <?PHP echo $fechaLimiteEmision; ?></b></span></td>
                            </tr>


                            <tr>
                                <td colspan="6" align="center"><b>
                                    <?PHP  include ("Qr.php"); ?>
                                    </b></td>
                            </tr>

                            <tr>

                                <td colspan="6" align="center">
                                    <span style="color: #2b2b2b;">    -----------------------------------------------------------------------------------</span>
                                </td>
                            </tr>


                            <tr>
                                <td colspan="6" align="center"><span style="color: #2b2b2b;"> " Esta factura conttribuye al desarrollo del pais el uso
                                    ilicito de esta sera sancionado de acuerdo a ley "</span>
                                </td>
                            </tr>

                            <tr>

                                <td colspan="6" align="center">
                                    <span style="color: #2b2b2b;">    -----------------------------------------------------------------------------------</span>
                                </td>
                            </tr>

                            <tr>
                                <td colspan="4">
                                  <span style="color: #2b2b2b;">  Atendido por : <strong><?PHP echo $userLogueado;?> </strong></span>
                                </td>

                                <td colspan="2">
                                    <span style="color: #2b2b2b;">  FICHA NRO :<strong> <?PHP echo  $ficha; ?> </strong> </span>
                                </td>
                            </tr>
                            </tbody>
                        </table>


                    </div>


                </div>
            </div>
        </div>
        <div class="col-md-4"></div>


    </section>
</section>

<?PHP include("LibraryJs.php"); ?>


</body>
</html>