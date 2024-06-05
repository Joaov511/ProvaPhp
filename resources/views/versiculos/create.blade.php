<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Versículo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        #createForm {
            margin-right: 40rem;
            margin-left: 40rem;
            margin-top: 15rem;
            background-color: #f8f9fa;
            padding: 6rem;
            border-radius: 30px;
        }

        button {
            margin-top: 1rem;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Santuário Incongruente</a>
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
                    <a class="nav-link" href="#">Sobre</a>
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