<?php

 //verificação limitação
        $lista_produtos = '';
        if(isset($limit)){
        $limitprod = 'Limit '.$limit;
        }else{
        $limitprod = '';    
        } 
        if(isset($destaque)){
        }else{
        $destaque = '';    
        }
        //consulta produtos
        
        $sqlprodutos = mysqli_query($con,"SELECT * FROM produtos WHERE status = '1' $destaque $limitprod");
        while($lnprodutos = mysqli_fetch_array($sqlprodutos)){
            //verifica se a imagem está vazia e susbstitui por um placeholder
            if($lnprodutos['img'] != ''){
                $immg = $lnprodutos['img'];
                //caminho da imagem
                $img = $pastacf.'/img/produtos/'.$immg;
            }else{
                $img = 'https://via.placeholder.com/550x450';
            }
            //lista de produtos
            $lista_produtos .= '<div class="col-12 col-md-3 my-3 pr-2 pl-2">
                
                        <div class="card">        <a class="" href="'.$pastacf.'/'.$arquivo.'/'.$lnprodutos['slug'].'">
                            <img class="card-img-top" src="'.$img.'" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">'.$lnprodutos['titulo'].'</h5>
                                <p class="card-text">'.$lnprodutos['descricao_resumida'].'</p>

                            </div>
                               </a>
                        </div>
                     
                       </div>';
            
            $img = '';
        }