<?php

//vinculo com base em produtos / categorias

$sqlspg = mysqli_query($con,"SELECT * FROM produtos WHERE status = '1' ORDER BY ordem ASC");
            while($lnspg = mysqli_fetch_array($sqlspg)){
                
$menuspg .= '<li><a class="dropdown-item" href="'.$pastacf.'/'.$lnpg['slug'].'/'.$lnspg['slug'].'">'.$lnspg['titulo'].'</a></li>';

            }

