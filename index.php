<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <p>saisez un mot</p>
    <form class="form" action="index.php" method="GET">
      <input type="text" name="nom" value="">
    <input type="submit" name="" value=" envoyer">
    </form>

<?php
if(isset($_GET['nom']))
{
    if('nom=!empty'){
    /* on verifie l'état des magic_quotes */
    if(get_magic_quotes_runtime()==1)
    {
        $nom = stripslashes($_GET['nom']);
    }
    else
    {
        $nom = $_GET['nom'];
    }
    
	/* on inverse le sens des lettres de la phrase */
    $inverse = strrev($nom);
    
    echo '<p style="color:#ff0000;font-size:18px;"><strong>"'.$_GET['nom'].'"</strong> ';
    if($nom==$inverse) echo 'est un palindrome'; else echo 'n\'est pas un palindrome';
    echo '</p>';
}}
?>

  </body>
</html>
