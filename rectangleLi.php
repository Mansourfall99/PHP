<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <?php 
  
  include_once('rectanglLicontrol.php');
  include_once('validationrec.php');
  
  $resultat=[];
  if(isset($_POST['btn_submit'])){
$longueur=$_POST['longueur'];
$largeur=$_POST['largeur'];
  $result1=is_empty($longueur);
  $result2=is_empty($largeur);

  if($result1===true && $result2===true){

    $result=compare($longueur,$largeur);
    if($result===true){
        $resultat['d_p']=demi_perimetre($longueur,$largeur);
        $resultat['p']=perimetre($longueur,$largeur);
        $resultat['s']=surface($longueur,$largeur);
        $resultat['D']=diagonale($longueur,$largeur);

    }else{
        var_dump($result);
        
    }

 
  }else{
      $result['all']="Les nombres sont obligatoires";
  }
  if (isset($result['longueur'])) {
      $longueur="";
  }
  if (isset($result['largeur'])) {
    $largeur="";
}
  
  }
  ?>

<?php if(isset($result['all'])){ ?>
      <div class="alert alert-danger">
          <strong>Erreur</strong>
          <?php  echo $result['all'];
         }
                 ?>
      </div>
    <form action="rectangleLi.php" method="post">
    <div class="form-group">
      <label for="">Entrer la longueur</label>
      <input type="text" name="longueur"  size="100" value="<?php 
                 if(isset($longueur)){
                     echo $longueur; } ?>" >
      <?php if(isset($result['longueur'])){ ?>
      <div class="alert alert-danger">
          <strong>Erreur</strong>
          <?php        echo $result['longueur'];
         }
                 ?>
      </div>
      

      <label for="">Entrer la largeur</label>
      <input type="text" name="largeur" id="" class="form-control" value="<?php 
                 if(isset($largeur)){
                     echo $largeur; } ?>" >
      <?php if(isset($result['largeur'])){ ?>
      <div class="alert alert-danger">
          <strong>Erreur</strong> 
          <?php       echo $result['largeur'];
         }
            ?>
      </div>

    </div>

    <button type="submit" name="btn_submit" class="btn btn-primary">Déterminer</button>
    </form>


    <table class="table table-bordered ">
        <thead>
            <tr>
                <th>Demi-perimetre</th>
                <th>Perimetre</th>
                <th>Surface</th>
                <th>Diagonale</th>

            </tr>
        </thead>
        <tbody>
            <tr>
                <td scope="row"><?php if(isset($resultat['d_p'])){
                    echo $resultat['d_p']; 
                    } ?></td>
                <td><?php if(isset($resultat['p'])){
                     echo $resultat['p']; } 
                     ?></td>
                <td><?php if(isset($resultat['s'])){
                     echo $resultat['s']; 
                     } ?></td>
                <td><?php if(isset($resultat['D'])){
                     echo $resultat['D'];
                      } ?></td>

            </tr>
        </tbody>
    </table>



    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>