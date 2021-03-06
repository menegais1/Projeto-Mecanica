<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="../css/AdminLTE.min.css">
    <link rel="stylesheet" href="../css/skin-red.min.css">

    <link rel="stylesheet" href="../css/styles.css">
    <script src="../js/jquery-3.2.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</head>
<body class="login-page">
<div class="overlay"></div>
<div class="overlay-children">
    <div class="container-fluid">
        <div class="row">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <br>

                    <h1 class="text-center titulo">Projeto Mecânica</h1>
                </div>
            </div>
            <div class="col-md-6 col-md-offset-3  margin-top">
                <div class="login-form center-block bordered">
                    <h2 class="text-center">Faça seu Login</h2>
                    <br>
                    <form class="form-group">
                        <label class="control-label" for="login">Nome de Usuário</label>
                        <input type="text" class="form-control" name="login" id="login"
                               placeholder="Insira seu Nome de Usuário">
                        <label class="control-label" for="password">Senha</label>
                        <input type="text" class="form-control" name="password" id="password"
                               placeholder="Insira sua senha">

                        <input type="submit" class="btn btn-success btn-block form-control" value="Log in">
                    </form>
                    <button data-toggle="modal" data-target="#myModal" class="btn btn-danger btn-block cadastro">Não tem
                        Conta? Cadastre-se
                    </button>
                </div>


                <div id="myModal" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Cadastre-se</h4>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="cadastro-form">
                                        <form class="form-group">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label class="control-label" for="name">Nome</label>
                                                    <input type="text" class="form-control" name="name" id="name"
                                                           placeholder="Insira seu Nome">
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="control-label" for="login">Login</label>
                                                    <input type="text" class="form-control" name="login" id="login"
                                                           placeholder="Insira seu Login">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label class="control-label" for="password">Senha</label>
                                                    <input type="text" class="form-control" name="password"
                                                           id="password"
                                                           placeholder="Insira sua senha">
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="control-label" for="passwordConfirmation">Confirmação
                                                        da Senha</label>
                                                    <input type="text" class="form-control" name="passwordConfirmation"
                                                           id="passwordConfirmation"
                                                           placeholder="Confirme sua senha">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 col-md-offset-3">
                                                    <input type="submit" class="btn btn-success btn-block form-control cadastro"
                                                           value="Cadastrar">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>