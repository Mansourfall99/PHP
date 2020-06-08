<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page 4a</title>
</head>
<body>
<?php
    if (isset($_POST["envoyer"]))
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
    
    

    

?>




</body>
</html>