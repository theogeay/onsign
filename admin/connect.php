<?php
/**
 * Created by PhpStorm.
 * User: zerbiclement
 * Date: 05/03/2018
 * Time: 22:16
 */
try {
    $pdo = new PDO('mysql:host=localhost:8889; dbname=Onsign','root','root');
    $pdo->exec('SET NAMES UTF8');
} catch (PDOException $exception) {
    die($exception->getMessage());
}
require_once ('controle-de-session.php');