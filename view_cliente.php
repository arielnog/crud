<?php
include_once "conecta_bd.php";
session_start();

$id = $_GET["id"];

if ($_SESSION["logado"] != "ok") {
    header("location: login.php");
}
if ($id == NULL) {
    echo "O codigo não foi informado ";
}


$sql = "SELECT * 
FROM `novo_cliente` as a 
INNER JOIN bairro as b 
ON a.id_bairro = b.id_bairro
WHERE a.id_cliente = '$id' ";

$stt = $conn->prepare($sql);
$stt->execute();
$row = $stt->fetch(PDO::FETCH_ASSOC);


?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detalhes do Clientes</title>
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
                        <table class="table">
                            <thead>
                                <tr>
                                    <th style="width: 20%;">Codigo</th>
                                    <th>Nome do Cliente</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if ($row['tipoPessoa'] == "Fisica") {
                                ?>
                                    <tr>
                                        <td>Nome:</td>
                                        <td><?php echo $row['nome'] . " " . $row['nome_2']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>CPF:</td>
                                        <td><?php echo $row['cpf_cnpj']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>RG:</td>
                                        <td><?php echo $row['rg_ie']; ?></td>
                                    </tr>
                                <?php } else {
                                ?>
                                    <tr>
                                        <td>Razão Social:</td>
                                        <td><?php echo $row['nome']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Nome Fantasia:</td>
                                        <td><?php echo $row['nome_2']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>CNPJ:</td>
                                        <td><?php echo $row['cpf_cnpj']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Inscrição Estadual:</td>
                                        <td><?php echo $row['rg_ie']; ?></td>
                                    </tr>
                                <?php }; ?>
                                <tr>
                                    <td>Tipo de Pessoa:</td>
                                    <td><?php echo $row['tipoPessoa']; ?></td>
                                </tr>
                                <tr>
                                    <td>CEP:</td>
                                    <td><?php echo $row['cep']; ?></td>
                                </tr>
                                <tr>
                                    <td>Logradouro:</td>
                                    <td><?php echo $row['logradouro']; ?></td>
                                </tr>
                                <tr>
                                    <td>Número:</td>
                                    <td><?php echo $row['num']; ?></td>
                                </tr>
                                <tr>
                                    <td>Complemento:</td>
                                    <td><?php echo $row['complemento']; ?></td>
                                </tr>
                                <tr>
                                    <td>Bairro:</td>
                                    <td><?php echo $row['nome_bairro']; ?></td>
                                </tr>
                                <tr>
                                    <td>Cidade:</td>
                                    <td><?php echo $row['cidade']; ?></td>
                                </tr>
                                <tr>
                                    <td>Email:</td>
                                    <td><?php echo $row['email']; ?></td>
                                </tr>
                                <tr>
                                    <td>Celular:</td>
                                    <td><?php echo $row['cel']; ?></td>
                                </tr>
                                <tr>
                                    <td>Quantidade de Pares:</td>
                                    <td><?php echo $row['qtd_pares']; ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <a href="representante.php" class="btn btn-danger">Voltar</a>
                </div>
            </div>
        </div>
    </main>
    <script src="./js/jquery.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/script.js"></script>
</body>


</html>