<?php

session_start();
require_once 'conexion.php';

if (isset($_POST['ingresar'])){

    $usuario=$_POST['usuario'];
    $clave=$_POST['clave'];

    $sql="SELECT * FROM usuarios WHERE email='$usuario' AND password='$clave'";
    $query= mysqli_query($mysqli,$sql);
    $datos= mysqli_fetch_assoc($query);

    // var_dump($datos);
    if ($datos){
 
        $_SESSION['cc'] = $datos['n_identificacion'];
        $_SESSION['nombre'] = $datos['nombre'];
        $_SESSION['apellido'] = $datos['apellido'];
        $_SESSION['tipo_usu'] = $datos['id_tipo_usu'];
        $_SESSION['edad'] = $datos['edad'];
        $_SESSION['email'] = $datos['email'];
        $_SESSION['tel'] = $datos['numero'];
        $_SESSION['clave'] = $datos['password'];
        $_SESSION['tipo_doc'] = $datos['id_tipo_docu'];

        if($_SESSION['tipo_usu'] == 1){
            echo "<script> alert('Inicio Sesion Correctamente (niños)');
            window.location= '../pages/onboarding_niños.php';
            </script>";
        }else{
            echo "<script> alert('Inicio Sesion Correctamente (adulto)');
            window.location= '../pages/onboarding.php';
           </script>";

        }

    }else{
       echo "<script> alert('VERIFIQUE SU CONTRASEÑA O DOCUMENTO. ERROR AL INGRESAR');
          window.location= '../index.html';
         </script>";
        exit();
    }

}else {
    echo "error";
}


?>