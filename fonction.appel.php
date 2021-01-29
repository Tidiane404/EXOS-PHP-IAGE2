<?php 
/*
   include('fichier.php');:inclut et évalue le fichier 
   spécifié durant l'exécution du script
   ou
   L'instruction include_once inclut et évalue le fichier 
   spécifié durant l'exécution du script
   mais la différence est que si le code a déjà été inclus, 
   il ne le sera pas une seconde fois, et include_once retourne true
    require("fichier.php")
   L'instruction require_once est identique à require 
   mis à part que PHP vérifie si le fichier a déjà été inclus,
    et si c'est le cas, ne l'inclut pas une deuxième fois.
   
*/
require_once("fonctions.def.php");
echo "<br/> <\t><\t><\t> EXOS Fondamentaux/Bases ";

      echo "<br/>Appel de fonction carre() <br/>" ;
      $cote=rand(4,50); 
      carre($cote);

      echo "<br/>Appel de fonction cercle() <br/>";
      $rayon=rand(7,12);
      cercle($rayon);

      echo "<br/>Appel de fonction rectangle() <br/>";
      $long=rand(7,12);
      $larg=rand(7,12);
      rectangle($long, $larg);

echo "<br/>  <\t><\t><\t> EXO Fondamentaux/Controles/Boucles  ";

      echo "<br/> EXO1 <br/>";
      $val=rand(1,10);
      valeur1_10($val);

      echo "<br/><br/> EXO2 <br/>";
      $val=rand(1,10);
      valeur10_1($val);

      echo "<br/><br/> EXO3 <br/>";
      $nbreP=rand(1,100);
      valeurPaire($nbreP);

      $nbreI=rand(1,100);
      valeurImpaire($nbreI);

echo "<br/><br/>   <\t><\t><\t> EXO Fondamentaux/Controles/Conditionnelles  ";

      echo "<br/>  EXO1 <br/>";
      $nbre=rand(1,100);
      signenbre($nbre);

      echo "<br/> <br/> EXO2 <br/>";
      $chiffre1=rand(1,100);
      $chiffre2=rand(1,100);
      Ordrecroissant($chiffre1,$chiffre2);
 
      echo "<br/><br/>  EXO3 <br/>";
      $nb1=rand(-20,20);
      $nb2=rand(-20,20);
      $nb3=rand(-20,20);
      Ordredecroissant($nb1,$nb2,$nb3);

      echo "<br/> <br/> EXO4 <br/>";
      $mois=rand(1,12);
      moiscorrespondant($mois);

      echo "<br/> <br/> EXO5 <br/>";
      $annee=rand(1900,2021);
      annnebisextile($annee);

      echo "<br/> <br/> EXO6 <br/>";
      $mois=rand(1,12);
      $annee=rand(1900,2030);
      $nbreJour=null;
      annebisextile2($mois,$annee,$nbreJour);

      echo "<br/> <br/> Appel Somme Nombre Premier <br/>";
      $nbre=rand(1,50);
      echo "$nbre : ";
      $somme=SommeNbrepremier($nbre);
      echo" <br/> La somme est $somme";

     /* echo "<br/> <br/> Appel Produit Nombre Parfait <br/>";
      $nbre=rand(1,10);
      echo "$nbre : ";
      $produit=Produitnbreparfait($nbre);
      echo" <br/> La somme est $produit"; */


      echo "<br/> <br/> Appel Nombre de valeur générée <br/>";
      $nbre=rand(1,10);
      Nbredevaleurgenere($nbre);
      echo "Le nombre de valeur générée est $genere";


      

?>