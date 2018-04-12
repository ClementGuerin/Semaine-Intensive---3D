<?php
/**
 * Created by PhpStorm.
 * User: theodoreyip
 * Date: 10/04/2018
 * Time: 12:05
 */

require_once "includes/connection.php";
$requete = "SELECT 
  `lastName`, 
  `firstName`, 
  `mail`
FROM 
  `info`
;";
$stmt = $pdo->prepare($requete);
$stmt->execute();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <table>
    <?php

    while(false !== $row = $stmt->fetch(PDO::FETCH_ASSOC)):
        ?>
        <tr>
            <td><?=$row['lastName']?></td>
            <td><?=$row['firstName']?></td>
            <td><?=$row['mail']?></td>
            <td><?=$row['date']?></td>

        </tr>
    <?php endwhile;?>
    </table>
    <a href="../index.php"><button> « </button></a>

</body>
</html>