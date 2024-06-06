<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <style>
        body {
            background-color: #f1f1f1;
            color: black;
            font-family: "Kanit", sans-serif;
        }
        nav{
            background-color: black
        }
        .navbar {
            border-bottom: 2px solid #e74c3c;
        }
        .navbar-brand {
            color: #e74c3c;
        }
        .navbar-brand:hover {
            color: #c0392b;
        }
        .navbar-light .navbar-nav .nav-link {
            color: #e0e0e0;
            font-size:1.6rem;
        }
        .navbar-light .navbar-toggler-icon {
            background-color: #e0e0e0;
        }
        nav ul li {
            margin-left: 2rem;
        }
        #createForm {
            margin-right: 40rem;
            margin-left: 40rem;
            margin-top: 15rem;
            background-color: #f8f9fa;
            padding: 4rem;
            border-radius: 30px;
        }

        button {
            margin-top: 1rem;
        }
        #passagem{
            padding:10px 110px 10px 10px;
        }
        #texto{
            padding:10px 110px 10px 10px;
        }
        .form-group{
            margin-top: 1rem;
            font-size:1.5rem;
        }
</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light">
    <a href="/"><img style="width:60px;" src="/logo.png"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="/register">Registro</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/login">Login</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/versiculos">Versiculos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/versiculo/criar">Criar versiculo</a>
        </li>
        </ul>
    </div>
    </nav>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('versiculos.store') }}" method="POST">
        @csrf
        <div id="createForm">
            <div class="form-group">
                <label for="passagem">Passagem</label>
                <input type="text" class="form-control" id="passagem" name="passagem" placeholder="">
            </div>
            <div class="form-group">
                <label for="texto">Texto</label>
                <input type="text" class="form-control" id="texto" name="texto" placeholder="">
            </div>
            <button type="submit" class="btn btn-primary">Criar</button>
        </div>
    </form>
</body>
</html