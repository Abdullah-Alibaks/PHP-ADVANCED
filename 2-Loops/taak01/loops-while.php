<?php
$leeftijd = 0;

while($leeftijd <= 18){
    echo "Ik ben " .$leeftijd. " ,dus ik mag nog niet stemmen<br>";
    $leeftijd++;
}
if($leeftijd == 18){
    echo "Ik ben " .$leeftijd. " ,dus ik heb stemrecht";
}

?>