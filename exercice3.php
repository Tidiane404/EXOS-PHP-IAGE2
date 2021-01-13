/*
    Exercice 3:
     Initialiser trois variables  puis les ranger
      dans l'ordre decroissant
  */

<?php 
$chiffre1=rand(-10,100);
$chiffre2=rand(-10,100);

   $min=null;
   $max=null;
   if($chiffre1<$chiffre2){
       $min=$chiffre1;
       $max=$chiffre2;
   }else{
       $min=$chiffre2;
       $max=$chiffre1;

   }
   echo"Ordre décroissant donne $max,$min";

 
 ?>