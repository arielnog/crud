<?php
include_once 'conecta_bd.php';

$Err_nome = $Err_sobrenome = $Err_logradouro = $Err_cep = $Err_num = $Err_complemento = $Err_email_cliente = $Err_cel_cliente = "";
$nome = $sobrenome = $logradouro = $cep = $num = $complemento = $email_cliente = $cel_cliente = "";

if ($_SERVER["REQUEST_METHOD"] == "POST"){

    $id_cliente = $_POST['id_cliente'];
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $qtd_pares = $_POST['qtd_pares'];
    $tipoPessoa = $_POST['tipoPessoa'];
    $cel_cliente = $_POST['cel_cliente'];
    $email_cliente = $_POST['email_cliente'];
    $complemento = $_POST['complemento'];
    $num = $_POST['num'];
    $cep = $_POST['cep'];
    $id_status = $_POST['id_status'];
    

    $sql = "INSERT INTO 
            clientes (id_cliente,nome,nome_2,logradouro,cep,num,complemento,cidade,id_bairro,email_cliente,cel_cliente)
            VALUES ()";
  
  $data = [
        ':id_cliente' => $id_cliente,
        ':id_status' => $id_status,
        ':qtd_pares' => $qtd_pares,
        ':id_bairro' => $id_bairro,
        ':tipoPessoa' => $tipoPessoa,
        ':cel_cliente' => $cel_cliente,
        ':email_cliente' => $email_cliente,
        ':complemento' => $complemento,
        ':num' => $num,
        ':cep' => $cep,
        ':sobrenome' => $sobrenome,
        ':nome' => $nome,
    ];

    $stmt= $conn->prepare($sql);
    $stmt->execute($data);

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
        <form method="POST">
            <div class="container card card-marg">
                <div class="card-body border">
                    <h4 class="card-title">Tipo Pessoa</h4>
                    <div class="form-row">
                        <div class="radio-form">
                            <label>Pessoa Fisica: </label>
                            <input type="radio" name="tipoPessoa" value="1">
                        </div>
                        <div class="radio-form">
                            <label>Pessoa Juridica: </label>
                            <input type="radio" name="tipoPessoa" value="2">
                        </div>
                    </div>
                </div>
            </div>
            <div class="container card card-marg ">
                <div class="card-body border">
                    <h4 class="card-title">Novos Usuários</h4>
                    <div class="form-row">
                        <div class="col-sm-2">
                            <label for="">Codigo: </label>
                            <input class="form-control" value="<?php echo uniqid() ?>" type="text" name="id_cliente" readonly>
                        </div>
                        <div class="col-sm-3">
                            <label for="">Nome: </label>
                            <input class="form-control" type="text" name="nome" id="">
                        </div>
                        <div class="col-sm-4">
                            <label for="">Sobrenome: </label>
                            <input class="form-control" type="text" name="sobrenome" id="">
                        </div>
                        <div class="col-sm-3">
                            <label for="">Quantidade de Pares: </label>
                            <select class="form-control" name="qtd_pares">
                                <option value="1">Acima de 35 Pares</option>
                                <option value="2">Abaixo de 35 Pares</option>
                            </select>
                        </div>
                        <div class="col-sm-6">
                            <label for="">Logradouro: </label>
                            <input class="form-control" type="text" name="logradouro">
                        </div>
                        <div class="col-sm-2">
                            <label for="">CEP: </label>
                            <input class="form-control" type="text" name="cep">
                        </div>
                        <div class="col-sm-1">
                            <label for="">Numero: </label>
                            <input class="form-control" type="text" name="num">
                        </div>
                        <div class="col-sm-3">
                            <label for="">Complemento: </label>
                            <input class="form-control" type="text" name="complemento">
                        </div>
                        <div class="col-sm-3">
                            <label for="">Bairro: </label>
                            <select name="id_bairro" class="form-control">
                                <option value="1">----------</option>
                            </select>
                        </div>
                        <div class="col-sm-3">
                            <label for="">Cidade: </label>
                            <select name="cidade" class="form-control">
                                <option value="">----------</option>
                                <option value="">----------</option>
                                <option value="">----------</option>
                            </select>
                        </div>
                        <div class="col-sm-3">
                            <label for="">E-mail: </label>
                            <input class="form-control" type="email" name="email_cliente">
                        </div>
                        <div class="col-sm-3">
                            <label for="">Celular: </label>
                            <input class="form-control" type="text" name="cel_cliente">
                        </div>
                    </div>
                </div>
            </div>

            <div class="container card card-marg ">
                <div class="card-body text-center border">
                    <button type="submit" class="btn btn-primary col-sm-3">Enviar</button>
                    <a href="tipo_cadastro.html" class="btn btn-danger col-sm-3">Voltar</a>
                    <button type="reset" class="btn btn-warning col-sm-3">Limpar</button>
                </div>
            </div>
        </form>

    </main>
    <script src="./js/jquery.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/script.js"></script>
</body>

</html>