<?php
include_once "conecta_bd.php";
session_start();
$id_repre = $_SESSION['id_repre'];

if ($_SESSION["logado"] != "ok") {
    header("location: login.php");
}



$sql = "SELECT * 
        FROM `novo_cliente` as a 
        INNER JOIN bairro as b 
        ON a.id_bairro = b.id_bairro
        WHERE b.id_representante = '$id_repre' ";
$stt = $conn->prepare($sql);
$stt->execute();



?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pagina do Representante</title>
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/estilo.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>

<body>
    <main>

        <div class="container">
            <div class="card card-marg">

                <div class="card-body text-center">
                    <h2>Olá <?php echo $_SESSION['nome_repre'] ?></h2>
                    <div class="border">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Codigo</th>
                                    <th>Nome do Cliente</th>
                                    <th>Tipo de Pessoa</th>
                                    <th>Bairro</th>
                                    <th>Status</th>
                                    <th>Opções</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($row = $stt->fetch(PDO::FETCH_ASSOC)) {
                                    $id_cliente = $row['id_cliente'];
                                ?>
                                    <tr>

                                        <td><?php echo "$id_cliente" ?></td>
                                        <?php if ($row['tipoPessoa'] == "Fisica") {
                                        ?>
                                            <td><?php echo $row['nome'] . " " . $row['nome_2'] ?></td>
                                        <?php } else {
                                        ?>
                                            <td><?php echo $row['nome'] ?></td>
                                        <?php }; ?>
                                        <td><?php echo $row['tipoPessoa'] ?></td>
                                        <td><?php echo $row['nome_bairro'] ?></td>
                                        <td><?php echo $row['status'] ?></td>
                                        <td>
                                            <a href="view_cliente.php?id=<?php echo $id_cliente ?>" class='btn btn-success'><i class='fas fa-eye'></i> Visualizar</a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <a href="logout.php" class="btn btn-danger">Sair</a>
                </div>
            </div>
        </div>
    </main>
    <script src="./js/jquery.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/script.js"></script>
</body>


</html>