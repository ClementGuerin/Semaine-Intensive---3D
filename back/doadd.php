<?php
/**
 * Created by PhpStorm.
 * User: theodoreyip
 * Date: 10/04/2018
 * Time: 12:01
 */
session_start();

if (($_POST['lastName']==='') || ($_POST['firstName']==='') || ($_POST['mail']==='')) {
    header('Location: ../index.php?error=Missing field');
    exit;
}
require_once "includes/connection.php";
$requete = "INSERT INTO 
`info` 
(`lastName`, `firstName`, `mail`) 
VALUES 
(:lastName, :firstName, :mail)
;";
$stmt = $pdo->prepare($requete);
$stmt->bindValue(':lastName', $_POST['lastName']);
$stmt->bindValue(':firstName', $_POST['firstName']);
$stmt->bindValue(':mail', $_POST['mail']);

$stmt->execute();

$_SESSION['form'] = 'success';

header('Location: ../index.php');
