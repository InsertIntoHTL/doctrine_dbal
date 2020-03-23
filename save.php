<?php

namespace InsertIntoHTL\sql_save_load;

use Doctrine\DBAL\DriverManager;

require_once "vendor/autoload.php";

$connectionParams = array(
    'url' => 'mysql://root:@localhost/sql_save_load',
);

$conn = \Doctrine\DBAL\DriverManager::getConnection($connectionParams);

$queryBuilder = $conn->createQueryBuilder();

echo 'Connection Succesful';

$username = $_GET["name"];

$queryBuilder
    ->insert('person')
    ->values(
        array(
            'ID' => '?',
            'Name' => '?'
        )
    )
    ->setParameter(0, null)
    ->setParameter(1, $username)
    ->execute()
;

header('Location: load.php');





