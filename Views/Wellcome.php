<!DOCTYPE html>
<html lang="en">
<?php
    include('Head.php');
?>
<body>
    <section id="container" class="">
        <header class="header dark-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom">
                    <i class="icon_menu"></i>
                </div>
            </div>
            <?php include("Logo.php"); ?>
            <div class="nav search-row" id="top_menu">
                <ul class="nav top-menu">
                    <li>
                        <form class="navbar-form">
                            <!-- <input class="form-control" placeholder="Buscar ..." type="text"> -->
                        </form>
                    </li> 
                </ul>
            </div>
            <?php include("DropDown.php"); ?>
        </header>
    </section>
    
</body>
</html>