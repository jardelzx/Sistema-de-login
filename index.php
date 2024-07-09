<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
        body {
            background-color: #082742; 
           
        }

        .login {
            height: 100vh; 
            display: flex;
            align-items: center;
            justify-content: center; 
        }

        .card {
            width: 100%;
        }
    </style>
</head>
<body>
   <div class="login">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 offset-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h3 class="text-center mb-4">Acesso Restrito</h3>
                        <form action="login.php" method="POST">
                            <div class="form-group">
                                <label for="usuario">Usuário</label>
                                <input type="text" id="usuario" name="usuario" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="senha">Senha</label>
                                <input type="password" id="senha" name="senha" class="form-control">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block">Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
