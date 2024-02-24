<?php

$hostname="localhost";
$username="root";
$BDpassword="";
$BDname="uniagustiniana";

$conectar= mysqli_connect($hostname,$username,$BDpassword,$BDname);

if(!$conectar){
    echo"la base de datos no se conecta";
}else{
    echo"la base se conecto";
}




?>