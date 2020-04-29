<?php
include_once 'conecta_bd.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id_cliente = $_POST["id_cliente"];

    $sql = "SELECT * 
            FROM novo_cliente 
            where id_cliente='$id_cliente'";

    $stmt = $conn->prepare($sql);
    $stmt->execute(array(':id_cliente' => "$id_cliente"));
    $retorno = $stmt->fetch();
    if ($stmt->rowCount() > 0) {

        session_start();

        $_SESSION['check'] = "ok";
        $_SESSION['tipoPessoa'] = $retorno['tipoPessoa'];
        $_SESSION['id_cliente'] = $retorno['id_cliente'];
        $_SESSION['nome'] = $retorno['nome'];
        $_SESSION['nome_2'] = $retorno['nome_2'];
        $_SESSION['qtd_pares'] = $retorno['qtd_pares'];
        $_SESSION['logradouro'] = $retorno['logradouro'];
        $_SESSION['cep'] = $retorno['cep'];
        $_SESSION['num'] = $retorno['num'];
        $_SESSION['complemento'] = $retorno['complemento'];
        $_SESSION['id_bairro'] = $retorno['id_bairro'];
        $_SESSION['cidade'] = $retorno['cidade'];
        $_SESSION['email'] = $retorno['email'];
        $_SESSION['cel'] = $retorno['cel'];

        header("location:form_atentidos.php");

    }else {
        echo "<script>
        alert('Código não encontrado na base de dados!');
        location.href = 'tipo_cadastro.php';
        </script>";
    }

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
</head>

<body>
    <main>
        <div class="container">
            <div class="card card-marg">
                <div class="card-body text-center">
                    <div class="border">
                        <div id="border-radio" class="col-sm-12">
                            <div class="">
                                <input class="" type="radio" name="atendimento" value="one">
                                <label class="" for="one">
                                    Primeiro Acesso?
                                </label>
                            </div>
                            <div class="">
                                <input class="" type="radio" name="atendimento" value="two">
                                <label class="" for="two">
                                    Ja tive antedimento!
                                </label>
                                <small class="form-text text-muted">Se for um representante, <a href="login.php">clique aqui</a> para ter acesso ao portal de clientes. </small>
                            </div>
                        </div>
                    </div>
                    <div id="atendimentoone" class="form-group row desc">
                        <div id="btn" class="col-sm-12">
                            <a href="form_novos.php" class="btn btn-primary">Continuar</a>
                            <button class="btn btn-danger">Voltar</button>
                        </div>
                    </div>

                    <div id="atendimentotwo" class="form-group row desc">
                        <form method="POST">
                            <div id="atendimento" class="border">
                                <input type="text" required class="form-control" name="id_cliente" placeholder="Informe o seu codigo de cadastro.">
                                <small class="form-text text-muted">Este codigo seu representante irá te informar para continuar o cadastro.</small>
                            </div>
                            <div id="btn" class="col-sm-12">
                                <button type="submit" class="btn btn-primary">Continuar</button>
                                <button class="btn btn-danger">Voltar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </main>
</body>
<script src="./js/jquery.js"></script>
<script src="./js/bootstrap.min.js"></script>
<script src="./js/script.js"></script>

</html>