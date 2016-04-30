<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sis Old - Cadastro Usuario</title>

    <?php require_once('_header.php'); ?>

        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Cadastrar Usuario
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> Cadastrar Usuario
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-6">

                        <form role="form" method="POST" action="" id="form" onsubmit="return verificaUser(this);">
                            <div class="form-group">
                                <label>Nome:</label>
                                <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome">
                            </div>

                            <div class="form-group">
                                <label>Email:</label>
                                <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                            </div>

                            <div class="form-group">
                                <label>Senha:</label>
                                <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha">
                            </div>

                            <div class="form-group">
                                <label>Confirmar Senha:</label>
                                <input type="password" class="form-control" id="confirmaSenha" name="confirmaSenha" placeholder="Confirmar Senha">
                            </div>

                            <div class="form-group">
                                <label>CPF:</label>
                                <input type="text" class="form-control" id="cpf" name="cpf" placeholder="CPF">
                            </div>

                            <button type="submit" name="submit" class="btn btn-default">Cadastrar</button>
                        </form>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php require_once('_footer.php'); ?>

</body>

</html>