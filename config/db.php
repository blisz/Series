<?php
/**
 * Created by JetBrains PhpStorm.
 * User: josep
 * Date: 13/09/13
 * Time: 16:21
 * To change this template use File | Settings | File Templates.
 */

$dsn = 'mysql:dbname=db_series;host=localhost';
$user = 'root';
$password = '';


try {
    $db = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}