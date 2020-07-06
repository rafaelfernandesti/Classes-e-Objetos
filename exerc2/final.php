<?php
    require_once "notas.php";

    $aluno1 = new Notas();
    $aluno1->setNota1($_GET['nota1/1']);
    $aluno1->setNota2($_GET['nota2/1']);
    $aluno1->setNota3($_GET['nota3/1']);
    $aluno1->setNota4($_GET['nota4/1']);
    $aluno1->media();

    $aluno2 = new Notas();
    $aluno2->setNota1($_GET['nota1/2']);
    $aluno2->setNota2($_GET['nota2/2']);
    $aluno2->setNota3($_GET['nota3/2']);
    $aluno2->setNota4($_GET['nota4/2']);
    $aluno2->media();