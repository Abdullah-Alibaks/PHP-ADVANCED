<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>advanced 2</title>
    <style> 
    table, td, tr, th{
        border: <?php echo $_POST["tabelrand"]?>px solid black;
        border-collapse: collapse;
        padding: <?php echo $_POST["celpadding"]?>px;
        background-color: <?php echo $_POST["achtergrondkleur"]?>;
        color:  <?php echo $_POST["tekstkleur"]?>;
    }
    </style>
</head>

<table >
<tr>
    <th>Key</th>
    <th>Value</th>
</tr>

<?php 
    $student = array("Naam"=>"Abdullah Alibaks",
                     "Afkomst"=>"Nederlands/Surinaams", 
                     "Klas"=>"0A", 
                     "Leeftijd"=>"20", 
                     "Woonplaats"=>"Amsterdam", 
                     "Favoriete sport"=>"voetbal", 
                     "Favoriete voetbalclub"=>"AFC Ajax");

    function maakTabel($sleutel, $waarde){ 
        echo "<tr>";
        echo "<td>$sleutel</td>";
        echo "<td>$waarde</td>";
        echo "</tr>";
     } 

 foreach($student as $key => $value){
     maakTabel($key, $value);
}

?>




</table>
</body>
</html>