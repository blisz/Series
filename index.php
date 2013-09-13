<?php
/**
 * Created by JetBrains PhpStorm.
 * User: josep
 * Date: 13/09/13
 * Time: 15:35
 * To change this template use File | Settings | File Templates.
 */

require_once 'vendor/autoload.php';
require_once 'config/db.php';

$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader);

try {
    $sql = "SELECT * FROM series";
    $stmt = $db->query($sql); // Simple, but has several drawbacks

    $row = $stmt->fetchAll(PDO::FETCH_ASSOC);


    $data = array('series' => $row);

    $tpl = $twig->loadTemplate("index.twig");
    $tpl->display($data);


} catch (PDOException $e) {
    echo 'Query error: '. $e->getMessage();
}