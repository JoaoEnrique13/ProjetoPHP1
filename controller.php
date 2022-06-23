<?php 
    class PegarValor{
        public function setName($name){
            $this->name = $name;
        }
        public function getName(){
            return $this->name;
        }

        public function setEndereco($endereco){
            $this->endereco = $endereco;
        }
        public function getEndereco(){
            return $this->endereco;
        }

        public function setBairro($bairro){
            $this->bairro = $bairro;
        }
        public function getBairro(){
            return $this->bairro;
        }

        public function setCep($cep){
            $this->cep = $cep;
        }
        public function getCep(){
            return $this->cep;
        }
    }

    $pegarvalor = new PegarValor();
    $pegarvalor->setName($_GET['txtNome']);
    $pegarvalor->setEndereco($_GET['txtEndereco']);
    $pegarvalor->setBairro($_GET['txtBairro']);
    $pegarvalor->setCep($_GET['txtCep']);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=op, initial-scale=1.0">
    <title>Controller</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body style="display: flex!important;  justify-content: center; min-height: 100vh; align-items: center;">

    <div class="container">
        <table class="table table-dark">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Endereço</th>
                <th scope="col">Bairro</th>
                <th scope="col">Cep</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td><?php echo $pegarvalor->getName();?></td>
                    <td><?php echo $pegarvalor->getEndereco();?></td>
                    <td><?php echo $pegarvalor->getBairro();?></td>
                    <td><?php echo $pegarvalor->getCep();?></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
