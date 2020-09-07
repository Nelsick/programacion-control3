<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control semana 3</title>
    <link rel="stylesheet" href="./styles/styles.css">
</head>
<body>

    <?php require_once "./controllers/evaluador.php" ?>
    <?php require_once "./controllers/comparador.php" ?>

    <nav> Control semana 3 - Expresiones y operadores </nav>

    <div class="container">

    <h2>Problema 1 - "Comparador de edad"</h2>

    <div class="medium">
        <form action="index.php" method="POST">
            <label for="edad">Ingresa tu edad</label>
            <input type="text" name="edad" placeholder="Ingresa tu edad" value="<?php echo $edad ?>" required autofocus>
            <button type="submit">Evaluar</button>
        </form>
    </div>
    <div class="medium">
        <div class="respuesta">
            <p> <?php echo evaluar($edad); ?> </p>
        </div>
    </div>

    <hr>

    <h2>Problema 2 - "Comparador de expresiones"</h2>

    <div class="tinny">
        <p class="rsp">Evaluamos la expresión:</p>  
        <p><strong>($A < $B) OR (!($A<>$B) AND ($A+$B<$D OR $A<$F));</strong></p>
    </div>

    <div class="tinny">
        <p class="rsp">
        <?php echo valorX($A,$B,$C,$D,$E,$F); ?>
        </p>
    </div>

    <div class="tinny">
        <p class="rsp">Evaluamos la expresión</p>
        <p>Y = D * B + F – A / B * F</p>
    </div>

    <div class="tinny">
        <p class="rsp">
        <?php echo valorY($A,$B,$D,$F); ?>
        </p>
    </div>

    <hr>

    <h2>Problema 3 - "Evaluar expresiones"</h2>

    <div class="medium">
        <p class="resp"><strong>
        Programa 1:
        <?php
            $var1 = true;
            $var2 = false;
            $todo = $var1 && $var2;
            if ($todo) {
            print "<p>verdadero</p>\n";
            } else {
            print "<p>falso</p>\n";
            }
            ?>
        </strong></p>
    </div>

    <div class="medium">
        <p class="resp"><strong>
            Programa 2:
            <?php
                $var1 = true;
                $var2 = false;
                $todo = $var1 and $var2;
                if ($todo) {
                print "<p>verdadero</p>\n";
                } else {
                print "<p>falso</p>\n";
                }
            ?>
        </strong></p>
    </div>


    </div>




</body>
</html>