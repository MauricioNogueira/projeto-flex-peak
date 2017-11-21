<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Flex Peak</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="/css/estilo-principal.css">
    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="/" class="navbar-brand">Flex Peak</a>
                </div>

                <div id="menu" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cadastrar <span class="caret"></span></a>

                            <ul class="dropdown-menu">
                                <li><a href="/cadastrar-aluno">Aluno</a></li>
                                <li><a href="/cadastrar-curso">Curso</a></li>
                                <li><a href="/cadastrar-professor">Professor</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Listar <span class="caret"></span></a>

                            <ul class="dropdown-menu">
                                <li><a href="/listar-aluno">Aluno</a></li>
                                <li><a href="/listar-curso">Curso</a></li>
                                <li><a href="/listar-notas">Notas</a></li>
                                <li><a href="/listar-professor">Professor</a></li>
                            </ul>
                        </li>
                        <li><a href="/registrar-notas">Registrar Notas</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <main>
            @yield('corpo')
        </main>
        <script type="text/javascript" src="/js/jquery.min.js"></script>
        <script type="text/javascript" src="/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="/js/verifica-cep.js"></script>
    </body>
</html>
