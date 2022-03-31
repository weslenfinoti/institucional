<?php

//vinculo de sub página com base nos  id_pai vinculados na tabela paginas

$sqlspg = mysqli_query($con,"SELECT * FROM paginas WHERE id_pai = '$idpg' AND status = '1' ORDER BY ordem ASC");
            while($lnspg = mysqli_fetch_array($sqlspg)){
                
$menuspg .= '<li><a class="dropdown-item" href="'.$pastacf.'/'.$lnpg['slug'].'/'.$lnspg['slug'].'">'.$lnspg['titulo'].'</a></li>';

            }

