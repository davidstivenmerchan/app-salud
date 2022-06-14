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
            <form action="" id="formulario_envio" autocomplete="off">
                <h3>Registre Su Exámen</h3>

                <input type="text" value="<?php echo $cc ?>" disabled id="cedula">
                
                <select name="" id="seleccion">
                    <option value="">Tipo Exámen Medico</option>
                    <option value="Hemograma">Hemograma</option>
                    <option value="Urinálisis">Urinálisis</option>
                    <option value="Perfil renal">Perfil renal</option>
                    <option value="Colesterol">Colesterol</option>
                    <option value="triglicérido">triglicérido</option>
                    <option value="Ácido úrico">Ácido úrico</option>
                    <option value="4">Otra</option>
                </select>
                <input type="hidden" name="" id="condicion" placeholder="Escriba Tipo de Exámen">
                <input type="date" id="fecha">
                <select name="" id="resultado">
                    <option value="">Resultado Examen</option>
                    <option value="Positivo">Positivo</option>
                    <option value="Negativo">Negativo</option>
                </select>

                
                <input type="submit" value="Registrar">
            </form>

        </div>

        <div>
            <div class="tabla">

                <table id="classtr">
                    <tr>
                        <th>Cedula</th>
                        <th>Tipo Exámen</th>
                        <th>Fecha</th>
                        <th>Resultado</th>
                        <th>Acciones</th>
                        
                    </tr>
                    <tr >
                        <td><?php echo $cc ?></td>
                        <td>Asma</td>
                        <td>2021-03-03</td>
                        <td>Positivo</td>
                        <td>Eliminar|Editar</td>
                    </tr>

                </table>

            </div>
        </div>

    </div>

    <script src="../js/examenes.js"></script>
    
    
</body>
</html>