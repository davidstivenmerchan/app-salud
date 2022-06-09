<?php

include('conexion.php');

if(isset($_POST['enviar'])){

    $cedula = $_POST['identificacion'];
    $nom = $_POST['nombre'];
    $ape = $_POST['apellido'];
    $correo = $_POST['email'];
    $tell = $_POST['numero'];
    $edad = $_POST['edad'];
    $password = $_POST['password'];
    $tip_doc = $_POST['tip_doc'];
    $tip_usu = 2;

    $consulta1 = "INSERT INTO usuarios(n_identificacion, nombre, apellido , id_tipo_usu, edad , email, numero, password ,id_tipo_docu) 
    values($cedula, '$nom', '$ape', 2, $edad, '$correo', $tell,'$password', $tip_doc)";
    $ejecu = mysqli_query($mysqli,$consulta1);

    if($ejecu){
        
        echo "<script> alert('Registro Exitoso!'); 
        window.location= '../index.html';
        </script>";

        }
    }else{
        echo "<script> alert('NO Funciono el registro porque esa cedula ya esta registrada!'); 
        window.location= '../index.html';
        </script>";
    }

?>