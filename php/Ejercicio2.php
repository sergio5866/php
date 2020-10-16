<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
//Usa el conector   "string"."string"

//En el futuro los ordenadores no pesarán mas de 1,5 toneladas, PM 1949

$a = "futuro";

$b = "pesarán";

$c = 1.5;

echo 'En el ' + $a  + ' los ordenadores no ' + $b + ' mas de ' + $c + ' toneladas';



//Usa printf

//Creo que hay mercado para 5 ordenadores en el mundo. Presidente de IBM 1943 

$a = "mercado";

$b = "5";

$c = "mundo";

$d = "Presidente"; 

print "<p>";

printf("Creo que hay %s ...", $a);

print "</p>";



//DATE

date_default_timezone_set('UTC')."<br>";



echo "The time is  " . date("h:i:sa")."<br>";



echo "Hoy es " . date("Y/m/d") . "<br>";

//Escribe el codigo PHP para que se muestre...

//Hoy es 2020.10.09

//Hoy es 2020-10-09

//Hoy es Friday



echo date('l jS \of F Y h:i:s A')."<br>";

//Escribe el codigo PHP para que se muestre...

// March 10, 2001, 5:16 pm




?>
</body>
</html>



