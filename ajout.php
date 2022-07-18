<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Ajoutons un logement </title>
    <link rel="stylesheet" href="bootstrap-3.3.7/dist/css/bootstrap.min.css">
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method ="post" enctype = "application/x_www_form_urlencoded">
        <fieldset>
                <legend><b> coordonnées d'un logement </b></legend>
                  <div class="panel panel-primary">
                    <table class="table table-striped table-condensed">
                      <div class="panel-heading">
                         <h3 class="panel-title"> Ajoutons un logement </h3>
                      </div>
                <tr>
                    <td>id_type: </td><td><input type = "text" name = "type" size = "40" maxlength ="30"/></td>
                </tr>
                <tr>
                    <td>nom_type: </td><td><input type = "text" name = "nom_type" size = "40" maxlength ="30"/></td>
                </tr>
                <tr>
                    <td>description: </td><td><input type = "text" name = "description" size = "40" maxlength ="30"/></td>
                </tr>
                <tr>
                    <td><input type = "reset" value ="EFFACER"></td>
                    <td><input type = "submit" value ="VALIDER"></td>
                </tr>
                <tr><td><a href = lecture1.php> lecture des données</a></td></tr>
            </table>
         </div>
        </fieldset> 
    </form>
     <?php 
       include_once("connexion.php");
       $idcom =connexobjet("booking","parametre");
       if(!empty($_POST['nom_type'])&& !empty($_POST['description'])&& !empty($_POST['type']))
           {
          $id_type="\N";
          $nom_type=$idcom->escape_string($_POST['nom_type']);
          $description=$idcom->escape_string($_POST['description']);
          $id_type=$idcom->escape_string($_POST['type']);
          // requete sql
          echo $nom_type." ".$description;
          $requete="INSERT INTO type_logement VALUES('$id_type','$nom_type','$description')";
          $result=$idcom->query($requete);
          if(!$result)
             {
            echo $idcom->errno;
            echo $idcom->error;
            echo "<script type=\"text/javascript\"> 
            alert('Erreur: ('".$idcom->error."')')</script>";
           }
           else
           {
            echo "<script type =\"text/javascript\"> 
            alert('vous etes enregistrer. Votre numero de client est: ('".$idcom->insert_id."')')</script>";
            $idcom->close();
           }
           }
             else{echo "<h3> formulaire à completer! </h3>"; }
       // $result->free();
        ?>
</body>
</html>