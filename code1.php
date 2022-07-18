<!DOCTYPE html>
<html lang="fr">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<title>supprimer vos coordonnées</title>
      <link rel="stylesheet" href="bootstrap-3.3.7/dist/css/bootstrap.min.css">
      <link rel="stylesheet" href="style.css">
</head>
<body>
<form  action= "supprimer.php" method="post" enctype="application/x-www-formurlencoded">
<fieldset>
<legendclass="panel-title"><b></b></legend>
<div class="panel panel-primary">
                    <table class="table table-striped table-condensed">
                      <div class="panel-heading">
                         <h3 class="panel-title"> Saisissez votre code client pour supprimer vos coordonnées </h3>
                      </div>

<tbody>
<tr>
<td>Code client : </td>
<td><input type="text" name="code" size="20" maxlength="10"/></td>
<td>Suppression : </td>
<td><input type="submit" value="supprimer"/></td><td><a href = lecture1.php> lecture des données</a></td>
</tr>
</tbody></table>
</fieldset>
</form>
</body>
</html>