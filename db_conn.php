
<?php
//aqui  es la conexión con la base de datos
$sname="localhost";
$uname="root";
$password="";

$db_name = "test_db";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if(!$conn){
   echo "Conection failed";
}