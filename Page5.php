<?php  
session_start();
include_once('verification.php');
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Page 5</title>
  </head>
  <body>
<?php 

$matricule="";
$Nom="";
$Prenom="";
$Sexe="";
$fonction="";
$service="";
$adresse="";
$id="";
$value="";
$errors=[];






if(isset($_POST['btn_submit'])){

    if(!isset($_SESSION['id'])){
        $_SESSION['id']=0;
       }

    $btn_submit=$_POST['btn_submit'];

    if($btn_submit==="valider"){

    
        $matricule=$_POST['matricule'];
        $Nom=$_POST['nom'];
        $Prenom=$_POST['prenom'];
        $Sexe=$_POST['Sexe'];
        $fonction=$_POST['fonction'];
        $service=$_POST['service'];
        $adresse=$_POST['adresse'];

        $info=['matricule'=>$_POST['matricule'],'nom'=>$_POST['nom'],
        'prenom'=>$_POST['prenom'],'Sexe'=>$_POST['Sexe'],
        'fonction'=>$_POST['fonction'],'service'=>$_POST['service'],
        'adresse'=>$_POST['adresse']
    ];
        
        $_SESSION['id']++;
        $id=  $_SESSION['id'];
        $_SESSION["value".$id]=$value;




        
        

}else{
    session_destroy();
}


}


?>


    <form action=" " method="post">
        Matricule <input type="text" name="matricule" id="color"/>
        <?php if(isset($errors['matricule'])){ ?>
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>Erreurs</strong>
        </div>
        <?php } ?>
        <br />
        <br />
        Nom  <input type="text" name="nom" id="color" required/>
        <?php if(isset($errors['matricule'])){ ?>
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>Erreurs</strong>
        </div>
        <?php } ?>
        <br />
        <br />
        Prenom <input type="text" name="prenom" required/>
        <?php if(isset($errors['matricule'])){ ?>
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>Erreurs</strong>
            <?php } ?>
        </div>
        <br />
        <br />
        Sexe   <input type="radio" name="Sexe" value="masculin" required/>Masculin
         <input type="radio" name="Sexe" value="feminin"/>Feminin
        <br />
        <br />
        Adresse <textarea name="adresse" id="" cols="30" rows="2"></textarea>
        <br />
        <br />
        Service <select name="service" class="service" required>
            <option value="choix">Choisir</option>
            <option value="administration">Administration</option>
            <option value="Comptabilite">Comptabilité</option>
            <option value="Securite">Sécurité</option>
            <option value="Informatique">Informatique</option>
        </select>
        <?php if(isset($errors['matricule'])){ ?>
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>Erreurs</strong>
        </div>
        <?php } ?>
        <br />
        <br />
        Fonction <select name="fonction" required>
            <option value="choix">Choisir</option>
            <option value="Administrateur">Administrateur</option>
            <option value="Developpeur">Developpeur</option>
            <option value="Directeur">Directeur</option>
            <option value="Etudiant">Etudiant</option>
            <option value="Gestionnaire">Gestionnaire</option>
            
        </select>
        <?php if(isset($errors['matricule'])){ ?>
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>Erreurs</strong>
        </div>
        <?php } ?>
        <br />
        <br />
        <input type="submit" name="btn_submit" value="valider" /> 
        <input type="submit" name="btn_submit" value="Réinitialiser" /> 
    </form>
    <style>
        #color{
            background-color:pink;
        }
        input['submit']{
            background-color:dark gray;
        }
        .service{
            width:150px;
        }
    </style>

    <?php if($btn_submit="valider"){ ?>

        <table class="table container table-bordered">
            <thead>
                <tr>
                    <th>Matricule</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Sexe</th>
                    <th>Adresse</th>
                    <th>Service</th>
                    <th>Fonction</th>

                </tr>
            </thead>
            
            <tbody>

           
                <tr>
                    <td><?= $matricule;  ?></td>
                    <td><?= $Nom;  ?></td>
                    <td><?= $Prenom;  ?></td>
                    <td><?= $Sexe;  ?></td>
                    <td><?= $adresse;  ?></td>
                    <td><?= $service; ?></td>
                    <td><?= $fonction;   ?></td>
                </tr>

               
            </tbody>
            
        </table>

    <?php 
    }         
?>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>