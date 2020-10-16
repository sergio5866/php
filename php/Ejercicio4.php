<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border="1">
    <tr>
        <th>Tirada</th>
        <th>Jugador1</th>
        <th>Jugador2</th>
        <th>ganador</th>
    </tr>
    <?php

    $num=1;
    for($i=1;$i<=5;$i++){
        echo "<tr>"; 
            echo "<td>";
                echo "Tirada " . $num . ": ";
            echo "</td>";
            echo "<td>";
                $numero1 =rand(0,10);
                echo $numero1;
            echo "</td>";
            echo "<td>";
                $numero2 =rand(0,10);
                echo $numero2;
            echo "</td>";
            echo "<td>";
                echo "Gano la tirada el jugador ";
                if($numero1<$numero2){
                    print("2");
                }else{
                    print("1");
                }
            echo "</td>";
        echo "</tr>\n";
        $num++;
        
    }
    echo "</table>";
    ?>
</table>
</body>
</html>



