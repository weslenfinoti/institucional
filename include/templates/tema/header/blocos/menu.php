<?php

$sqlpaginas = mysqli_query($con,"SELECT * FROM paginas WHERE status = '1' ORDER BY ordem ASC");
            while($lnpg = mysqli_fetch_array($sqlpaginas)){
                $idpg = $lnpg['id'];

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


