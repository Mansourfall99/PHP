<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page 5</title>
</head>
<body>

<form action="" method="post">
 Matricule<input type="text" name="matricule" placeholder="Entrer votre Matricule"><br><br>
 Prenom<input type="text" name="Prenom" placeholder="Entrer votre Prenom"><br><br>
 nom<input type="text" name="nom" placeholder="Entrer votre nom"><br><br>
 Adresse<textarea type="text" name="adresse"></textarea> <br><br>
 sexe
 <label><input type="radio" name="genre" value="Masculin">Masculin</label>
 <label><input type="radio" name="genre" value="Feminin">Feminin</label><br><br>

 Service
 <select name="service">
 
 <option>choisir </option>
    <option>Administration</option>
    <option>Comptabilité</option>
    <option>Comité</option>
 </select><br><br>
 

 Fontion
 <select name="fonction">
 
 <option>choisir </option>
    <option>Directeur</option>
    <option>Administrateur</option>
    <option>Etudiant</option>
    <option>Gestionnaire</option>
 </select><br><br>
<input type="reset" name="reset">
<input type="submit" name="envoyer" value="Envoyer"> <br>


<?php 

  /*  if (isset($_POST["envoyer"]))
    {
        if (empty($_POST['Prenom']) || empty($_POST['nom']) || empty($_POST['matricule'])  || empty($_POST['adresse'])  || empty($_POST['genre']))
        {
            echo"Veillez remplir tous les champs";
        }
        else
        {
        $matricule=$_POST['matricule'];
        $Prenom=$_POST['Prenom'];
        $nom=$_POST['nom'];
        $age=$_POST['adresse'];
        $genre=$_POST['genre'];
        $service=$_POST['service'];
        $fonction=$_POST['fonction'];
        echo "<Strong>le matricule est</strong>  " .$_POST["matricule"] ."<br>"  ."<br>";
        echo "<Strong>le prenom est </Strong> " .$_POST["Prenom"] ."<br>" ."<br>";
        echo "<Strong>le nom est  </Strong>" .$_POST["nom"] ."<br>" ."<br>";
        echo "<Strong>l'adresse est </Strong> " .$_POST["adresse"] ."<br>" ."<br>";
        echo "<Strong>La personne est du genre </Strong> " .$_POST["genre"] ."<br>" ."<br>";
        echo "<Strong>le service est  </Strong>" .$_POST["service"] ."<br>" ."<br>";
        echo "<Strong>la fonction est  </Strong>" .$_POST["fonction"] ."<br>" ."<br>";
        
        }
    }
    else
    {
        echo"Vous n'avez pas validez le formulaire";
    }
    
    

    

*/

?>
   <div class="container mt-5">
<?php
    if(isset($errors['all'])){
            $nom="";
            $Prenom="";
?>
        <div class="alert alert-danger col-6 ml-5">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>Erreur!</strong> <?php echo $errors['all'];?>
        </div>
 <?php
    }
 ?>

         
                 <?php
                 if(isset($errors['nom'])){

                  ?>
                    <div class="alert alert-danger col-4  ">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <strong>Erreur!</strong> <?=$errors['nom'];?>
                    </div>
                    <?php
                     }
                  ?>
             </div>
             
                 <?php
                 if(isset($errors['Prenom'])){

                  ?>
                    <div class="alert alert-danger col-4  ">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <strong>Erreur!</strong> <?=$errors['Prenom'];?>
                    </div>
                    <?php
                     }
                  ?>
             </div>
             <div class="form-group row">
                 <div class="offset-sm-4 col-sm-2">
                     <button type="submit" class="btn btn-secondary" name="btn_submit" value="init">Reinitialisation</button>
                 </div>
                 <div class=" col-sm-2">
                     <button type="submit" class="btn btn-primary" name="btn_submit" value="calcul">Calculer</button>
                 </div>
             </div>
         </form>


         <?php
             if(isset($_POST['btn_submit'])&& $_POST['btn_submit']==="calcul" && count($errors)===0){
      ?>
     <ul class="">
         <li class="nav-item">
                 Dem-Perimètre: <?=$resultat['dp'];?>
         </li>
         <li class="nav-item">
                 Perimètre :    <?=$resultat['p'];?>
         </li>
         <li class="nav-item">
              Surface  :       <?=$resultat['s'];?>
         </li>
         <li class="nav-item">
              Diagonale:      <?=$resultat['dg'];?>
         </li>
     </ul>
               <table class="table bordered">
                   <thead>
                       <tr>
                           <th>Demi Perimetre</th>
                           <th>Perimetre</th>
                           <th>Surface</th>
                           <th>Diagonale</th>
                       </tr>
                   </thead>
                   <tbody>
                   <?php
                      foreach ($_SESSION as $key => $resultat) {
                          if($key!=="id"){
                   ?>
                            <tr>
                                <td scope="row"><?=$resultat['dp'];?></td>
                                <td><?=$resultat['p'];?></td>
                                <td><?=$resultat['s'];?></td>
                                <td><?=$resultat['dg'];?></td>
                            </tr>
                    <?php
                        }
                      }
                   ?>

                   </tbody>
               </table>


     <?php
     }
      ?>
     </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

