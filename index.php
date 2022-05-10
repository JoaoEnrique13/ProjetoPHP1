<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="css/bootstrap-4.1.3-dist/css/bootstrap.css">
</head>
<body>
    <form action="controller/controllerPessoa.php" method="post">
        <table>
            <tr>
                <td>
                    <label for="txtNome">Nome:</label>
                    
                </td>
                <td>
                    <input class="form-control" type="text" name="txtNome" id="txtNome">
                </td>
                <tr>
                    <td>
                        <label for="txtEnd">Endereço:</label>
                    </td>
                    <td>
                        <input class="form-control" type="text" name="txtEnd" id="txtEnd">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <button class="btn btn-primary">Cadastrar</button>
                    </td>
                </tr>
            </tr>
        </table>
    </form>
</body>
</html>