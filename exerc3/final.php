<?php
    require_once "atividades.php";
    $at = new atividades();
    $at->saque($_GET['saque']);
    $at->deposito($_GET['deposito']);
    $at->trans($_GET['trans']);
    if($_SESSION['saldo']<200){
        echo "ERRO! SEU SALDO NÃO PODE SER MENOR QUE R$200";
    }else if($_SESSION['saldo']>=200){
        header('Location: oper2.php');
    }
?>