<?php
//lista menu com sub menu
$menupg .= '<li class="dropdown">
                <a href="#" class="nav-link dropdown-toggle  text-truncate" id="dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fs-5 '.$lnpg['icon'].'"></i><span class="ms-1 d-sm-inline">'.$lnpg['titulo'].'</span>
                </a>
                <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdown">';
                //puxa o vinculo setado 
                include('vinculo/'.$vinculopg.'.php');
                        
            $menupg .= $menuspg;
             $menupg .= '   </ul>
            </li>';