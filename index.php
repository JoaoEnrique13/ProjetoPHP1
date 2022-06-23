<?php

// if($_GET['txtNome'] != "")
// {
// echo $_GET['txtNome'];
// }

// if(isset($_GET['txtNome']))
// {
//     echo $_GET['txtNome'];
// }

?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <title>Formulário</title>
        <style>
            input{border-color: #00206080!important; border-radius: 5px; padding: 5px;}
            button{color: #002060!important; border: 1px solid #00206080!important; margin-top: 20px; cursor:pointer; border-radius: 5px; padding: 10px; font-weight: 600;}
            button:hover{background: #002060; color:#fff!important;}
        </style>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body style="display: flex!important;  justify-content: center; min-height: 100vh; align-items: center;  padding: 0 400px!important;">
    
        <div class="container">
            <div class="row">
                <div class="col">
                <h1 class="text-center">Cadastro Pessoa Física</h1>

                    <form method="GET" action="controller.php">
                        <label for="lblNome">Nome: </label><br/>
                        <input id="lblNome" class="form-control" type="text" name="txtNome"><br/><br/>

                        <label for="lblEndereco">Endereço</label><br/>
                        <input id="lblEndereco" class="form-control" type="text" name="txtEndereco"><br/><br/>

                        <label for="lblBairro">Bairro: </label><br/>
                        <input id="lblBairro" class="form-control" type="text" name="txtBairro"><br/><br/>

                        <label for="lblCep">Cep: </label><br/>
                        <input id="lblCep" class="form-control" type="text" name="txtCep"><br/>
                        
                        <button class="btn">Cadastrar</button>
                    </form>

                </div>
            </div>
        </div>
        
        
    </body>
</html>
