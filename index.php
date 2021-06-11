<?php 

/* Création du dispatcher */

if(!empty($_GET['action'])):
    switch($_GET['action']):
    
    case 'person' :
        include('view/person.php');
        break;

    case 'form' :
        include('view/form.php');
        break;

    default :
        include('view/404.php');
        break;

endswitch;
else : include('view/form.php'); endif;

?>