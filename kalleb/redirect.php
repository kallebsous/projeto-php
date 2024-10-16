<?php

if(isset($_POST ['entrar'])){
    $login = $_POST['email'];
    $senha = $_POST['password'];

    $sql = "SELECT * FROM `admin` WHERE `login`= '$login' AND `senha` = '$senha'";
    $rs = mysqli_query($conexao, $sql);
}

  

?>