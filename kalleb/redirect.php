<?php

include 'conexao.php';

if(isset($_POST ['entrar'])){
    $login = $_POST['email'];
    $senha = $_POST['password'];

    $sql = "SELECT * FROM `admin` WHERE `login`= '$login' AND `senha` = '$senha'";
    $rs = mysqli_query($conexao, $sql);

    if (mysqli_num_rows($rs)!= 0){
        echo "<script language = 'javascript' type = 'text/javascript'>

       alert('login realizado com sucesso');
       window.location.href = 'admin.php';

        </script>";

        
    }else   echo "<script language = 'javascript' type = 'text/javascript'>

    alert('calma ae paizão');
    window.location.href = 'login.php';

     </script>";

    mysqli_close($conexao);

}

if(isset($_POST['cadastrar'])){
    $chassi = $_POST ['chassi'];
    $marca = $_POST ['marca'];
    $modelo = $_POST ['modelo'];
    $ano = $_POST ['ano'];
    $cor = $_POST ['cor'];
    $cambio = $_POST ['cambio'];
    $rastri = $_POST ['rastri'];

    $sql = "INSERT INTO `veiculos`(`chassi`, `modelo`, `marca`, `ano`, `cor`, `cambio`, `rastreador`) 
    VALUES ('$chassi','$marca','$modelo','$ano','$cor','$cambio','$rastri')";

    $rs = mysqli_query($conexao, $sql);

  
  

}

  

?>