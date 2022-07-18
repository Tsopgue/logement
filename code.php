<!DOCTYPE html>
<html lang="fr">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<title>Modifiez vos coordonnées</title>
             <link rel="stylesheet" href="bootstrap-3.3.7/dist/css/bootstrap.min.css">
             <link rel="stylesheet" href="style.css">
</head>
<body>
<form  action=  "modifier.php"  method="post"  enctype="application/x-www-formurlencoded">
<fieldset>
<legend><b>Saisissez votre code client pour modifier vos coordonnées</b></legend>
<div class="panel panel-primary">
                    <table class="table table-striped table-condensed">
                      <div class="panel-heading">
                         <h3 class="panel-title"> Saisissez votre code client pour modifier vos coordonnées </h3>
                      </div>

    <tbody>
<tr>
<td>Code client : </td>
<td><input type="text" name="code" size="20" maxlength="10"/></td>
<td>Modification : </td>
<td><input type="submit" value="Modifier"/></td><td><a href = lecture1.php> lecture des données</a></td>
</tr>
</tbody></table>
</fieldset>
</form>
</body>
</html>