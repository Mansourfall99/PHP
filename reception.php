<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    if (isset($_POST["envoyer"]))
    {
        if (empty($_POST['Prenom']) || empty($_POST['nom']))
        {
            echo"Veillez remplir tous les champs";
        }
        else
        {
        $Prenom=$_POST['Prenom'];
        $nom=$_POST['nom'];
        echo "Bonjour " .$_POST["Prenom"]  ." " .$_POST["nom"];
        }
    }
    else
    {
        echo"Vous n'avez pas validez le formulaire";
    }
    

    

?>




</body>
</html>