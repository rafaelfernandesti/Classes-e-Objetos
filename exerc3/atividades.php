<?php
session_start();
    class atividades{
        public function saque($argSaque){
            $_SESSION['saldo'] =  $_SESSION['saldo'] - $argSaque;
        }
        public function deposito($argDeposito){
            $_SESSION['saldo'] =  $_SESSION['saldo'] + $argDeposito;
        }
        public function trans($argTrans){
            $_SESSION['saldo'] =  $_SESSION['saldo'] - $argTrans;
        }
    }