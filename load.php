<?php

namespace InsertIntoHTL\sql_save_load;

use Doctrine\DBAL\DriverManager;

require_once "vendor/autoload.php";

$connectionParams = array(
    'url' => 'mysql://root:@localhost/sql_save_load',
);

$conn = \Doctrine\DBAL\DriverManager::getConnection($connectionParams);

$queryBuilder = $conn->createQueryBuilder();


$ergebnis = $queryBuilder
    ->select('id', 'name')
    ->from('Person')
    ->execute()
    ->fetchAll();

foreach ($ergebnis as $person) {
    echo new Person($person["id"], $person["name"]);
}
