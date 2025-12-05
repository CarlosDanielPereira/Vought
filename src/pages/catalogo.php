<?php
require "../conexao/conexao.php";

$sql = "SELECT * FROM herois ORDER BY nome ASC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vought</title>

    <link rel="stylesheet" href="../../src/components/header.css">
    <link rel="stylesheet" href="../../src/components/footer.css">
    <link rel="stylesheet" href="../../src/styles/catalogo.css">
    <link rel="shortcut icon" href="../../assets/header/logo.png" type="image/x-icon">
</head>

<body>

    <header>
        <div class="cabeçalho">
            <div class="divcab">
                <a href="../../index.php">
                <div class="logo">
                    <img src="../../assets/header/logo.png">
                </div>
                </a>
                <div class="cabeçalho-paginas">
                    <div class="divmenu dropdown">
                        <h3 class="h3menu">Heróis ▼</h3>
                        <ul class="dropdown-menu">
                            <li><a href="../../src/pages/catalogo.php">Catalogo de Herois</a></li>
                            <li><a href="../../src/pages/sejaumheroi.html">Seja um Heroi</a></li>
                            <li><a href="../../src/pages/procurados.html">Procurados</a></li>
                        </ul>
                    </div>

                    <div class="divmenu dropdown">
                        <a class="h3menu" href="../../src/pages/noticias.html"><h3 class="h3menu">Notícias ▼</h3></a>
                    </div>

                    <div class="divmenu dropdown">
                        <a class="h3menu" href="../../src/pages/eventos.html"><h3 class="h3menu">Eventos ▼</h3></a>
                    </div>
                </div>
            </div>
            <div class="divcab">
                <a class="abotao" href="../../src/pages/chamada.html">
                    <h3 class="h3botao">EMERGÊNCIA</h3>
                </a>
                <div>
                    <a href="../../src/pages/cadastro.html">
                        <img src="../../assets/header/login.png" alt="">
                    </a>
                </div>
            </div>
        </div>

    </header>

    <!-- CATÁLOGO -->
    <div class="catalogo">
        <h1>CATÁLOGO DE HERÓIS</h1>

        <div class="container-herois">

            <div class="card">
                <div class="imagem-heroi">
                    <img class="foto-heroi" src="../../assets/Catálogo de heróis/Capitão Pátria.png">
                    <p class="nome-heroi">CAPITÃO PÁTRIA</p>
                </div>
            </div>

            <div class="card">
                <div class="imagem-heroi">
                    <img class="foto-heroi" src="../../assets/Catálogo de heróis/Trem-bala.png">
                    <p class="nome-heroi">TREM-BALA</p>
                </div>
            </div>

            <div class="card">
                <div class="imagem-heroi">
                    <img class="foto-heroi" src="../../assets/Catálogo de heróis/Black-Noir.png">
                    <p class="nome-heroi">BLACK NOIR</p>
                </div>
            </div>

            <div class="card">
                <div class="imagem-heroi">
                    <img class="foto-heroi" src="../../assets/Catálogo de heróis/Espoleta.png">
                    <p class="nome-heroi">ESPOLETA</p>
                </div>
            </div>

            <div class="card">
                <div class="imagem-heroi">
                    <img class="foto-heroi" src="../../assets/Catálogo de heróis/Irmã sábia.png">
                    <p class="nome-heroi">IRMÃ SÁBIA</p>
                </div>
            </div>

            <div class="card">
                <div class="imagem-heroi">
                    <img class="foto-heroi" src="../../assets/Catálogo de heróis/Profundo.png">
                    <p class="nome-heroi">PROFUNDO</p>
                </div>
            </div>

            <div class="card">
                <div class="imagem-heroi">
                    <img class="foto-heroi" src="../../assets/Catálogo de heróis/Translúcido.png">
                    <p class="nome-heroi">TRANSLÚCIDO</p>
                </div>
            </div>

            <div class="card">
                <div class="imagem-heroi">
                    <img class="foto-heroi" src="../../assets/Catálogo de heróis/Tempesta.png">
                    <p class="nome-heroi">TEMPESTA</p>
                </div>
            </div>

            <div class="card">
                <div class="imagem-heroi">
                    <img class="foto-heroi" src="../../assets/Catálogo de heróis/Mavie.png">
                    <p class="nome-heroi">MAVIE</p>
                </div>
            </div>

            <div class="card">
                <div class="imagem-heroi">
                    <img class="foto-heroi" src="../../assets/Catálogo de heróis/Soldier Boy.png">
                    <p class="nome-heroi">SOLDIER BOY</p>
                </div>
            </div>

            <div class="card">
                <div class="imagem-heroi">
                    <img class="foto-heroi" src="../../assets/Catálogo de heróis/Escarlate.png">
                    <p class="nome-heroi">CONDESSA ESCARLATE</p>
                </div>
            </div>

            <div class="card">
                <div class="imagem-heroi">
                    <img class="foto-heroi" src="../../assets/Catálogo de heróis/Swatto.png">
                    <p class="nome-heroi">SWATTO</p>
                </div>
            </div>

            <div class="card">
                <div class="imagem-heroi">
                    <img class="foto-heroi" src="../../assets/Catálogo de heróis/Mentaldroid.png">
                    <p class="nome-heroi">MENTALDROID</p>
                </div>
            </div>

            <div class="card">
                <div class="imagem-heroi">
                    <img class="foto-heroi" src="../../assets/Catálogo de heróis/Tek Knight.png">
                    <p class="nome-heroi">TEK-KNIGHT</p>
                </div>
            </div>

            <div class="card">
                <div class="imagem-heroi">
                    <img class="foto-heroi" src="../../assets/Catálogo de heróis/Irmã TNT.png">
                    <p class="nome-heroi">GÊMEA TNT</p>
                </div>
            </div>

            <div class="card">
                <div class="imagem-heroi">
                    <img class="foto-heroi" src="../../assets/Catálogo de heróis/Irmão TNT.png">
                    <p class="nome-heroi">GÊMEO TNT</p>
                </div>
            </div>

            <?php while ($h = $result->fetch_assoc()): ?>
                <div class="card">
                    <div class="imagem-heroi">
                        <img class="foto-heroi" src="uploads/herois/<?php echo $h['imagem']; ?>" alt="">
                        <p class="nome-heroi"><?php echo strtoupper($h['nome']); ?></p>
                    </div>
                </div>
            <?php endwhile; ?>


        </div>
    </div>

    <footer>
        <div class="footer-container">
            <div class="footer-col logo-col">
                <img id="imgfooter" src="../../assets/footer/vought.contatos.png" alt="Logo Vought">
                <div class="divredes">
                    <a href="https://github.com/CarlosDanielPereira/Vought"><img class="redesfootergit" src="../../assets/footer/github.png" alt=""></a>
                    <a href="https://www.instagram.com/voughtintl/"><img class="redesfooter" src="../../assets/footer/instagram.png" alt=""></a>
                    <a href="mailto:vought@gmail.com"><img class="redesfooter" src="../../assets/footer/email.png" alt=""></a>
                </div>
            </div>

            <div class="footer-col">
                <h2>Heróis</h2>
                <a href="../../src/pages/catalogo.php">Catálogo de heróis</a>
                <a href="../../src/pages/sejaumheroi.html">Seja um heroi</a>
            </div>

            <div class="footer-col">
                <h2>Notícias</h2>
                <a href="../../src/pages/noticias.html">Notícias</a>
                <a href="../../src/pages/eventos.html">Eventos</a>
                <a href="../../src/pages/procurados.html">Procurados</a>
            </div>

            <div class="footer-col">
                <h2>Sobre</h2>
                <a href="../../src/pages/cadastro.html">Cadastro de Herói</a>
            </div>

            <div class="footer-col">
                <h2>Emergência</h2>
                <a href="../../src/pages/chamada.html">Chamada de emergência</a>
            </div>


        </div>
    </footer>

</body>

</html>