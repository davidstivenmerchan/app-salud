<?php
require_once("../php/validacion.php");
require_once '../php/conexion.php';

$name = $_SESSION['nombre'];
$ape = $_SESSION['apellido'];
$edad = $_SESSION['edad'];
$email = $_SESSION['email'];
$tell = $_SESSION['tel'];
$cedula = $_SESSION['cc'];
if($_SESSION['tipo_usu'] == 1){
    $usu = 'Niños';
}else{
    $usu = 'Adulto';
}
 


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Onboarding</title>
    <link rel="stylesheet" href="../styles/onboarding.css">
    <script src="https://kit.fontawesome.com/949998deef.js" crossorigin="anonymous"></script>
</head>
<body>
    <nav>
        <img src="../img/logo.png" alt="">
        <h2>My App We take Care For You</h2>
        <a href="../php/salir.php"><i class="fa-solid fa-door-open"></i></a>
        <h5>Bienvenido <?php echo $name?></h5>
    </nav>
    <div class="slider">
        <div>
            <h3>Datos Personales</h3>
            <p><strong>Nombre: </strong> <?php echo $name ?></p>
            <p><strong>Apellido: </strong><?php echo $ape ?></p>
            <p><strong>Edad: </strong><?php echo $edad ?></p>
            <p><strong>Correo: </strong><?php echo $email ?></p>
            <p><strong>Telefono: </strong><?php echo $tell ?></p>
            <p><strong>Tipo de Usuario: </strong><?php echo $usu ?></p>
        </div>
    </div>
    <h2>Onboarding</h2>
    <div class="onboarding">
        <div>
            <div class="on1">
            <div class="condiciones_salud">
                <a href="registrar_condicion_salud.php?var=<?php echo $cedula?>">
                        <h4>Condiciones de Salud</h4>
                </a>  
                </div>
                <div class="examenes">
                    <a href="examenes.php?var=<?php echo $cedula?>">
                        <h4>Exámenes</h4>
                    </a> 
                    <i class="fa-solid fa-file"></i>
                </div>      
            </div>
            <div class="on2">
                <div class="indicadores">
                    <h4>Indicadores de Salud</h4>
                </div>
                <div class="controles">
                    <h4>Constroles</h4>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="logo">

        </div>
        <div class="nosotros">
            <h3>Quienes Somos</h3>
            <p>&copy;2022 Todos Los derechos reservados <br>Aviso Legal,politica de privacidad 
                Web diseñada por: <br><br>
                - David Merchan <br>
                - Ivan Samacá <br><br>
                Universidad Politecnica de Colombia
            </p>

        </div>
        <div class="dudas">
            <h3>¿Tienes Dudas?</h3>
            <p>Telefono de Contacto:</p>
            <h4>-3103323443</h4>
            <h4>-3233009328</h4>
            <p>Email:</p>
            <h4>NosotrosTecuidamos@gmail.com</h4>
        </div>
        <div class="siguenos">
            <h3>Siguenos</h3>
            <div>
                <i class="fa-brands fa-facebook-square"></i>
                <p>Facebook</p>
            </div>
            <div>
                <i class="fa-brands fa-instagram-square"></i>
                <p>Instagram</p>
            </div>
            <div>
                <i class="fa-brands fa-twitter-square"></i>
                <p>Twitter</p>
            </div>
            <div>
                <i class="fa-brands fa-blogger"></i>
                <p>Blogger</p>
            </div>
        </div>
        <div>
            <h3>Nuesta Oficina</h3>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3977.8672089492584!2d-75.20682268591014!3d4.435817645134109!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e38c4e19b63d507%3A0x365431d586e84dfa!2sHospital%20Federico%20Lleras%20Acosta%20ESE%20-%20Sede%20Limonar!5e0!3m2!1ses!2sco!4v1654790229743!5m2!1ses!2sco" width="200" height="200" style="border: 1px solid green;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        
    </footer>
    
</body>
</html>