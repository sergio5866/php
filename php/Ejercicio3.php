<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        print("<h1>Tirada de dado</h1>\n");
        $a=rand(-10,100);
        $b=rand(-10,100);
        print("El jugador ha sacado un " . $a . "\n");
        print("La banca sacado un " . $b . "\n"));
        if($a<$b){
            print("¡Gana la banca!" . "\n"));
        }else if($a>$b){
            print("¡Gana el jugador!" . "\n"));
        }else{
            print("¡Empate!" . "\n"));
        }
        print("¡Hasta la proxima!" . "\n"));
    ?>
</body>
</html>



