<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php 
    session_start();
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