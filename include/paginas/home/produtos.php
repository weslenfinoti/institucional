<div class="content py-5">
    <div class="row justify-content-md-center m-0">
        <h1 class="col-12 text-center text-bold">Nossos Produtos</h1>
        <p class="col-12 text-center col-md-8 pr-2 pl-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
            </div>
    <div class="row m-0"><?php 
        $limit = '4';
        $destaque = " AND destaque = '1' ";
       //inclui listagem de produtos
       include('include/paginas/produtos/lista-produtos.php');
        
        echo $lista_produtos;
  
?>
    </div>
    <div class="row">
        <p class="text-center"><a href="<?php echo $pastacf; ?>/produtos" class="btn btn-info text-white">Ver todos</a></p>
    </div>
</div>
