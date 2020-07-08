<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php 
        session_start();
        $_SESSION['saldo'] = $_GET['saldo'];
        $_SESSION['data'] = $_GET['data'];
        if($_SESSION['saldo']<200){
            header('Location: res.php');
        }
        echo "R$ ".$_SESSION['saldo']."</br>".$_SESSION['data'];

    ?>
    <form action="final.php" method="GET">
        <input type="text" name="saque" placeholder="Digite o quanto quer sacar">
        <input type="text" name="deposito" placeholder="Digite o deposito">
        <input type="text" name="trans" placeholder="Digite o valor para transferir">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>