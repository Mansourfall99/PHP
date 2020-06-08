<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page 4</title>
</head>
<body>

<form action="page4a.php" method="post">
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
<input type="submit" name="envoyer" value="Envoyer"> 

</form>

<?php



?>

</body>
</html>