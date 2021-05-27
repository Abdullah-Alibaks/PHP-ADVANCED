<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<label for="klas">Ik zit in klas: </label>
<select name="klas" id="klas" >
<?php
    $klassen = array("8A", "8B", "8C", "8D", "8E", "9A", "9B", "9C", "9D", "9E");
    foreach ($klassen as $value){
        echo "<option value='srtlower($value)'>$value</option>";
    }
    ?>

    </select>
    <input type="submit" value="verzend">

    

</form>
</body>
</html>