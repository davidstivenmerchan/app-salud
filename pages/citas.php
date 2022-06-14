<?php

$cc = $_GET['var'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Citas</title>
    <link rel="stylesheet" href="../styles/registrar_condicion_salud.css">
</head>
<body>
    <div class="contenedor">
        <div class="formulario">
            <form action="" id="formulario_envio" autocomplete="off">
                <h3>Programe una cita</h3>

                <input type="text" value="<?php echo $cc ?>" disabled id="cedula">
                
                <select name="" id="seleccion">
                    <option value="">Tipo Cita</option>
                    <option value="General">General</option>
                    <option value="Pediatría">Pediatría</option>
                    <option value="Enfermería">Enfermería</option>
                    <option value="Matrona">Matrona</option>
                    <option value="Odontología">Odontología</option>
                    <option value="Especialista">Especialista</option>
                    <option value="4">Otra</option>
                </select>
                <input type="hidden" name="" id="condicion" placeholder="Escriba Tipo Cita">
                <input type="date" id="fecha">
                <input type="time" id="time">
                <select name="" id="resultado">
                    <option value="">Doctor</option>
                    <option value="Jorge Alegre">Jorge Alegre</option>
                    <option value="Daniel Quintero">Daniel Quintero</option>
                    <option value="Cristian Gonzalez">Cristian Gonzalez</option>
                    <option value="Felipe Cardozo">Felipe Cardozo</option>
                </select>



                
                <input type="submit" value="Registrar">
            </form>

        </div>

        <div>
            <div class="tabla">

                <table id="classtr">
                    <tr>
                        <th>Cedula</th>
                        <th>Tipo de Cita</th>
                        <th>Fecha</th>
                        <th>Hora</th>
                        <th>Doctor</th>
                        <th>Acciones</th>
                        
                    </tr>
                    <tr >
                        <td><?php echo $cc ?></td>
                        <td>Odontología</td>
                        <td>2021-03-03</td>
                        <td>13:15</td>
                        <td>Daniel Quintero</td>
                        <td>Eliminar|Editar</td>
                    </tr>

                </table>

            </div>
        </div>

    </div>

    <script src="../js/citas.js"></script>
    
    
</body>
</html>