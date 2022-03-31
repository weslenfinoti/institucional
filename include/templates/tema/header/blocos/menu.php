<?php
$menupg = '';
$menuspg = '';
$sqlpaginas = mysqli_query($con,"SELECT * FROM paginas WHERE id_pai = '0' AND status = '1' ORDER BY ordem ASC");
            while($lnpg = mysqli_fetch_array($sqlpaginas)){
                $idpg = $lnpg['id'];  //id pagina
                $vinculopg = $lnpg['vinculo']; // 0 = sub com base em paginas id_pai; 1 = com base em produtos
//verifica se tem submenu
$sqlpg = mysqli_query($con,"SELECT id,id_pai FROM paginas WHERE id_pai = '$idpg'");    
//validação caso tenha carrega o menu com sub
if(mysqli_num_rows($sqlpg) > 0){    
include('lista-menusub.php');
//validação caso não tenha não carrega, carrega normal                
}else{
include('lista-menu.php');    
//fim verificação
}
           }

echo $menupg;
