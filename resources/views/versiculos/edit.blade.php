<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        #navbarText {
            display: flex;
        }
        div ul {
            display: flex;
            justify-content: flex-end;
            align-items: flex-end;
        }
        div ul li {
            margin-left: 2rem;
        }

        #editForm {
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
        <a class="navbar-brand" href="#">Navbar w/ text</a>
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

    <div class="card-body" id="editForm">
                        <form action="{{ route('versiculos.update', $versiculo->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="passagem" class="form-label">Passagem</label>
                                <input type="text" class="form-control" id="passagem" name="passagem"
                                    value="{{ $versiculo->passagem }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="texto" class="form-label">Texto</label>
                                <textarea class="form-control" id="texto" name="texto" rows="3"
                                    required>{{ $versiculo->texto }}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Atualizar</button>
                        </form>
                    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>