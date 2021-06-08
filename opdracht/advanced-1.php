<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="advanced-2.php" method="post">
    <label for="tabelrand">Tabelranddikte (px):</label>
    <input type="text" name="tabelrand" id="tabelrand"><br>
    <label for="celpadding">cel-padding (px):</label>
    <input type="text" name="celpadding" id="celpadding"><br>
    <label for="achtergrondkleur">Achtergrondkleur:</label>
    <select name="achtergrondkleur" id="achtergrondkleur">  
    <?php  
    $kleuren = array("red", "blue", "green", "black", "brown");
    foreach ($kleuren as $achtergrond){
        echo "<option value='$achtergrond'>$achtergrond</option>";
    }
    ?>
    </select><br>
    <label for="tekstkleur">Tekstkleur:</label>
    <select name="tekstkleur" id="tekstkleur">
    <?php
    foreach ($kleuren as $value){
        echo "<option value='$value'>$value</option>";
    } 
    ?>
    </select><br>
    <input type="submit" value="verstuur">
</form>
    
</body>
</html>
</html>