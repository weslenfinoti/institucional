<h1 style="display:none;"><?php echo $titulocf; ?></h1>
<!--sidebar menu mobile -->
     <div class="spinner-wrapper2">

    </div>
    <div class="spinner-wrapper">
        <div class="spinner-border text-primary" role="status">
            <img src="<?php echo $pastacf.'/'.'img/loading.gif' ?>" width="125"/>
            <span class="visually-hidden">Carregando...</span>
        </div>
    </div>
<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvas" data-bs-keyboard="false" data-bs-backdrop="false">
    <div class="offcanvas-header">
        <div class="offcanvas-title d-none d-sm-block" id="offcanvas">Menu</div>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Fechar"></button>
    </div>
    <div class="offcanvas-body px-0" >
        <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-start"  id="menu">
            <?php 
            //include consulta sidebarmenu
            include('blocos/menu.php');
            ?>
        </ul>
    </div>
</div>


<header class="container-fluid bg-light py-2">
    <div class="row content">
        <div class="col-md-3">
            <div class="row">
            <div class="px-0 col-9"> 
               <img src="https://via.placeholder.com/100x60.png?text=Logo" />
            </div>
                   <!-- botão menu exibe mobile -->
        <div class="  py-2 d-md-none col-3">     
            <button class="btn float-end" data-bs-toggle="offcanvas" data-bs-target="#offcanvas" role="button">
                <i class="bi bi-list" data-bs-toggle="offcanvas" data-bs-target="#offcanvas"></i>
            </button>
             </div>
        </div>
        </div>
        <div class="col-md-9 d-none d-md-block">
        <ul class="nav nav-pills  align-items-start" >
            <?php 
            //include consulta menu desktop
            include('blocos/menu.php');
            ?>
        </ul>
        </div>
    </div>
</header>
