<?php
//conect banco
include('modelo/conect.php');
//consulta configurações principais
include('include/config.php');
//cabeçalho
include('include/header.php');
//meio
include('include/blocomeio.php');
//rodapé
include('include/footer.php');

print mysqli_error($con);