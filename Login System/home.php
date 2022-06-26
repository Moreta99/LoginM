<?php
session_start();

if(isset ($_SESSION['id']) && isset($_SESSION['user_name'])){
?>
<!DOCTYPE html>
<html>
<head>
<title>HOME</title>
<link rel="stylesheet" type="text/css" href="estilos/style.css">
</head>
<body>
    <!--este es el codigo para el ingreso de la pagina del login al home-->
    <h1>Bienvenido, <?php echo $_SESSION['name']; ?></h1><br>
   <a href="logout.php">Cerrar Sección</a>
</body>
</html>
<?php
}else{
    header("Location: Plogin.php?");
    exit();
}

?>