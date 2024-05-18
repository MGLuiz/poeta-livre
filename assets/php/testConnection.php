<?php
    require "ConnectionFactory.php";

    $c = new ConnectionFactory();
    var_dump($c->readDBCredentials());
?>