<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sis Old - Cadastro Idoso</title>

    <?php require_once('_header.php'); ?>

        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Cadastrar Idoso
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> Cadastrar Idoso
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-6">

                        <form role="form" method="POST" action="" id="form" onsubmit="return verificaIdoso(this);">
                            <div class="form-group">
                                <label>CPF:</label>
                                <input type="text" class="form-control" id="cpf" name="cpf" placeholder="CPF">
                            </div>

                            <div class="form-group">
                                <label>Nome:</label>
                                <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome">
                            </div>

                            <div class="form-group">
                                <label>Data de Nascimento:</label>
                                <input type="text" class="form-control" id="data_nascimento" name="data_nascimento" placeholder="Data de Nascimento">
                            </div>

                            <div class="form-group">
                                <label>Nome Contato:</label>
                                <input type="text" class="form-control" id="nome_contato" name="nome_contato" placeholder="Nome Contato">
                            </div>

                            <div class="form-group">
                                <label>Grau de Parentesco:</label>
                                <input type="text" class="form-control" id="grau_parentesco" name="grau_parentesco" placeholder="Grau de Parentesco">
                            </div>

                            <div class="form-group">
                                <label>Telefone de Contato:</label>
                                <input type="text" class="form-control" id="telefone_contato" name="telefone_contato" placeholder="Telefone de Contato">
                            </div>

                            <div class="form-group">
                                <label>Celular de Contato:</label>
                                <input type="text" class="form-control" id="celular_contato" name="celular_contato" placeholder="Celular de Contato">
                            </div>

                            <div class="form-group">
                                <label>Necessidades Especiais</label>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="necessidades_especiais" id="ns_sim" value="1">Sim
                                    </label>
                                    <label>
                                        <input type="radio" name="necessidades_especiais" checked id="ns_nao" value="0">Nao
                                    </label>
                                </div>
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