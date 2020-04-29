<?php
error_reporting(1);
include_once "conecta_bd.php";
session_start();


if ($_SESSION["check"] != "ok") {
    header("location: tipo_cadastro.php");

} 



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ariel Rocha Nogueira - Engenheiro da Computação</title>
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/estilo.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="./js/jquery.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/script.js"></script>
    <script src="./js/jquery.mask.min.js"></script>
</head>

<body>
    <main>
        <div>
            <form id="formfisico" name="formfisico" method="POST">
                <div class="container card card-marg ">
                    <div class="card-body border">
                        <h4 class="card-title">Dados do Cliente</h4>
                        <div class="form-row">
                            <div class="col-sm-1">
                                <label for="">Codigo: </label>
                                <input class="form-control" type="text" name="id_cliente" value="<?php echo $_SESSION['id_cliente'] ?>" readonly>
                            </div>
                            <div class="col-sm-3">
                                <label for="">Nome: </label>
                                <input class="form-control" type="text" name="nome" value="<?php echo $_SESSION['nome'] ?>" id="">
                            </div>
                            <div class="col-sm-4">
                                <label for="">Sobrenome: </label>
                                <input class="form-control" type="text" name="sobrenome" value="<?php echo $_SESSION['nome_2'] ?>" id="">
                            </div>
                            <div class="col-sm-2">
                                <label for="">CPF: </label>
                                <input class="form-control" type="text" name="cpf" id="cpf">
                            </div>
                            <div class="col-sm-2">
                                <label for="">RG: </label>
                                <input class="form-control" type="text" name="rg" id="rg">
                            </div>
                            <div class="col-sm-6">
                                <label for="">Logradouro: </label>
                                <input class="form-control" type="text" name="logradouro" value="<?php echo $_SESSION['logradouro'] ?>" id="">
                            </div>
                            <div class="col-sm-2">
                                <label for="">CEP: </label>
                                <input class="form-control" type="text" name="cep" value="<?php echo $_SESSION['cep'] ?>" id="cep">
                            </div>
                            <div class="col-sm-1">
                                <label for="">Numero: </label>
                                <input class="form-control" type="text" name="num" value="<?php echo $_SESSION['num'] ?>" id="num">
                            </div>
                            <div class="col-sm-3">
                                <label for="">Complemento: </label>
                                <input class="form-control" type="text" name="complemento" value="<?php echo $_SESSION['complemento'] ?>" id="">
                            </div>
                            <div class="col-sm-3">
                                <label for="">Bairro: </label>
                                <select name="id_bairro" class="form-control">
                                    <option value="<?php echo $_SESSION['id_bairro'] ?>">----------</option>
                                </select>
                            </div>
                            <div class="col-sm-3">
                                <label for="">Cidade: </label>
                                <select name="cidade" class="form-control">
                                    <option value="<?php echo $_SESSION['nome_2'] ?>">----------</option>
                                </select>
                            </div>
                            <div class="col-sm-3">
                                <label for="">E-mail: </label>
                                <input class="form-control" type="email" name="email" value="<?php echo $_SESSION['email'] ?>" id="">
                            </div>
                            <div class="col-sm-3">
                                <label for="">Celular: </label>
                                <input class="form-control" type="text" name="cel" value="<?php echo $_SESSION['cel'] ?>" id="celular">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container card card-marg ">
                    <div class="card-body border">
                        <h4 class="card-title">Documentos</h4>
                        <input type="file">
                    </div>
                </div>
                <div class="container card card-marg ">
                    <div class="card-body text-center border">
                        <button class="btn btn-primary col-sm-3">Enviar</button>
                        <a href="logout.php" class="btn btn-danger col-sm-3">Voltar</a>
                        <button type="reset" class="btn btn-warning col-sm-3">Limpar</button>
                    </div>
                </div>
            </form>
        </div>
    </main>
    <script>
        $(document).ready(function() {
            $("#cpf").mask("000.000.000-00")
            $("#rg").mask("00.000.000-00")
            $("#cep").mask("00000-000")
            $("#num").mask("0000")
            $("#celular").mask("(00) 00000-0000")
        });
    </script>
</body>


</html>