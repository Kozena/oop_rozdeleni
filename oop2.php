<?php

require ('classes/KozenaUser.php');

//vytvoreni objektu z tridy
$user = new KozenaUser\UserBarboraKozena();

//nastaveni hodnot privatnich promennych
$user->setPovyseniBarboraKozena(FALSE);
$user->setPoznamkaBarboraKozena("Pracuje dobře. Ovšem má špatnou morálku");

echo($user->getJmenoBarboraKozena());
echo(" ");
echo($user->getPrijmeniBarboraKozena());
echo("<br />");
echo($user->getVekBarboraKozena());
echo("<br />");
echo($user->getPohlaviBarboraKozena());
echo("<br />");
echo($user->getPoziceBarboraKozena());

var_dump($user);

?>