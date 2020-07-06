<?php
    require_once "triangulo.php";

    $tri = new triangulo();
    $tri->setBase($_GET['base']);
    $tri->setAlt($_GET['alt']);
    $tri->area();
    $tri->imprime();