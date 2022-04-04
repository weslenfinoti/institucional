<?php
//consulta paginas
$sqlpaginas = mysqli_query($con, "SELECT * FROM paginas WHERE status = '1' OR status = '0'");
//adiciona todas as paginas em um array
while($lnpag = mysqli_fetch_array($sqlpaginas)) {
    $paginas[] = $lnpag["slug"];
}

//consulta paginas
$sqlprodutos = mysqli_query($con, "SELECT * FROM produtos WHERE status = '1'");
//adiciona todas as paginas em um array
while($lnprod = mysqli_fetch_array($sqlprodutos)) {
    $produtospg[] = $lnprod["slug"];
}

//direcionamento que inclui conteudos da segunda barra
if(isset($arquivo) && in_array($arquivo, $paginas) && isset($post) && in_array($post, $produtospg) && $sub == ""){
//caminho do arquivo padrão para verificar se existe    
$filename = $_SERVER['DOCUMENT_ROOT'].''.$pastacf.'/include/paginas/'.$arquivo.'/padrao.php';
if(file_exists($filename)) {
include('include/paginas/'.$arquivo.'/padrao.php');    
}else{
    header('Location: '.$pastacf.'/home');  
}
}else{

    
    
}

