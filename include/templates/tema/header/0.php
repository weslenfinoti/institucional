
<!--sidebar menu mobile -->
<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvas" data-bs-keyboard="false" data-bs-backdrop="false">
    <div class="offcanvas-header">
        <h6 class="offcanvas-title d-none d-sm-block" id="offcanvas">Menu</h6>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Fechar"></button>
    </div>
    <div class="offcanvas-body px-0">
        <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-start" id="menu">
            <?php 
            //include consulta sidebarmenu
            include('blocos/menu.php');
            ?>
        </ul>
    </div>
</div>


<div class="container-fluid">
    <div class="row">
        <div class="col min-vh-100 py-3">
            <!-- botão menu -->
            <button class="btn float-end" data-bs-toggle="offcanvas" data-bs-target="#offcanvas" role="button">
                <i class="bi bi-list" data-bs-toggle="offcanvas" data-bs-target="#offcanvas"></i>
            </button>

        </div>
    </div>
</div>
