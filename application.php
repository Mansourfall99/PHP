<?php

//Saisir la longueur et la largeur d'un rectangle
    //Surface
    //perimetre
    //Demi Perimetre
    //La longueur d'un des Diagonales

   //Scénario Nominal
      //Pas d'erreur
   //Scénario Alternance
      //Longueur doit être positif
      //Largeur doit être positif
      //Longueur et largeur doivent être nombre
      //Longueur doit être supérieur à largeur
      //Les champs doivent être non vide



//Réaliser un Calculatrice
        //Fonctionnalite =>UC
            /*
               Scenario Nominal
               somme
               produit
               quotient
            */
            /*
                Scenario Alternance
                    Les valeurs saisies sont vides
                    Les valeurs saisies doivent etre des numériques(entier,reel)
                   Quotient le dénominateur est différent de Zero

            */


//Nominal
  include_once('calculController.php');
  include_once('/helpers/validation.php');

//Alternance
//empty($nbre):teste sur le vide
   function isVide($nbre){
      if(empty($nbre)){
         return true;
      }
         return false;
   }

//Fontions Php qui lit le Type d'une valeur
//is_numeric() is_double()
function isNumerique($nbre){
   if(is_numeric($nbre)){
      return true;
   }
      return false;
}



//2==2  true
//'2'==2 true
//'2'===2 false

if(isset($_POST['calcul'])){
      $nbre1=$_POST['nbre1'];
      $nbre2=$_POST['nbre2'];
      $op=$_POST['op'];
      $resultat="";

      $errorNum1=isNumerique($nbre1);
      $errorNum2=isNumerique($nbre2);
      $errorVide1=isVide($nbre1);
      $errorVide2=isVide($nbre2);

      if($errorVide1===false){
        $errorVide1="Le champs n'est pas rempli";
         $nbre1="";
      }
      if($errorVide2===false){
         
         $errorVide2="Le champs 2 n'est pas rempli";
         $nbre2="";
      }


      if($errorNum1===false){
         $errorNum1="La valeur 1 n'est pas un nombre";
         $nbre1="";
      }
      if($errorNum2===false){
         echo("Les valeurs saisies sont corrects");

      }else{
         $errorNum2="La valeur 2 n'est pas un nombre";
         $nbre2="";
      }

      if($errorNum1===true && $errorNum2===true && $errorVide1===true && $errorVide2===true){
         switch ($op) {
            case '+':
               $resultat=somme($nbre1,$nbre2);
               break;
            
            default:
               
               break;
         }
      }

echo($nbre1);
echo($nbre2);

}

?>


<!doctype html>
<html lang="en">
  <head>
    <title>
    </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>


     
      <div class="container mt-5" >
         <form  action="" method="post">
            <div class="form-group row ml-2">
               <label for="inputName" class="col-sm-1-12 col-form-label">Nbre1</label>
               <div class="col-8">
      
                     <input type="text" class="form-control" name="nbre1" id="inputName" placeholder="" value="<?php 
                 if(isset($nbre1)){
                     echo $nbre1; } ?>">
               </div>
            </div>
            <div class="form-group row ml-2">
               <label for="inputName" class="col-sm-1-12 col-form-label">Nbre2</label>
               <div class="col-8">
                  <input type="text" class="form-control" name="nbre2" id="inputName" placeholder="" value="<?php 
                  if(isset($nbre2)){
                     echo $nbre2; }
                     ?>">
               </div>
            </div>

            <div class="form-inline mb-2 ">
              <label for="">Operateur</label>
              <select class="form-control col-7" name="op" id="">
                <option value="+"> Addition </option>
                <option value="-"> Soustraction </option>
                <option  value="*">Multiplication</option>
                <option  value="/">Quotient</option>
              </select>
            </div>

            <div class="form-group row">
               <div class="offset-sm-7 col-sm-5">
                  <button type="submit"  name="calcul" class="btn btn-primary">Calculer</button>
               </div>
            </div>
         </form>
      </div>
      <h2>Resultat :<?php if(isset($resultat)){ echo $resultat; }?></h2>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>