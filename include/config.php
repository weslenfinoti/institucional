<?php
//força o certificado https

//if(empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] == "off"){
//    $redirect = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
//    header('HTTP/1.1 301 Moved Permanently');
//    header('Location: ' . $redirect);
//    exit();
//}

//consulta as configurações
$sqlcf = mysqli_query($con,"SELECT * FROM configuracoes LIMIT 1");
while($lncf = mysqli_fetch_array($sqlcf)){  
//lista as colunas da tabela config
$sqlcol = mysqli_query($con,"SELECT COLUMN_NAME as coluna FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = 'configuracoes'");    
while($lncol = mysqli_fetch_array($sqlcol)){
//variavel coluna para pegar os nomes do db
 $variavelcol = $lncol['coluna'];
//cria as variaveis de configuracoes dinamicamente
${$variavelcol.'cf'} = $lncf[$variavelcol];

}

}
//tratamento de url amigável
include('urlamivagel.php');