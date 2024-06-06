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
        .container {
            margin-top: 3rem;
        }
        .colv h2{
            font-size:1.5rem;
        }
        .colv p{
            font-size:1.2rem;
        }
        .colve p{
            font-size:1.5rem;
        }
        .colve h1{
            font-size:4.5rem;
        }
        .colve h2{
            margin-top:4rem;
            font-size:2.5rem;
        }
        .religion-container{
            margin-top:4rem;
        }
        .religion-container p{
            font-size:1.2rem;
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
    <div class="container">
        <div class="row">
            <div class="col colve">
                <h1>Bem-vindo ao Santuário Incongruente</h1>
                <p>Este é um ambiente "sagrado" para adquirir conhecimento sobre diversos dogmas, religiões, seitas, etc. Coloque e leia seus versículos favoritos, além de que, você consegue criar um versículo próprio! SENDO O SEU PRÓPRIO DEUS DE SUA PRÓPRIA RELIGIÃO!</p>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col colv">
                <h2>Versículos</h2>
                <p>Explore uma coleção de versículos significativos de várias tradições espirituais. Deixe-se inspirar e encontre a paz interior através das palavras sagradas.</p>
                <a href="/versiculos"><button type="submit" class="btn btn-primary">Veja os versículos.</button></a>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col colv">
                <h2>Criação de Versículos</h2>
                <p>Contribua para o Santuário Incongruente compartilhando seus próprios versículos inspiradores. Compartilhe sua sabedoria e ilumine o caminho dos outros.</p>
                <a href="/versiculo/criar"><button type="submit" class="btn btn-primary">Crie um versículo.</button></a>
            </div>
        </div>
        <div class="row">
            <div class="col colve">
                <h2>Conheça agora, algumas religiões desconhecidas e super interessantes.</h1>
            </div>
        </div>
        <div class="religion-container">
            <h2>SOCIEDADE TEOSÓFICA</h2>
            <p>Entre outros dogmas, a Sociedade Teosófica prega que existe um mundo oculto além da realidade física, acessível por rituais místicos e muita meditação. “Não existe religião maior que a verdade”, afirma o lema da Sociedade Teosófica, um grupo esotérico fundado em Nova York, nos Estados Unidos, em 1875, e depois migrado para Chennai, na Índia. Ou seja, mais do que acreditar numa religião específica, os integrantes dessa seita ocultista focam no estudo de diversas crenças e tentam encontrar ensinamentos esotéricos em todas as religiões do planeta. Seus integrantes podem, inclusive, manter suas próprias religiões mesmo depois de se associarem ao movimento. </p>
        </div>
        <div class="religion-container">
            <h2>CAODAÍSMO</h2>
            <p>Caodaísmo, significa “terceira grande amnistia religiosa universal”, mas é também conhecido por Cao Dai, “morada alta” em vietnamita. A religião, que surgiu justamente no Vietnã em 1926, é uma combinação de elementos do Budismo, Taoísmo, Hinduísmo, Islamismo, Catolicismo e até Confucionismo.

Contando com cerca de 8 milhões de seguidores atualmente, sobretudo no Vietnã e em alguns pontos da Oceania. Sua missão é fazer do mundo um lugar mais tolerante.

Seu deus único, o Cao Dai, seria o responsável pela criação da vida, pela reencarnação e até pelo karma. Ele é representado como um olho esquerdo inserido num triângulo, e não possui um gênero ou uma forma.</p>
        </div>
        <div class="religion-container">
            <h2>CHENDOÍSMO</h2>
            <p>Surgido no início do século 20, mas baseado em uma corrente criada no século 19 (o “Donghak”, de 1860), o Cheondoísmo surgiu na Coréia e por ali ficou majoritariamente até hoje - tanto na do Norte, como na do Sul.

Para os chedonístas, Deus mora dentro de cada pessoa ( semelhante ao Panteísmo , lembra?) e, por isso, devemos ser bons e altruístas ainda vivos, pois não há vida após a morte, há somente a experiência que estamos vivenciando agora - e que deve ser boa. Essa presença divina em todos os seres pode também ser comparada ao céu - que é o que há de melhor no quesito bondade.</p>
        </div>
        <div class="religion-container">
            <h2>ZOROATRISMO</h2>
            <p>Zoroastrismo, Masdeísmo ou Parsismo: esses são os possíveis nomes que podem se dar à uma mesma crença, baseada nos ensinamentos do profeta Zoroastro, que viveu no primeiro milênio antes de Cristo no Irã.

Essa crença é pautada sobretudo na velha dualidade de muitas religiões: o bem e o mal. Portanto, seus seguidores acreditam na existência de um paraíso, em ressurreição, em juízo final e na vinda de um messias que iria salvar a humanidade.

Como essa corrente antecedeu a maior parte das religiões que hoje conhecemos, pode-se dizer que ela serviu então de influência para Judaísmo, Cristianismo, Islamismo, entre outras que também são monoteístas.

E por falar em um único Deus, o do Zoroastrismo seria o Deus Ahura Mazda, responsável por mediar as forças do caos e vencer a luta das divindades contra Arimã (o representante do “mal”).
</p>
        </div>
    </div>
</body>
</html>
