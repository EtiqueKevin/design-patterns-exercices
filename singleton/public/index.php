<?php

use App\Config;

require('../vendor/autoload.php');

$conf = Config::getInstance();
# Afficher une valeur contenu dans config.php
echo $conf->get('apiKey') . PHP_EOL;
# Récupérer une seconde instance de Config et vérifié que les deux instances sont identiques
$conf2 = Config::getInstance();
if ($conf === $conf2) {
    echo "Les deux instances sont identiques" . PHP_EOL;
} else {
    echo "Les deux instances sont différentes" . PHP_EOL;
}