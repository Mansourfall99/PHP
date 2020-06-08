<?php 

function  is_empty($nbre,$sms=null){
    if(empty($nbre)){
        if($sms==null){
            $sms="Le champs est Obligatoire";
        }
        return $sms;

       }else{
           return true;
       }
}


function is__not_number($option,$keys,$errorMessage="Ce champs ne prend que des lettres "){
    if(!(is_numeric($nombre))){
       return true;
    }else{
        return $errors['$keys']=$errorMessage;
    }
}
function matricontrol($matricule,$errorMessage="Matricule doit être unique"){        

}

function random_1($matricule) {     
    $string = "";    
     $chaine = "abcdefghijklmnpqrstuvwxy";   
     srand((double)microtime()*1000000);    
      for($i=0; $i<$car; $i++) {    
           $string .= $chaine[rand()%strlen($chaine)];   
          }   
      return $string;   
        
}






?> 