<?php
require_once("../model/pessoa.class.php");

$pessoa = new Pessoa();
$pessoa->setNome($_POST['txtNome']);
$pessoa->setEnd($_POST['txtEnd']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap-4.1.3-dist/css/bootstrap.css">

</head>
<body>
    <p><?php echo $pessoa->getNome();?></p>
    <p><?php echo $pessoa->getEnd();?></p>
</body>
</html>