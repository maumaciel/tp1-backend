<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>TP 1 - Back End</title>
</head>

<body>
    
    <h1 class="titulo">Trabajo práctico 1<h1>
    <h2  class="subtitulo">Backend Developer - Potrero Digital</h2>

    <div class="contenedor">
        <p class="enunciado">1. Imprima por pantalla: “Hola mundo”.</p>
        <?php
            echo "<p>Hola mundo</p>";
        ?>
    </div>

    <div class="contenedor">
        <p class="enunciado">2. Cargue en una variable la cadena de caracteres “Hola mundo” y luego la imprima por pantalla.<p>
        <?php
            $saludo = "<p>Hola mundo</p>";

            echo $saludo;
        ?>
    </div>

    <div class="contenedor">
        <p class="enunciado">3. Crear dos variables enteras y mostrar por pantalla, la suma, la resta, la multiplicación, la división
        entera y el resto de la división entera.
        </p>
        <?php
            $entero1 = 7;
            $entero2 = 2;
        
            echo "<p>Número entero 1: ".$entero1."</p>";
            echo "<p>Número entero 2: ".$entero2."</p>";
        ?>
        
        
        <?php
                echo "<p>Suma: ".$entero1." + ".$entero2." = ".$entero1 + $entero2."</p>";
        ?>
        
        <?php
                echo "<p>Resta: ".$entero1." - ".$entero2." = ".$entero1 - $entero2."</p>";
        ?>
        
        
        <?php
                echo "<p>Multiplación: ".$entero1." x ".$entero2." = ".$entero1 * $entero2."</p>";
        ?>
    
        <?php
                echo "<p>División entera: ".$entero1." / ".$entero2." = ".floor($entero1 / $entero2)."</p>";
        ?>
        
        <?php echo "<p>Resto de la división entera: ".$entero1 % $entero2."</p>"; ?>
        
    </div>
    
    <div class="contenedor">
        <p class="enunciado">4. Realizar la transformación de grados Celsius a Fahrenheit, para el valor 20°C y luego lo imprima por
            pantalla</p>
        <?php 
            $cel = 20;
            echo "<p>20 °C = ".($cel*1.8+32)." °F</p>";
        ?>
    </div>

    <div class="contenedor">
        <p class="enunciado">
            5. Implementar algoritmos que permitan:</br></br>
            a) Calcular el perímetro y el área de un rectángulo, dado que su base es 18cm y su altura 12cm.</br></br>
            b) Calcular el perímetro y el área de un círculo dado que su radio es de 30cm.
        </p>
        <p>Cuadrado</p>
        <?php
            $radio = 30; 
            $base = 18;
            $altura = 12;

            echo "<p>Perímetro = ".($base * 2) + ($altura*2)." cm</p>";
        ?>
        <?php
            echo "<p>Área = ".$base*$altura." cm<sup>2</sup></p>";
        ?>
        </br></br>
        <p>Círculo</p>
        <?php
            echo "<p>Perímetro = ".(2*3.1416*$radio)." cm</p>";
        ?>
       
        <?php
            echo "<p>Área = ".(3.1416*($radio*$radio))." cm<sup>2</sup></p>";
        ?>
    </div>




</body>
</html>