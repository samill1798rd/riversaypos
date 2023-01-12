<!DOCTYPE html>
<html lang="en">
<?php
include('Head.php');
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
            <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa-laptop"></i> PRINCIPAL</h3>
                <div class="<?PHP echo $alerta; ?>" role="alert">
                    <strong><?PHP echo $mensaje; ?></strong>
                </div>

                <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="principal.php?usuario=<?php echo $usuario;?> &password=<?php echo $password;?>">Inicio</a></li>
                </ol>
            </div>
        </div>


        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <section class="panel">
                        <header class="panel-heading"> Lista de proveedores del sistema</header>
                        <header class="panel-heading">
                            <div class="panel-body">
                                <div align="right">
                                    <button href="#addProveedor" title="" data-placement="left" data-toggle="modal"
                                            class="btn btn-primary tooltips" type="button"
                                            data-original-title="Nuevo Proveedor">
                                        <span class="fa fa-plus"> </span>
                                        AGREGAR NUEVO PROVEEDOR
                                    </button>
                                </div>


                                <div id="addProveedor" class="modal fade" tabindex="-1" role="dialog"
                                     aria-labelledby="myModalLabel" aria-hidden="true">
                                    <form class="form-validate form-horizontal" name="form2" action="RegistrosProveedor.php" method="post">
                                        <input name="usuarioLogin" value="<?php echo $usuario;?>" type="hidden" >
                                        <input name="passwordLogin" value="<?php echo $password;?>" type="hidden" >
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-hidden="true">x
                                                    </button>
                                                    <h3 id="myModalLabel" align="center">Registrar Nuevo  Proveedor</h3>
                                                </div>
                                                <div class="modal-body">
                                                    <label for="proveedor"
                                                           class="control-label col-lg-2">Proveedor:</label>
                                                    <div class="col-lg-10">
                                                        <input class="form-control input-lg m-bot15" id="proveedor"  name="proveedor" minlength="5" type="text" required/>
                                                    </div>
                                                    <br><br>
                                                    <label for="RNC"
                                                           class="control-label col-lg-2">RNC :</label>
                                                    <div class="col-lg-10">
                                                        <input class="form-control input-lg m-bot15" id="rnc"  name="rnc" minlength="5" type="text" required/>
                                                    </div>
                                                    <br><br>
                                                    <label for="responsable"
                                                           class="control-label col-lg-2">Responsable:</label>
                                                    <div class="col-lg-10">
                                                        <input class="form-control input-lg m-bot15" id="responsable" name="responsable" minlength="5" type="text" required/>
                                                    </div>
                                                    <br><br>
                                                    <label for="responsable" class="control-label col-lg-2">Direccion:</label>
                                                    <div class="col-lg-10">
                                                        <input class="form-control input-lg m-bot15" id="direccion"  name="direccion" minlength="5" type="text" required/>
                                                    </div>
                                                    <br><br>
                                                    <label for="responsable" class="control-label col-lg-2">Telefono:</label>
                                                    <div class="col-lg-10">
                                                        <input class="form-control input-lg m-bot15" id="telefono"  name="telefono" minlength="5" type="text" required/>
                                                    </div>
                                                    <br><br>
                                                    <label for="responsable" class="control-label col-lg-2">Fecha de Registro:</label>
                                                    <div class="col-lg-10">
                                                        <input class="form-control input-lg m-bot15" type="date" readonly name="fechaRegistro" autocomplete="off" required value="<?php echo date('Y-m-d'); ?>"></div>
                                                    <br><br><br>
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn btn-danger" data-dismiss="modal"  aria-hidden="true"><strong>Cerrar</strong></button>

                                                    <button name="new_proveedor" type="submit" class="btn btn-primary"><strong>Registrar</strong></button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                </div>
                        </header>

                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                    <tr>
                                        <th><i class="icon_images"></i> PROVEEDOR</th>
                                        <th><i class="icon_images"></i> RNC</th>
                                        <th><i class="icon_contacts"></i> RESPONSABLE</th>
                                        <th><i class="icon_folder"></i> DIRECCION</th>
                                        <th><i class="icon_contacts_alt"></i> TELEFONO</th>
                                        <th><i class="icon_key"></i> FECHA DE REGISTRO</th>
                                        <th><i class="icon_cog"></i> ACCIONES</th>
                                    </tr>
                                    </thead>
                                    <?PHP
                                    while ($proveedor = mysqli_fetch_array($allProveedor)) {
                                    ?>

                                    <tr>

                                        <td> <?PHP echo $proveedor['proveedor']; ?></td>
                                        <td> <?PHP echo $proveedor['RNC']; ?></td>
                                        <td> <?PHP echo $proveedor['responsable']; ?></td>
                                        <td> <?PHP echo $proveedor['direccion']; ?></td>
                                        <td> <?PHP echo $proveedor['telefono']; ?></td>
                                        <td> <?PHP echo $proveedor['fechaRegistro']; ?></td>
                                        <td>
                                            <a href="#a<?php echo $proveedor[0]; ?>" role="button"
                                               class="btn btn-success" data-toggle="modal">
                                                <i class="icon_check_alt2"></i> </a>
                                            <a href="RegistrosProveedor.php?idborrar=<?PHP echo $proveedor[0]; ?>&usuarioLogin=<?PHP echo $usuario; ?>&passwordLogin=<?PHP echo $password; ?>"
                                               role="button" class="btn btn-danger"> <i class="icon_close_alt2"></i>
                                            </a>
                                        </td>
                                    </tr>

                                    <div id="a<?php echo $proveedor[0]; ?>" class="modal fade" tabindex="-1"
                                         role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <form class="form-validate form-horizontal" name="form2"
                                              action="RegistrosProveedor.php" method="post">
                                            <input name="usuarioLogin" value="<?php echo $usuario; ?>" type="hidden">
                                            <input name="passwordLogin" value="<?php echo $password; ?>" type="hidden">
                                            <input type="hidden" name="idproveedor"
                                                   value="<?php echo $proveedor['idproveedor']; ?>">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"
                                                                aria-hidden="true">×
                                                        </button>
                                                        <h3 id="myModalLabel" align="center">Cambiar Informacion del
                                                            Proveedor</h3>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="form-group ">
                                                            <label for="proveedor" class="control-label col-lg-2">Proveedor:</label>
                                                            <div class="col-lg-10">
                                                                <input class="form-control input-lg m-bot15" type="text"
                                                                       name="proveedor"
                                                                       value="<?php echo $proveedor['proveedor']; ?>">
                                                                <input type="hidden" name="idproveedor"
                                                                       value="<?php echo $proveedor['idproveedor']; ?>">
                                                            </div>
                                                        </div>
                                                        <div class="form-group ">
                                                            <label for="direccion" class="control-label col-lg-2">Responsable:</label>
                                                            <div class="col-lg-10">
                                                                <input class="form-control input-lg m-bot15" type="text"
                                                                       name="responsable"
                                                                       value="<?php echo $proveedor['responsable']; ?>">
                                                            </div>
                                                        </div>

                                                        <div class="form-group ">
                                                            <label for="rnc" class="control-label col-lg-2">RNC:</label>
                                                            <div class="col-lg-10">
                                                                <input class="form-control input-lg m-bot15" type="text"
                                                                       name="rnc"
                                                                       value="<?php echo $proveedor['RNC']; ?>">
                                                            </div>
                                                        </div>

                                                        <div class="form-group ">
                                                            <label for="direccion" class="control-label col-lg-2">Direccion:</label>
                                                            <div class="col-lg-10">
                                                                <input class="form-control input-lg m-bot15" type="text"
                                                                       name="direccion"
                                                                       value="<?php echo $proveedor['direccion']; ?>">
                                                            </div>
                                                        </div>
                                                        <div class="form-group ">
                                                            <label for="telefono"
                                                                   class="control-label col-lg-2">Telefonoo:</label>
                                                            <div class="col-lg-10">
                                                                <input class="form-control input-lg m-bot15" type="text"
                                                                       name="telefono"
                                                                       value="<?php echo $proveedor['telefono']; ?>">
                                                            </div>
                                                        </div>

                                                        <div class="form-group ">
                                                            <label for="direccion" class="control-label col-lg-2">Fecho
                                                                de Registro:</label>
                                                            <div class="col-lg-10">
                                                                <input class="form-control input-lg m-bot15" type="date"
                                                                       readonly name="fechaRegistro" autocomplete="off"
                                                                       required value="<?php echo date('Y-m-d'); ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button class="btn btn-default" data-dismiss="modal"
                                                                aria-hidden="true"><strong>Cerrar</strong></button>
                                                        <button name="update_proveedor" type="submit"
                                                                class="btn btn-primary"><strong>Actualizar
                                                                Datos</strong></button>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                    </form>
                            </div>
                            <?php } ?>
                            </table>
                        </div>
                </div>
    </section>
    </div>

    </div>
    <!-- statics end -->

</section>
</section>
<!--main content end-->

<?PHP include("LibraryJs.php"); ?>


</body>
</html>