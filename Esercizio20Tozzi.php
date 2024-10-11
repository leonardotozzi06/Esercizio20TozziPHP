<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>





    <?php


    $casa["indirizzo"] = "Via Filarete";
    $casa["metriQuadri"] = 112.50;
    $casa["prezzoAlMetroQuadro"] = 1012.99;
    $casa["prezzoTotale"] = $casa["metriQuadri"] * $casa["prezzoAlMetroQuadro"];


    ?>


    <table>
        <tr>
            <th>"Indirizzo"</th>
            <th>"Metri Quadri"</th>
            <th>"Prezzo Al Metro Quadro"</th>
            <th>"Prezzo Totale"</th>
        </tr>
        <tr>

        </tr>
        <?php
        
            foreach ($casa as $key => $value) {
                echo "<td>$value</td>";
            }
        ?>
        </tr>
        </table>

</body>
</html>