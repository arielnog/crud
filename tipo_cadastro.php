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
                            </div>
                        </div>
                    </div>
                    <div id="atendimentoone" class="form-group row desc">
                        <div id="btn" class="col-sm-12">
                            <a href="form_novos.html" class="btn btn-primary">Continuar</a>
                            <button class="btn btn-danger">Voltar</button>
                        </div>
                    </div>
                    <form action="">
                        <div id="atendimentotwo" class="form-group row desc">
                            <div id="atendimento" class="border">
                                <input type="email" class="form-control" id="inputEmail3" placeholder="Informe o seu codigo de cadastro.">
                                <small class="form-text text-muted">Este código foi informado e também enviado para
                                    seu email, após seu registro.</small>
                            </div>
                            <div id="btn" class="col-sm-12">
                                <button type="submit" class="btn btn-primary">Continuar</button>
                                <button class="btn btn-danger">Voltar</button>
                            </div>
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