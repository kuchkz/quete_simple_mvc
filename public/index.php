<?php
// chargement de l'autoload en début de fichier
use Controller\ItemController;
require __DIR__ . '/../vendor/autoload.php';

$viewresult = new ItemController();
$viewresult->index();
//...
?>
