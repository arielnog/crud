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
        $_SESSION['id_representante'] = $retorno['id_representante'];
        $_SESSION['representante'] = $retorno['representante'];
        $_SESSION['email_repre'] = $retorno['email_repre'];
        
        header("Location: representante.php");
    }else{
        echo "<script>
            alert('Usuario Cadastrado com Sucesso!');
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
    <script src="./js/jquery.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/script.js"></script>
    <script src="./js/jquery.mask.min.js"></script>
</head>
<body>
<main>
        <div class="container">
            <div class="card text-center card-marg">
                <div class="card-body">
                    <h2 class="card-title">CRUD</h2>
                    <form action="">
                        <div class="form-group row">
                            <label for="email" class="col-sm-2 col-form-label">E-mail</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="email" placeholder="Digite seu E-mail">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="senha" class="col-sm-2 col-form-label">Senha</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="senha" placeholder="Digite sua Senha">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Entrar</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>
</html>