            <?php
                $nombre= $_POST['Nombre'];
                $apellido= $_POST['Apellido'];
                $edad= $_POST['Edad'];
                $fecha= $_POST['Fecha'];
                $ciudad= $_POST['Ciudad'];
            ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RESPUESTA</title>
    <link rel="stylesheet" href="style.css">

</head>
<body class="bodyphp">
        <div class="contenedorphp">
            <div class="foto">
                <img class="tamaño" src="https://i.pinimg.com/originals/f4/f8/5a/f4f85a94e4e468aa5d0dcea2f0be3e36.png" alt="">
            </div>
            <br>
            <div class="texto">
                <h2>BIENVENIDO, ¡YA SOS SOCIO DEL CLUB!</h2>
                <br>
                <br>
                <H3>TUS DATOS DE ASOCIADO SON:</H3>
            </div>
            <div class="elemento1">
                <h3 class="previa">Tu nombre es:  </h3>
                <h4 class="interno">
                    <?php
                        echo $nombre; 
                    ?>
            </h4>
            </div>
            <div class="elemento2">
                <h3 class="previa">Tu apellido es: </h3>
                <h4 class="interno">
                    <?php
                        echo $apellido; 
                    ?>
            </h4>
            </div>
            <div class="elemento3">
                 <h3 class="previa">Tu edad es: </h3>
                <h4 class="interno">
                    <?php
                        echo $edad;
                        if ($edad>=12) {
                            echo " (Socio mayor - PAGA CUOTA)";
                        } else {
                            echo " (Socio menor - NO PAGA CUOTA)";
                        }
                         
                    ?>
            </h4>
            </div>
            <div class="elemento4">
                <h3 class="previa">Tu fecha de nacimiento es: </h3>
                <h4 class="interno">
                    <?php
                        echo $fecha; 
                    ?>
            </h4>
            </div>
            <div class="elemento5">
                <h3 class="previa">Tu ciudad es: </h3>
                <h4 class="interno">
                    <?php
                        echo $ciudad; 
                    ?>
                </h4>            
            </div>
            <div class="texto">
                <br>
                <H3>PARA FINALIZAR EL PROCESO DE ASOCIADO, TENES QUE ABONAR TU CUOTA EN LA SECRETARIA DEL CLUB</H3>
            </div>
          
        </div>
    
    
            

           

 
</body>
</html>
