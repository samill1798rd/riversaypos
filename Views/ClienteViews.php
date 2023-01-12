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
                        <header class="panel-heading"> Lista de clientes del sistema</header>
                        <header class="panel-heading">
                            <div class="panel-body">
                                <div align="right">
                                    <button href="#addCliente" title="" data-placement="left" data-toggle="modal"
                                            class="btn btn-primary tooltips" type="button"
                                            data-original-title="Nuevo Cliente">
                                        <span class="fa fa-plus"> </span>
                                        AGREGAR NUEVO Cliente
                                    </button>
                                </div>


                <div id="addCliente" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <form class="form-validate form-horizontal" name="form2"
                            action="RegistrosCliente.php"
                            method="post"
                            enctype="multipart/form-data">
                            <input name="usuarioLogin" value="<?php echo $usuario; ?>" type="hidden">
                            <input name="passwordLogin" value="<?php echo $password; ?>" type="hidden">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"
                                                aria-hidden="true">×
                                        </button>
                                        <h3 id="myModalLabel" align="center">Registrar Informacion del
                                            Cliente</h3>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div><strong>Agregar Imagen</strong></div>
                                                <br>
                                                <?php
                                                include("UploadViewImageCreate.php");
                                                ?>
                                            </div>
                                            <div class="col-lg-8">
                                                <br><br><br><br>
                                                <label for="nombre"
                                                    class="control-label col-lg-3">Nombre:</label>
                                                <div class="col-lg-9">
                                                    <input class="form-control input-lg m-bot15" id="nombre"
                                                        name="nombre" minlength="5" type="text"
                                                        required/>
                                                </div>
                                                <br><br>

                                                <label for="apellido" class="control-label col-lg-3">Apellido:</label>
                                                <div class="col-lg-9">
                                                    <input class="form-control input-lg m-bot15"
                                                        id="apellido"
                                                        name="apellido" minlength="5" type="text"
                                                        required/>
                                                </div>
                                                <br><br>

                                                <label for="ci" class="control-label col-lg-3">Cedula:</label>
                                                <div class="col-lg-9">
                                                    <input class="form-control input-lg m-bot15" id="ci"
                                                        name="ci"
                                                        minlength="5" type="text" required/>
                                                </div>
                                                <br><br>

                                                <label for="direccion" class="control-label col-lg-3">Direccion:</label>
                                                <div class="col-lg-9">
                                                    <input class="form-control input-lg m-bot15"
                                                        id="direccion"
                                                        name="direccion" minlength="5" type="text"
                                                        required/>
                                                </div>
                                                <br><br>

                                                <label for="telefonoFijo"
                                                    class="control-label col-lg-3">Telefono:</label>
                                                <div class="col-lg-9">
                                                    <input class="form-control input-lg m-bot15"
                                                        id="telefonoFijo"
                                                        name="telefonoFijo" minlength="5" type="text"
                                                        required/>
                                                </div>
                                                <br><br>

                                                <label for="telefonoCelular"
                                                    class="control-label col-lg-3">Celular:</label>
                                                <div class="col-lg-9">
                                                    <input class="form-control input-lg m-bot15"
                                                        id="telefonoCelular"
                                                        name="telefonoCelular" minlength="5" type="text"
                                                        required/>
                                                </div>
                                                <br><br>

                                                <label for="email"
                                                    class="control-label col-lg-3">Email:</label>
                                                <div class="col-lg-9">
                                                    <input class="form-control input-lg m-bot15" id="email"
                                                        name="email"
                                                        minlength="5" type="text" required/>
                                                </div>
                                                <br><br>

                                                <label for="fechaRegistro" class="control-label col-lg-3">Fecha:</label>
                                                <div class="col-lg-9">
                                                    <input class="form-control input-lg m-bot15" type="date"
                                                        readonly
                                                        name="fechaRegistro" autocomplete="off"
                                                        value="<?php echo date('Y-m-d'); ?>">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-default" data-dismiss="modal"
                                                aria-hidden="true"><strong>Cerrar</strong>
                                        </button>
                                        <button name="nuevo_cliente" type="submit" class="btn btn-primary">
                                            <strong>Registrar</strong></button>
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
                                        <th><i class="icon_images"></i> FOTO</th>
                                        <th><i class="icon_images"></i> NOMBRE COMPLETO</th>
                                        <th><i class="icon_contacts"></i> CEDULA</th>
                                        <th><i class="icon_folder"></i> DIRECCION</th>
                                        <th><i class="icon_contacts_alt"></i> CELULAR</th>
                                        <th><i class="icon_contacts_alt"></i> EMAIL</th>
                                        <!-- <th><i class="icon_key"></i> FECHA DE REGISTRO</th> -->
                                        <th><i class="icon_cog"></i> ACCIONES</th>
                                    </tr>
                                    </thead>
                                    <?PHP
                                    while ($client = mysqli_fetch_array($allCliente)) {
                                    ?>

                                    <tr>
                                        <td><img src="<?php echo $urlViews . $client['foto'] ?>" height="50"
                                                     width="50"></td>
                                        <td> <?PHP echo $client['nombre'].' '.$client['apellido']; ?></td>
                                        <td> <?PHP echo $client['ci']; ?></td>
                                        <td> <?PHP echo $client['direccion']; ?></td>
                                        <td> <?PHP echo $client['telefonoCelular']; ?></td>
                                        <td> <?PHP echo $client['email']; ?></td>
                                        <!-- <td> <?PHP echo $client['fechaRegistro']; ?></td> -->
                                        <td>
                                            <a href="#a<?php echo $client[0]; ?>" role="button"
                                               class="btn btn-success" data-toggle="modal">
                                                <i class="icon_check_alt2"></i> </a>
                                            <a href="RegistrosCliente.php?idborrar=<?PHP echo $client[0]; ?>&usuarioLogin=<?PHP echo $usuario; ?>&passwordLogin=<?PHP echo $password; ?>"
                                               role="button" class="btn btn-danger"> <i class="icon_close_alt2"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    
                                    <div id="a<?php echo $client[0]; ?>" class="modal fade" tabindex="-1"
                             role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <form class="form-validate form-horizontal" name="form2"
                                  action="RegistrosCliente.php"
                                  method="post" enctype="multipart/form-data">
                                <input type="hidden" name="idcliente"
                                       value="<?php echo $client['idcliente']; ?>">
                                <input name="usuarioLogin" value="<?php echo $usuario; ?>"
                                       type="hidden">
                                <input name="passwordLogin" value="<?php echo $password; ?>"
                                       type="hidden">
                                <input type="hidden" name="imagen"
                                       value="<?php echo $client['foto']; ?>">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"
                                                    aria-hidden="true">×
                                            </button>
                                            <h3 id="myModalLabel" align="center">Cambiar Informacion del
                                                Cliente</h3>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-lg-4">

                                                    <div><strong> Imagen</strong></div>
                                                    <img src="<?PHP echo $urlViews . $client['foto']; ?>" width="150"
                                                         height="150">
                                                    <br><br>
                                                    <section class="panel" class="col-lg-6">
                                                        <div><strong>Cambiar Imagen de Cliente</strong>
                                                        </div>
                                                        <?php
                                                        include("UploadViewImageEdit.php");
                                                        ?>
                                                    </section>
                                                </div>
                                                <div class="col-lg-8">
                                                    <br><br><br><br>
                                                    <label for="nombre" class="control-label col-lg-3">Nombre:</label>
                                                    <div class="col-lg-9">
                                                        <input class="form-control input-lg m-bot15"
                                                               id="nombre"
                                                               name="nombre" minlength="3" type="text"
                                                               value="<?php echo $client['nombre']; ?>"/>
                                                    </div>
                                                    <br><br>

                                                    <label for="apellido"
                                                           class="control-label col-lg-3">Apellido:</label>
                                                    <div class="col-lg-9">
                                                        <input class="form-control input-lg m-bot15"
                                                               id="apellido"
                                                               name="apellido" minlength="3" type="text"
                                                               value="<?php echo $client['apellido']; ?>"/>
                                                    </div>
                                                    <br><br>

                                                    <label for="ci"
                                                           class="control-label col-lg-3">Cedula:</label>
                                                    <div class="col-lg-9">
                                                        <input class="form-control input-lg m-bot15"
                                                               id="ci" name="ci"
                                                               minlength="5" type="text"
                                                               value="<?php echo $client['ci']; ?>"/>
                                                    </div>
                                                    <br><br>

                                                    <label for="direccion"
                                                           class="control-label col-lg-3">Direccion:</label>
                                                    <div class="col-lg-9">
                                                        <input class="form-control input-lg m-bot15"
                                                               id="direccion"
                                                               name="direccion" minlength="5"
                                                               type="text"
                                                               value="<?php echo $client['direccion']; ?>"/>
                                                    </div>
                                                    <br><br>

                                                    <label for="telefonoFijo"
                                                           class="control-label col-lg-3">Telefono:</label>
                                                    <div class="col-lg-9">
                                                        <input class="form-control input-lg m-bot15"
                                                               id="telefonoFijo"
                                                               name="telefonoFijo" minlength="5"
                                                               type="text"
                                                               value="<?php echo $client['telefonoFijo']; ?>"/>
                                                    </div>
                                                    <br><br>

                                                    <label for="telefonoCelular"
                                                           class="control-label col-lg-3">Telefono Mobil:</label>
                                                    <div class="col-lg-9">
                                                        <input class="form-control input-lg m-bot15"
                                                               id="telefonoCelular"
                                                               name="telefonoCelular" minlength="5"
                                                               type="text"
                                                               value="<?php echo $client['telefonoCelular']; ?>"/>
                                                    </div>
                                                    <br><br>

                                                    <label for="email" class="control-label col-lg-3">Email:</label>
                                                    <div class="col-lg-9">
                                                        <input class="form-control input-lg m-bot15"
                                                               id="email" name="email"
                                                               minlength="5" type="text"
                                                               value="<?php echo $client['email']; ?>"/>
                                                    </div>
                                                    <br><br>

                                                    <label for="fechaRegistro"
                                                           class="control-label col-lg-3">Fecha Registro:</label>
                                                    <div class="col-lg-9">
                                                        <input class="form-control input-lg m-bot15"
                                                               type="date"
                                                               name="fechaRegistro" autocomplete="off"
                                                               value="<?php echo $client['fechaRegistro']; ?>">
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="modal-footer">
                                                <button class="btn btn-default" data-dismiss="modal"
                                                        aria-hidden="true"><strong>Cerrar</strong>
                                                </button>
                                                <button name="update_cliente" type="submit"
                                                        class="btn btn-primary">
                                                    <strong>Actualizar Datos</strong>
                                                </button>
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