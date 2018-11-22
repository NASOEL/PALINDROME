
<?php
echo '<form action="'.$_SERVER['PHP_SELF'].'" method=get">
Entrer votre phrase ici : <input type="text" name="phrase" size="50" />
</form>';

if(isset($_GET['phrase']))
{
    /* on verifie l'état des magic_quotes */
    if(get_magic_quotes_runtime()==1)
    {
        $phrase = stripslashes($_GET['phrase']);
    }
    else
    {
        $phrase = $_GET['phrase'];
    }
    // /* on remplace les caracteres avec accent */
    // $phrase= strtr($phrase,"ÀÁÂÃÄÅàáâãäåÒÓÔÕÖØòóôõöøÈÉÊËèéêëÇçÌÍÎÏìíîïÙÚÛÜùúûüÿÑñ"
    //                         ,"aaaaaaaaaaaaooooooooooooeeeeeeeecciiiiiiiiuuuuuuuuynn");
    // /* on passe tout en minuscule et on supprime les caracteres speciaux */
    // $special = array(" ", "!", ":", "?", ".", "/", "$", "&", "%", "'", ",");
    // $phrase = strtolower(str_replace($special,"",$phrase));
    // 
	/* on inverse le sens des lettres de la phrase */
    $inverse = strrev($phrase);

    echo '<p style="color:#ff0000;font-size:18px;"><strong>"'.$_GET['phrase'].'"</strong> ';
    if($phrase==$inverse) echo 'est un palindrome'; else echo 'n\'est pas un palindrome';
    echo '</p>';
}
?>
