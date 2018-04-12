<?php
/**
 * Created by PhpStorm.
 * User: theodoreyip
 * Date: 10/04/2018
 * Time: 12:01
 */

if (($_POST['lastName']==='') || ($_POST['firstName']==='') || ($_POST['mail']==='')) {
    header('Location: ../index.php?error=Missing field');
    exit;
}
require_once "includes/connection.php";
$requete = "INSERT INTO 
`info` 
(`lastName`, `firstName`, `mail`, `date`) 
VALUES 
(:lastName, :firstName, :mail, :date)
;";
$stmt = $pdo->prepare($requete);
$stmt->bindValue(':lastName', $_POST['lastName']);
$stmt->bindValue(':firstName', $_POST['firstName']);
$stmt->bindValue(':mail', $_POST['mail']);
$stmt->bindValue(':date', $_POST['date']);

$stmt->execute();
