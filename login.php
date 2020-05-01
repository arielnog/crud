<?php
include_once "conecta_bd.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $login = $_POST["login"];
    $senha = $_POST["senha"];

    $senha = md5($senha);

    $sql = "SELECT * 
            FROM representante 
            where  login = '$login'
            AND senha = '$senha'  ";

    $stmt = $conn->prepare($sql);
    $stmt->execute(array(':login' => $login, ':senha' => $senha));
    $retorno = $stmt->fetch();
    if ($stmt->rowCount() > 0) {

        session_start();
        $_SESSION['logado'] = "ok";
        $_SESSION['id_repre'] = $retorno['id_representante'];
        $_SESSION['nome_repre'] = $retorno['nome_repre'];


        header("Location: representante.php");
    } else {
        echo "<script>
            alert('Usuario Cadastrado com Sucesso!');
            </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login de representante</title>
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
        <div class="container">
            <div class="card text-center card-marg">
                <h2 class="">CRUD</h2>
                <div class="card-body">
                    <form method="POST" action="">
                        <div class="form-group">
                            <div>
                                <input type="text" class="form-control" name="login" placeholder="Digite seu Login">
                            </div>
                        </div>
                        <div class="form-group ">
                            <div>
                                <input type="password" class="form-control" name="senha" placeholder="Digite sua Senha">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Entrar</button>
                        <a href="index.php" type="submit" class="btn btn-warning">Cadastro de clientes</a>
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>

</html>