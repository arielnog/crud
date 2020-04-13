<?php
include_once 'conecta_bd.php';

if ($_SERVER["REQUEST_METHOD"] == "POST"){

    $tipoPessoa = $_POST['tipoPessoa'];
    $id_cliente = $_POST['id_cliente'];
    $nome = $_POST['nome'];
    $nome_2 = $_POST['nome_2'];
    $qtd_pares = $_POST['qtd_pares'];
    $logradouro  = $_POST['logradouro'];
    $cep = $_POST['cep'];
    $num = $_POST['num'];
    $complemento = $_POST['complemento'];
    $id_bairro = $_POST['id_bairro'];
    $cidade = $_POST['cidade'];
    $email_cliente = $_POST['email'];
    $cel_cliente = $_POST['cel'];

    
    /*(if (!preg_match("/^[a-zA-Z ]*$/",$nome)) {
        $Err_nome = "Only letters and white space allowed";
      }else if(!preg_match("/^[a-zA-Z ]*$/",$nome_2)){
        $nome_2Err = "Only letters and white space allowed";
      }else if(!preg_match("/^[a-zA-Z ]*$/",$logradouro)){
        $nome_2Err = "Only letters and white space allowed";
      }else if(!preg_match("/^[0-9 ]*$/",$cep)){
        $nome_2Err = "Only letters and white space allowed";
      }else if(!preg_match("/^[0-9 ]*$/",$num)){
        $nome_2Err = "Only letters and white space allowed";
      }else if(!preg_match("/^[a-zA-Z0-9 ]*$/",$complemento)){
        $nome_2Err = "Only letters and white space allowed";
      }else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
      }else if(!preg_match("/^[0-9 ]*$/",$cel)){
        $nome_2Err = "Only letters and white space allowed";
      }*/
    

    $sql = "INSERT INTO 
            novo_cliente (tipoPessoa, id_cliente,nome,nome_2,qtd_pares,logradouro,cep,num,complemento,id_bairro,cidade,email,cel)
            VALUES (:tipoPessoa,  :id_cliente, :nome, :nome_2, :qtd_pares, :logradouro, :cep, :num, :complemento, :id_bairro, :cidade, :email, :cel)";

    $stmt = $conn->prepare($sql);
    if ($pdoExec = $stmt->execute(array(
        ':tipoPessoa' =>"$tipoPessoa",
        ':id_cliente' =>$id_cliente,
        ':nome' =>$nome,
        ':nome_2' =>$nome_2,
        ':qtd_pares' =>$qtd_pares,
        ':logradouro' =>$logradouro,
        ':cep' =>$cep,
        ':num' =>$num,
        ':complemento' =>$complemento,
        ':id_bairro' =>$id_bairro,
        ':cidade' =>$cidade,
        'email' =>$email_cliente,
        ':cel' =>$cel_cliente
        ))){
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
</head>

<body>
    <main>
        <form method="POST">
            <div class="container card card-marg">
                <div class="card-body border">
                    <h4 class="card-title">Tipo Pessoa</h4>
                    <div class="form-row" required>
                        <div class="radio-form">
                            <label>Pessoa Fisica: </label>
                            <input type="radio" name="tipoPessoa" id="tipoPessoa" value="Fisica">
                        </div>
                        <div class="radio-form">
                            <label>Pessoa Juridica: </label>
                            <input type="radio" name="tipoPessoa" id="tipoPessoa" value="Juridica">
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
                            <label id="tipoPessoaFisica" for="">Nome: </label>
                            <input class="form-control" required type="text" name="nome">
                        </div>
                        <div class="col-sm-4">
                            <label for="">Sobrenome: </label>
                            <input class="form-control" required type="text" name="nome_2" id="">
                        </div>
                        <div class="col-sm-3">
                            <label for="">Quantidade de Pares: </label>
                            <select class="form-control" required name="qtd_pares">
                                <option value="Acima de 35 Pares">Acima de 35 Pares</option>
                                <option value="Abaixo de 35 Pares">Abaixo de 35 Pares</option>
                            </select>
                        </div>
                        <div class="col-sm-6">
                            <label for="">Logradouro: </label>
                            <input class="form-control" required type="text" name="logradouro">
                        </div>
                        <div class="col-sm-2">
                            <label for="">CEP: </label>
                            <input class="form-control" required type="text" name="cep">
                        </div>
                        <div class="col-sm-1">
                            <label for="">Numero: </label>
                            <input class="form-control" type="text" name="num">
                        </div>
                        <div class="col-sm-3">
                            <label for="">Complemento: </label>
                            <input class="form-control"  type="text" name="complemento">
                        </div>
                        <div class="col-sm-3">
                            <label for="">Bairro: </label>
                            <select name="id_bairro" required class="form-control">
                                <option value="1">Brotas</option>
                            </select>
                        </div>
                        <div class="col-sm-3">
                            <label for="">Cidade: </label>
                            <select name="cidade" required class="form-control">
                                <option value="Salvador">Salvador</option>
                                <option value="Simoões Filho">Simoões Filho</option>
                            </select>
                        </div>
                        <div class="col-sm-3">
                            <label for="">E-mail: </label>
                            <input class="form-control" required type="email" name="email">
                        </div>
                        <div class="col-sm-3">
                            <label for="">Celular: </label>
                            <input class="form-control" required type="text" name="cel">
                        </div>
                    </div>
                </div>
            </div>

            <div class="container card card-marg ">
                <div class="card-body text-center border">
                    <button type="submit" class="btn btn-primary col-sm-3">Enviar</button>
                    <a href="tipo_cadastro.php" class="btn btn-danger col-sm-3">Voltar</a>
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