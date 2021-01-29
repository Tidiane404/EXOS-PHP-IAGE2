<?php

//EXO DANS Fondamentaux/Bases

      function carre($cote){
            $perimetre=$cote *4;
            $demiPerimetre=$perimetre/2;
            $surface=$cote*$cote;
            $diagonale=sqrt(($cote**2) + ($cote**2) );

            echo "Cote est : $cote <br/>";
            echo 'Perimetre est : '. $perimetre.' <br/>';
            echo "Demi Perimetre est : $demiPerimetre <br/>";
            echo "Surface est  : $surface <br/>";
            echo "Diagonale est  : $diagonale <br/>";
      }

      function cercle($rayon){
        $aire=M_PI*(pow($rayon,2));
        $circonference=2*M_PI*$rayon;
        echo "Rayon est $rayon <br/>";
        echo "Aire est $aire <br/>";
        echo "Circonference est $circonference <br/>";
      }

      function rectangle ($long, $larg){
        $perimetre=($long+$larg)*2;
        $demiPerimetre=$perimetre/2;
        $surface=$long*$larg;
        $diagonale=pow(sqrt($long),2) + pow($larg,2);
        echo "Perimetre est $perimetre <br/>";
        echo "Demiperimetre est $demiPerimetre<br/>";
        echo "Surface est $surface<br/>";
        echo "Diagonale est $diagonale<br/>";
      }

//EXO DANS Fondamentaux/Controles/Boucles

//EXO1
//Afficher les Valeurs entre 1 et 10
    //1,2,3,.....,10
    //$val=1;
    //Condition :$val<=10
    //Pas => $val=$val+1 => $val+=1 => $val++
   
    function valeur1_10($val){
      for($val=1;$val<=10;$val++){
        echo $val." ,";
     }
    }

//EXO2
 //Afficher les Valeurs entre 10 et 1
    //10,9,8,.....1
    //$val=10;
    //Condition :$val>=1
    //Pas => $val=$val-1 => $val-=1 => $val--
    function valeur10_1($val){
      $val=10;
      while ($val>= 1) {
          echo $val." ,";
          $val--;
      }

    }
     
//EXO3
//1-Afficher les valeurs paires entre 1 et une valeur Générée
//2-Afficher les valeurs impaires entre valeur Générée  et 1

function valeurPaire($nbreP){
  echo"Question1<br>";

  $val=0;
  while($val%2==0 and $val<=$nbreP){
         echo "$val,";
         $val+=2 ;
  }
}

function valeurImpaire($nbreI){
  echo"<br/> Question2<br>";
  
  for($val=$nbreI;$val>=1;$val-=2){
     if($val%2!=0){
        echo "$val,";  
     }
  }
}


//EXO DANS Fondamentaux/Controles/Conditionnelles 
/*
    Exercice 1:
     Initialiser une variable est d'indiquer
     son signe(positif,negatif ou null)
  */
function signenbre($nbre){
  if($nbre==0){
    echo "$nbre est null";
}else{
    //$nbre!=0 $nbre<0 ou $nbre>0
    if($nbre>0){
        echo "$nbre est Positif";
    }else{
        //$nbre<0
        echo "$nbre est Négatif";
    }
}
}


/*
    Exercice 2:
     Initialiser deux variables  puis les ranger
      dans l'ordre croissant
     avec if
   */

   function Ordrecroissant($chiffre1,$chiffre2){
    $min=null;
    $max=null;
    if($chiffre1<$chiffre2){
      $min=$chiffre1;
      $max=$chiffre2;
    }
  
    if($chiffre2<=$chiffre1){
      $min=$chiffre2;
      $max=$chiffre1;
    }
  
    echo "Ordre croissant donne $min,$max";
   }

  /*
    Exercice 3:
     Initialiser trois variables  puis les ranger
      dans l'ordre decroissant
  */
   function Ordredecroissant($nb1,$nb2,$nb3){
  
    $min=null;
    $moy=null;
    $max=null;

    if($nb1>$nb2){
        $min=$nb2;
        $max=$nb1;
    }else{
      $min=$nb1;
      $max=$nb2;
    }
    if($nb3<$min){
        $moy=$min;
        $min=$nb3;
    }else{
        if($nb3<$max){
          $moy=$nb3;
        }else{
          $moy=$max;
          $max=$nb3;
        } 
    }
    echo "$max,$moy,$min";
   }

/*
      Exercice 4:
     Initialiser une variable mois entier
      puis afficher le mois correspondant en chaine
      Exemple: 
      mois=1 => Janvier
  */
  function moiscorrespondant($mois){
    switch($mois){
      case 1:
        echo "$mois ==> Janvier";
      break;
       case 2:
        echo "$mois ==> Fevrier";
       break;
       case 12:
        echo "$mois ==> Decembre";
       break;
       case 3:
        echo "$mois ==> Mars";
       break; 
       default:
       echo "$mois entre 4 et 11";
       break;

  }
  }

  /*
    Exercice 5:
     Initialiser une variable une annee  entier
      puis affiche si cette année est bisextile ou pas 
  */

  function annnebisextile($annee){
    if($annee%4==0 && $annee%100!=0 || $annee%400==0 ){
      echo "$annee est bisextile";
     }else{
       echo "$annee non bisextile";
     }
   
  }

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

  function annebisextile2($mois,$annee,$nbreJour){
    switch ($mois) {
      case 2:
          if($annee%4==0 && $annee%100!=0 || $annee%400==0 ){
              $nbreJour=29;
          }else{
              $nbreJour=28;
          }
      break;
      case 4:
      case 6:
      case 9:
      case 11:
           $nbreJour=30;
           break;
      default:
      $nbreJour=31;
          break;
  }
  
  
  
   echo "Le nbre de Jours du mois $mois dans l'anne $annee est $nbreJour";
  }
 /*
    A Faire
     Exercice7:
     Initialiser quatre variables  puis les ranger
      dans l'ordre decroissant
  */
function ranger4variableordredecroissant($nb1,$nb2,$nb3,$nb4){
  $min=null;
  $moy1=null;
  $moy2=null;
  $max=null;

  if($nb1>$nb2){
      $min=$nb2;
      $max=$nb1;
  }else{
    $min=$nb1;
    $max=$nb2;
  }
  if($nb3<$min){
      $moy=$min;
      $min=$nb3;
  }else{
      if($nb3<$max){
        $moy=$nb3;
      }else{
        $moy=$max;
        $max=$nb3;
      } 
  }
  echo "$max,$moy,$min";
}

function premier($nbre){
  for($i=2; $i<$nbre; $i++){
    if ($nbre%$i==0){
      return false;
    }
  }
    return true; //Le nombre est premier
}

function SommeNbrepremier ($valGenere){
  $somme=0;
  for ($i=2; $i<$valGenere; $i++){
    $result=premier($i);
    if ($result){
      echo "$i, ";
      $somme+=$i;
    }
  }
  return $somme;
}
  /*
     4-afficher le produit des valeurs parfaits entre 1 et une valeur Générée
       6=1+2+3
  */
function nombreparfait($valGenere) {
  for ($i=6; $i<$valGenere; $i++){
    $result=premier($i);
    if ($result) {
      $Nbreparfait= $i * max($valGenere);
      return true;
    }
  }
  return false;
}

function Produitnbreparfait ($valGenere){
  $produit=1;
  for ($i=6; $i<$valGenere; $i++){
    $result=nombreparfait($i);
    if ($result){
      echo "$i, ";
      $produit*=$i;
    }
  }
  return $produit;
}

function Nbredevaleurgenere($nbre){
  for($i=1; $i<$nbre; $i++){
    if ($nbre==0){
      echo "$i, ";
      $genere= (count($nbre));
    }
   }

}
  /*
   1)Afficher une serie de valeurs générés ,l'affichage s'arrete lorsque
   l'on génére une valeur 0
   2)Apres l'arret de la boucle , on affiche le nombres valeurs qui a été génére
    Exemple
      $nbre=1; 
      $nbre=2;
      $nbre=3;
      $nbre=0;
      Le nombre valeurs générés est 4
  */
  /*

         //Creer une fonction qui convertit le premier caractere d'une chaine en majuscule
         //et tous les autres caracteres en minuscules
   
  */
   /*
            fonction emailValide qui teste si un email est valide ou pas
    */
    /*
            fonction telValide qui teste si un numero de telephone portable
             est valide ou pas
               Exemple: 
                   77  
              **9 chiffres
              **indicatif doit etre 77,78,76,70,75
    */
?>