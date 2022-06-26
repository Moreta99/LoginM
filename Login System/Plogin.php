<!DOCTYPE html>
<html>
<head>
<title>Inicio de Seccion</title>
<link rel="stylesheet" type="text/css" href="estilos/style.css">
</head>
<script type="text/javascript">
document.oncontextmenu = function(){return false;}
document.onkeydown = function(){return true;}
</script>
<body>
    <form action="login.php" method="post" onselectstart='return false;'>
    <img src="imagenes/Prody.png">
        <h2>Inicio de Seccion</h2>
        <?php if(isset($_GET['error'])){ ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
        <label>Usuario</label>
        <input type="text" name="uname" placeholder="Inserte un usuario" onselectstart='return false;'></br>

        <label>Contraseña</label>
        <input type="password" name="password" placeholder="Inserte una contraseña" onselectstart='return false;'></br>
        <button type="submit">COMENZAR</bttton>
    </form>
</body>

</html>