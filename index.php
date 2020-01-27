<?php

use mimmarcelo\doctrine\helper\EntityManagerFactory;

require_once './vendor/autoload.php';

$factory = new EntityManagerFactory();
$entityManager = $factory->getEntityManager();
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
            <?php
            var_dump($entityManager->getConnection());
            ?>
        </pre>
    </body>
</html>
