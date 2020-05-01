<?php
error_reporting(1);
include_once "conecta_bd.php";
session_start();

$id_cliente = $_SESSION['id_cliente'];
$id_teste = $_SESSION['id_bairro'];

if ($_SESSION["check"] != "ok" || $_SESSION["status"] == "Atendido") {
    echo "<script>
    alert('Cliente já atendido e com dados atualizados!');
    location.href = 'index.php';
    </script>";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $cpf_cnpj = $_POST['cpf_cnpj'];
    $rg_ie = $_POST['rg_ie'];

    $sql = "UPDATE novo_cliente SET rg_ie='$rg_ie', cpf_cnpj = '$cpf_cnpj', status='Atendido' WHERE id_cliente='$id_cliente'  ";
    $stt = $conn->prepare($sql);
    $stt->execute();
    $rows = $stt->fetch(PDO::FETCH_ASSOC);

    echo "<script>
    alert('Dados atualizados!');
    location.href = 'index.php';
    </script>";
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Atualização de Cadastro</title>
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
            <form method="POST">
                <div class="container card card-marg ">
                    <div class="card-body border">
                        <h4 class="card-title">Dados do Cliente</h4>
                        <div class="form-row">
                            <input class="form-control" type="hidden" name="id_cliente" value="<?php echo $_SESSION['id_cliente'] ?>" disabled>
                            <?php 
                            if ($_SESSION['tipoPessoa'] == "Fisica") {
                            ?>
                                <div class="col-sm-4">
                                    <label for="">Nome: </label>
                                    <input class="form-control" type="text" name="nome" value="<?php echo $_SESSION['nome'] ?>" id="" disabled>
                                </div>
                                <div class="col-sm-4">
                                    <label for="">Sobrenome: </label>
                                    <input class="form-control" disabled type="text" name="sobrenome" value="<?php echo $_SESSION['nome_2'] ?>" id="">
                                </div>
                                <div class="col-sm-2">
                                    <label for="">CPF: </label>
                                    <input class="form-control" type="text" name="cpf_cnpj" id="cpf">
                                </div>
                                <div class="col-sm-2">
                                    <label for="">RG: </label>
                                    <input class="form-control" type="text" name="rg_ie" id="rg">
                                </div>
                            <?php } else { ?>
                                <div class="col-sm-4">
                                    <label for="">Razão Social: </label>
                                    <input class="form-control" type="text" name="nome" disabled value="<?php echo $_SESSION['nome'] ?>" id="">
                                </div>
                                <div class="col-sm-4">
                                    <label for="">Nome Fantasia: </label>
                                    <input class="form-control" type="text" name="sobrenome" disabled value="<?php echo $_SESSION['nome_2'] ?>" id="">
                                </div>
                                <div class="col-sm-2">
                                    <label for="">CNPJ: </label>
                                    <input class="form-control" type="text" name="cpf_cnpj" id="cnpj">
                                </div>
                                <div class="col-sm-2">
                                    <label for="">Inscrição Estadual: </label>
                                    <input class="form-control" type="text" name="rg_ie" id="ie">
                                </div>
                            <?php }; ?>
                            <div class="col-sm-6">
                                <label for="">Logradouro: </label>
                                <input class="form-control" type="text" name="logradouro" disabled value="<?php echo $_SESSION['logradouro'] ?>" id="">
                            </div>
                            <div class="col-sm-2">
                                <label for="">CEP: </label>
                                <input class="form-control" type="text" name="cep" disabled value="<?php echo $_SESSION['cep'] ?>" id="cep">
                            </div>
                            <div class="col-sm-1">
                                <label for="">Numero: </label>
                                <input class="form-control" type="text" disabled name="num" value="<?php echo $_SESSION['num'] ?>" id="num">
                            </div>
                            <div class="col-sm-3">
                                <label for="">Complemento: </label>
                                <input class="form-control" type="text" disabled name="complemento" value="<?php echo $_SESSION['complemento'] ?>" id="">
                            </div>
                            <div class="col-sm-3">
                                <label for="">Bairro: </label>
                                <div>
                                    <?php


                                    $sql_2 = "SELECT * FROM bairro WHERE id_bairro='$id_teste'  ";
                                    $stt = $conn->prepare($sql_2);
                                    $stt->execute();
                                    $results = $stt->fetchAll(PDO::FETCH_ASSOC);?>
                                        <select disabled name="id_bairro" required class="form-control">
                                            <?php foreach ($results as $row) { ?>
                                                <option> <?php echo $row['nome_bairro'] ?> </option>
                                            <?php } ?>
                                        </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label for="">Cidade: </label>
                                <select disabled name="cidade" required class="form-control">
                                    <option value=""><?php echo $_SESSION['cidade'] ?></option>
                                </select>
                            </div>
                            <div class="col-sm-3">
                                <label for="">E-mail: </label>
                                <input disabled class="form-control" type="email" name="email" value="<?php echo $_SESSION['email'] ?>" id="">
                            </div>
                            <div class="col-sm-3">
                                <label for="">Celular: </label>
                                <input disabled class="form-control" type="text" name="cel" value="<?php echo $_SESSION['cel'] ?>" id="celular">
                            </div>
                        </div>
                    </div>
                </div>
                <!--
                <div class="container card card-marg ">
                    <div class="card-body border">
                        <h4 class="card-title">Documentos</h4>
                        <input type="file">
                    </div>
                </div>
                    -->
                <div class="container card card-marg ">
                    <div class="card-body text-center border">
                        <button type="submit" class="btn btn-primary col-sm-3">Enviar</button>
                        <a href="logout_2.php" class="btn btn-danger col-sm-3">Voltar</a>
                    </div>
                </div>
            </form>
        </div>
    </main>
    <script>
        $(document).ready(function() {
            $("#cpf").mask("000.000.000-00")
            $("#rg").mask("00.000.000-00")
            $("#cnpj").mask("00.000.000/0000-00")
            $("#ie").mask("000.000.000")
            $("#cep").mask("00000-000")
            $("#num").mask("0000")
            $("#celular").mask("(00) 00000-0000")
        });
    </script>
</body>


</html>