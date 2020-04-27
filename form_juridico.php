<?php
error_reporting(1);
include_once "conecta_bd.php";
session_start();

if ($_SESSION["check"] != "ok") {
    header("location: tipo_cadastro.php");
}else if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $tipoPessoa = $_SESSION['tipoPessoa'];
    $id_cliente = $_POST['id_cliente'];
    $razaosocial = $_POST['razaosocial'];
    $n_fantasia = $_POST['n_fantasia'];
    $cnpj = $_POST['cnpj'];
    $ie = $_POST['ie'];
    $logradouro  = $_POST['logradouro'];
    $cep = $_POST['cep'];
    $num = $_POST['num'];
    $complemento = $_POST['complemento'];
    $id_bairro = $_POST['id_bairro'];
    $cidade = $_POST['cidade'];
    $email_cliente = $_POST['email'];
    $cel_cliente = $_POST['cel'];

    $sql = "INSERT INTO `juridico`(`tipoPessoa`, `id_cliente`, `razaosocial`, `n_fantasia`, `cnpj`, `ie`, `logradouro`, `cep`, `num`, `complemento`, `id_bairro`, `cidade`, `cel`, `email`
            VALUES (:tipoPessoa,  :id_cliente, :razaosocia, :n_fantasia, :cnpj, :ie, :logradouro, :cep, :num, :complemento, :id_bairro, :cidade, :cel, :email)";

    $stmt = $conn->prepare($sql);
    if ($pdoExec = $stmt->execute(array(
        ':tipoPessoa' => "$tipoPessoa",
        ':id_cliente' => $id_cliente,
        ':razaosocial' => $razaosocial,
        ':n_fantasia' => $n_fantasia,
        ':cnpj' => $cnpj,
        ':ie' => $ie,
        ':logradouro' => $logradouro,
        ':cep' => $cep,
        ':num' => $num,
        ':complemento' => $complemento,
        ':id_bairro' => $id_bairro,
        ':cidade' => $cidade,
        'email' => $email_cliente,
        ':cel' => $cel_cliente
    ))) {
        echo "<script>
            alert('Usuario Cadastrado com Sucesso!');
            location.href = 'tipo_cadastro.php';
            </script>";
    };
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
            <form action="">
                <div class="radio-select">

                </div>
                <div id="tipoPessoajuridico">
                    <div class="container card card-marg">
                        <div class="card-body border">
                            <h4 class="card-title">Dados da Empresa</h4>
                            <div class="form-row">
                                <div class="col-sm-1">
                                    <label for="">Codigo: </label>
                                    <input class="form-control" type="text" name="id_cliente" value="<?php echo $_SESSION['id_cliente'] ?>" readonly>
                                </div>
                                <div class="col-sm-4">
                                    <label for="">Razão Social: </label>
                                    <input class="form-control" type="text" name="razaosocial" value="<?php echo $_SESSION['nome'] ?>" id="">
                                </div>
                                <div class="col-sm-3">
                                    <label for="">Nome Fantasia: </label>
                                    <input class="form-control" type="text" name="n_fantasia" value="<?php echo $_SESSION['nome_2'] ?>" id="">
                                </div>
                                <div class="col-sm-2">
                                    <label for="">Cnpj: </label>
                                    <input class="form-control" type="text" name="cnpj" id="cnpj">
                                </div>
                                <div class="col-sm-2">
                                    <label for="">Inscrição Estadual: </label>
                                    <input class="form-control" type="text" name="ie" id="ie">
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
                                    <input class="form-control" type="text" value="<?php echo $_SESSION['num'] ?>" name="num" id="num">
                                </div>
                                <div class="col-sm-3">
                                    <label for="">Complemento: </label>
                                    <input class="form-control" type="text" name="complemento" value="<?php echo $_SESSION['complemento'] ?>" id="">
                                </div>
                                <div class="col-sm-3">
                                    <label for="">Bairro: </label>
                                    <select name="id_bairro" class="form-control" readonly>
                                        <option value="">------a---</option>
                                        <option value="">------b---</option>
                                        <option value="">------c---</option>
                                    </select>
                                </div>
                                <div class="col-sm-3">
                                    <label for="">Cidade: </label>
                                    <select name="cidade" class="form-control" readonly>
                                        <option value="">----a-----</option>
                                        <option value="">-----b----</option>
                                        <option value="">------c---</option>
                                    </select>
                                </div>
                                <div class="col-sm-3">
                                    <label for="">E-mail: </label>
                                    <input class="form-control" type="email" value="<?php echo $_SESSION['email'] ?>" name="email" id="">
                                </div>
                                <div class="col-sm-3">
                                    <label for="">Celular: </label>
                                    <input class="form-control" type="text" value="<?php echo $_SESSION['cel'] ?>" name="cel" id="celular">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--<div class="container card card-marg ">
                        <div class="card-body border">
                            <h4>Dados dos Sócios</h4>
                            <div class="form-row">
                                <div class="col-sm-6">
                                    <label for="">Nome do Sócio: </label>
                                    <input class="form-control" type="text" name="" id="">
                                </div>
                                <div class="col-sm-6">
                                    <label for="">CPF: </label>
                                    <input class="form-control" type="text" name="" id="cpf">
                                </div>
                                <div class="col-sm-6">
                                    <label for="">Logradouro: </label>
                                    <input class="form-control" type="text" name="" id="">
                                </div>
                                <div class="col-sm-2">
                                    <label for="">CEP: </label>
                                    <input class="form-control" type="text" name="" id="cep">
                                </div>
                                <div class="col-sm-1">
                                    <label for="">Numero: </label>
                                    <input class="form-control" type="text" name="" id="num">
                                </div>
                                <div class="col-sm-3">
                                    <label for="">Complemento: </label>
                                    <input class="form-control" type="text" name="" id="">
                                </div>
                                <div class="col-sm-3">
                                    <label for="">Bairro: </label>
                                    <select class="form-control">
                                        <option value="">----------</option>
                                        <option value="">----------</option>
                                        <option value="">----------</option>
                                    </select>
                                </div>
                                <div class="col-sm-3">
                                    <label for="">Cidade: </label>
                                    <select class="form-control">
                                        <option value="">----------</option>
                                        <option value="">----------</option>
                                        <option value="">----------</option>
                                    </select>
                                </div>
                                <div class="col-sm-3">
                                    <label for="">E-mail: </label>
                                    <input class="form-control" type="email" name="" id="">
                                </div>
                                <div class="col-sm-3">
                                    <label for="">Celular: </label>
                                    <input class="form-control" type="text" name="" id="celular">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container card card-marg ">
                        <div class="card-body border">
                            <input type="file">
                        </div>
                    </div>
                </div>-->
                <div class="container card card-marg ">
                    <div class="card-body text-center border">
                        <button class="btn btn-primary col-sm-3">Enviar</button>
                        <a href="logout.php" class="btn btn-danger col-sm-3">Voltar</a>
                        <button type="reset" class="btn btn-warning col-sm-3">Limpar</button>
                    </div>
                </div>
        </div>
        </form>
        </div>
    </main>
    <script>
        $(document).ready(function() {
            $("#cnpj").mask("00.000.000/0000-00")
            $("#ie").mask("000.000.000")
            $("#cpf").mask("000.000.000-00")
            $("#rg").mask("00.000.000-00")
            $("#cep").mask("00000-000")
            $("#celular").mask("(00) 00000-0000")
        });
    </script>
</body>


</html>