<?php
require('../vendor/autoload.php');

use App\MySQLQueryBuilder as MySQLQueryBuilder;
use App\LitteralQueryBuilder as LitteralQueryBuilder;

# TODO: Creer un QueryBuilder
# Ecrire une requête en chainant des methodes
# Afficher la requête

$query = (new MySQLQueryBuilder())
    ->select(['name', 'email', 'age'])
    ->from('users')
    ->where('age', '18', '>=')
    ->where('status', "'active'", '=', 'AND')
    ->where('role', "'admin'", '=', 'OR')
    ->orderBy('name', 'DESC')
    ->getQuery();

echo $query;
echo "\n";

$query = (new LitteralQueryBuilder())
    ->select(['name', 'email', 'age'])
    ->from('utilisateur')
    ->where('age', '18', '>=')
    ->where('status', "'active'", '=', 'et')
    ->where('role', "'admin'", '=', 'ou')
    ->orderBy('name', 'déscendant')
    ->getQuery();

echo $query;
echo "\n";