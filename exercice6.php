/*
    Exercice 6:
     Initialiser une variable un mois et une  annee qui sont 
     des  entiers puis affiche determine le nombre de jours 
     de ce mois dans cette annee
     Exemple :
     mois=2 annee:2020  nbreJours=29
     mois=2 annee:2021  nbreJours=28
     mois=12 annee:2021  nbreJours=31
     mois=4 annee:2021  nbreJours=30
  */
<?php
    $mois=rand(1,12);
    $annee=2020;

    if($annee%4==0){
     switch($mois){
         case 1:
            echo "mois=$mois annee:$annee ==> nbreJours=31";
            break;
         case 2:
            echo "mois=$mois annee:$annee ==> nbreJours=29";
            break;
         case 3:
            echo "mois=$mois annee:$annee ==> nbreJours=31";
            break;
         case 4:
            echo "mois=$mois annee:$annee ==> nbreJours=30";
            break;
         case 5:
            echo "mois=$mois annee:$annee ==> nbreJours=31";
            break;
         case 6:
            echo "mois=$mois annee:$annee ==> nbreJours=30";
            break;
         case 7:
            echo "mois=$mois annee:$annee ==> nbreJours=31";
            break;
         case 8:
            echo "mois=$mois annee:$annee ==> nbreJours=31";
            break;
         case 9:
            echo "mois=$mois annee:$annee ==> nbreJours=30";
            break;
         case 10:
            echo "mois=$mois annee:$annee ==> nbreJours=31";
            break;
         case 11:
            echo "mois=$mois annee:$annee ==> nbreJours=30";
            break;
         case 12:
            echo "mois=$mois annee:$annee ==> nbreJours=31";
            break;

     }}else{
         switch($mois){
             case 1:
                echo "mois=$mois annee:$annee ==> nbreJours=31";
                break;
             case 2:
                echo "mois=$mois annee:$annee ==> nbreJours=28";
                break;
             case 3:
                echo "mois=$mois annee:$annee ==> nbreJours=31";
                break;
             case 4:
                echo "mois=$mois annee:$annee ==> nbreJours=30";
                break;
             case 5:
                echo "mois=$mois annee:$annee ==> nbreJours=31";
                break;
             case 6:
                echo "mois=$mois annee:$annee ==> nbreJours=30";
                break;
             case 7:
                echo "mois=$mois annee:$annee ==> nbreJours=31";
                break;
             case 8:
                echo "mois=$mois annee:$annee ==> nbreJours=31";
                break;
             case 9:
                echo "mois=$mois annee:$annee ==> nbreJours=30";
                break;
             case 10:
                echo "mois=$mois annee:$annee ==> nbreJours=31";
                break;
             case 11:
                echo "mois=$mois annee:$annee ==> nbreJours=30";
                break;
             case 12:
                echo "mois=$mois annee:$annee ==> nbreJours=31";
                break;      
    }
    }
?>