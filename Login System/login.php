<?php
session_start();
include "db_conn.php";
//aqui es para las validaciones o sea que aqui es de los compos vacions hay como modificar el texto a lo que uno quiere
if (isset($_POST['uname']) && isset($_POST['password'])) {
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']);
    //aqui se puede poner campo vacio no borrar el index.php?error.
    //en el segundo else da la validacion del usuario.
    if(empty($uname)){
        header("Location:index.php?error=Campo vacio del usuario");
        exit();
    }else if(empty($pass)){
        header("Location:index.php?error=Campo vacio de la contraseña");
        exit();
    }else{
        $sql = "SELECT * FROM users WHERE user_name= '$uname' AND password= '$pass'";
        $result = mysqli_query($conn, $sql);
        //estoy es la validacion correcta el cual envia a la pestaña home que es el inicion
        if (mysqli_num_rows($result)==1) {
            $row = mysqli_fetch_assoc($result);
            if($row['user_name']=== $uname && $row['password']=== $pass){
                $_SESSION['user_name'] = $uname && $row['user_name'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['id'] = $row['id'];
                header("Location:home.php?");
                exit();
            }else{
                header("Location:Plogin.php?error=User and Password error");
            exit();
            }
        }else{
            header("Location:Plogin.php?error=User and Password error");
        exit();
        }
    }

}else{
    header("Location:Plogin.php");
    exit();
}