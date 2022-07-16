<?php
$mot = readline('Veillez Entrer Un Mot');
$reverse = $strrev($mot);
if ($mot === $reverse) {
  echo'Ce mot est un palyndrome';
} else {
  echo 'Ce mot n\' est pas un palyndrome';
}
?>