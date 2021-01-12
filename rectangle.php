<?php
$longeur=4;
$largeur=6;
$perimetre= ($longeur+$largeur)*2;
$demi_perimetre= $perimetre/2;
$surface= $longeur*$largeur;
$diagonale= pow(sqrt($longeur),2) + pow($largeur,2);

echo "Nous avons là un rectangle dont la longeur est egale à ".$longeur ",et la largeur ".$largeur;
echo "Son périmétre est de :"  $perimetre <br/> ", son demi périmétre de :" $demi_perimetre <br/> ", sa surface de :" $surface "et son diagonal de :" $diagonale ;
?>

