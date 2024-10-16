<?php

$host = "localhost";
$db = "concessionaria";
$userName = "root";
$senhaDB = "";

$conexao = mysqli_connect($host, $userName, $senhaDB, $db);

if(!$conexao){
    echo "FAZ O L PAIZÃO.".mysqli_connect_error();
}
else echo "FEZ O L";

?>