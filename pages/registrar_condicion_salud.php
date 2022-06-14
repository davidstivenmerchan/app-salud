<?php

$cc = $_GET['var'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condiciones Salud</title>
    <link rel="stylesheet" href="../styles/registrar_condicion_salud.css">
</head>
<body>
    <div class="contenedor">
        <div class="formulario">
            <form action="" id="formulario_envio">
                <h3>Registre Condición de Salud</h3>

                <input type="text" value="<?php echo $cc ?>" disabled id="cedula">
                
                <select name="" id="seleccion">
                    <option value="">Seleccione Condición de Salud</option>
                    <option value="Hipertensión">Hipertensión</option>
                    <option value="Diabetes">Diabetes</option>
                    <option value="Asma">Asma</option>
                    <option value="4">Otra</option>
                </select>

                <input type="hidden" name="" id="condicion" placeholder="Escriba Condicion de Salud Particular">
                <input type="submit" value="Registrar">
            </form>

        </div>

        <div>
            <div class="tabla">

                <table id="classtr">
                    <tr>
                        <th>Cedula</th>
                        <th>Condición</th>
                        <th>Acciones</th>
                    </tr>
                    <tr >
                        <td><?php echo $cc ?></td>
                        <td>Asma</td>
                        <td>Eliminar</td>
                    </tr>

                </table>

            </div>
        </div>

    </div>

    <script src="../js/registrar_condicion_salud.js"></script>
    
    
</body>
</html>