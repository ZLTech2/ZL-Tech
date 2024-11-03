<?php 

if(!$con = mysqli_connect('localhost','root','','bd_clientes')){
    echo'Erro ao se conectar a base de dados';
}else{
    echo 'Acesso a base de dados concluído';
}
mysqli_query($con,"SET NAMES utf-8");
?>