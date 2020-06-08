<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page2</title>
</head>
<body>

<form action="page2.php" method="post">
 <input type="text" name="nom" placeholder="Entrer votre nom"><br><br>
<input type="reset" name="reset">
<input type="submit" name="envoyer" value="Envoyer"> 

</form>

<?php

if (isset($_POST["envoyer"]))
{
    if (empty($_POST['nom']))
    {
        echo"Veillez remplir le champs";
    }
    else
    {
    $valeur=$_POST['nom'];
    echo"Le nom est" .$valeur;
    }
}
else
{
    echo"Vous n'avez pas validez le formulaire";
}


?>

</body>
</html>