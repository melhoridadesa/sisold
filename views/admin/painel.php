<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sis Old - Sistema de Gestao para Idosos</title>

    <?php require_once('_header.php'); ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Sis Old - Sistema de Gestao para Idosos
                        </h1>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-clock-o fa-fw"></i> Idosos Cadastrados</h3>
                            </div>
                            <div class="panel-body">
                                <div class="list-group">
                                    <div class="list-group-item">
                                        <a href="#" class="badge" style="background-color: red;" onclick="confirm('Tem certeza que deseja excluir esse registro?');">Excluir</a>
                                        <a href="#" class="badge">Editar</a>
                                        <i class="fa fa-fw fa-user"></i> Nome do Idoso cadastrado
                                    </div>
                                </div>
                                <div class="text-right">
                                    <a href="cadastroIdoso.php">Cadastrar Idoso <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
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