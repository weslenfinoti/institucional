<?php
//consulta paginas
$sqlpaginas = mysqli_query($con, "SELECT * FROM paginas WHERE status = '1' OR status = '0'");
//adiciona todas as paginas em um array
while($lnpag = mysqli_fetch_array($sqlpaginas)) {
    $paginas[] = $lnpag["slug"];
}
//verifica se existe um arquivo na pasta
$filename = $_SERVER['DOCUMENT_ROOT'].'/include/paginas/'.$arquivo.'.php';
      
if(isset($supersub) && $supersub != '') {
//arquivo de tratamento da quarta barra da url    
    include("supersub.php");
    
}

elseif(isset($sub) && $sub != '') {
//arquivo de tratamento da terceira barra da url
    include("sub.php");
} 

elseif(isset($post) && $post != '') {
//arquivo de tratamento da segunda barra da url    
    include("single.php");
} 

elseif(isset($arquivo) && in_array($arquivo, $paginas)) {
	if($arquivo == '' || $arquivo == 'home') {
//caso a primeira barra seja vazia ou seja igual home ele carrega o arquivo abaixo            
        include("paginas/home.php");
	}

	elseif(file_exists($filename)) {
//verifica se o arquivo existe dentro da pasta paginas          
        include('paginas/'.$arquivo.'.php');
	}

	else {
//caso não encontre o arquivo ele puxa o arquivo categoria.php se tornando dinamico o conteudo com base em um template   
	include('categoria.php');
	}
        
}elseif(isset($arquivo) && $arquivo == '') {
    $arquivo = "home";
//caso a primeira barra seja vazia ou seja igual home ele carrega o arquivo abaixo            
    
 	include("paginas/home.php");
}else {
//caso não encontre o arquivo ele puxa o arquivo categoria.php se tornando dinamico o conteudo com base em um template   

    include "categoria.php";
}