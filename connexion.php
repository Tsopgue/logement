<?php
function connexobjet($booking ,$parametre)
{
include_once($parametre.".php."); 
$idcom = new mysqli(HOST,USER,PASS,$booking, PORT); 
if (!$idcom) 
{
echo "<script type=text/javascript>";                                              
echo "alert('Connexion impossible à la base')</script>";
exit(); 
    }
    else
   {
    return $idcom; 
   }
}
connexobjet("booking","parametre");
?>                                                                                                                                                                                                                                                                                                                                                                                                                      