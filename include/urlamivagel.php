<?php
//defini as variaveis por nivel de barra
            $url = "";//variavel principal da url
            $arquivo = "";//primeira barra
            $post = "";//segunda barra
            $sub = "";//terceira barra
            $supersub = "";//quarta barra
//verifica se não está vazia a variável            
if (isset($_GET['url']) && is_string($_GET['url'])) {
 $url = $_GET['url']; 
}
//divide as barras
$urlE = explode('/', $url);
//primeira barra
if(isset($urlE['0']) && is_string($urlE['0'])){
   $arquivo = $urlE['0'];
    
}
//segunda barra
if(isset($urlE['1']) && is_string($urlE['1'])){
            $post = $urlE['1'];
    
}
//terceira barra
if(isset($urlE['2']) && is_string($urlE['2'])){
                 $sub = $urlE['2'];
    
}
//quarta barra
if(isset($urlE['3']) && is_string($urlE['3'])){
       $supersub = $urlE['3'];
    
}