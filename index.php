<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vought</title>
    <link rel="stylesheet" href="src/components/header.css">
    <link rel="stylesheet" href="src/components/footer.css">
    <link rel="stylesheet" href="src/styles/home.css">
</head>

<body>
    <!--Cabeçalho-->
    <header>
        <div class="cabeçalho">
            <div class="divcab">
                <a href="index.html">
                    <div class="logo">
                        <img src="assets/header/logo.png">
                    </div>
                </a>
                <div class="cabeçalho-paginas">
                    <div class="divmenu">
                        <h3 class="h3menu">Heróis v</h3>
                    </div>
                    <div class="divmenu">
                        <h3 class="h3menu">Notícias v</h3>
                    </div>
                    <div class="divmenu">
                        <h3 class="h3menu">Eventos v</h3>
                    </div>
                </div>
            </div>

            <div class="divcab">
                <a class="abotao" href="src/pages/chamada.html">
                    <h3 class="h3botao">EMERGÊNCIA</h3>
                </a>
                <div>
                    <a href="src/pages/cadastro.html">
                        <img src="assets/header/login.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!--Parte pricipal-->

    <section>
    <!--Noticias-->
        <div class="noticias">
            <h1>Últimas Noticías</h1>

            <div class="carrossel">
                <div class="slides">
            
                    <a href="src/pages/noticias.html" target="">
                        <img src="assets/Notícias/Hughuie notícia.png" alt="">
                    </a>

                    <a href="src/pages/noticias.html" target="">
                        <img src="assets/Notícias/Francês notícia.png" alt="">
                    </a>

                    <a href="src/pages/noticias.html" target="">
                        <img src="assets/Notícias/capitao patria noticia.png" alt="">
                    </a>

                </div>

                <button class="btn" id="prev">&#10094;</button>
                <button class="btn" id="next">&#10095;</button>
            </div>
        </div>

    <!--Anuncio seja heoi-->
        <div class="virarheroi">
            <div class="divsejaheroi">
                <div class="infosejaheroi">
                    <h2 class="textosejaheoi">Os Sete Precisam de você</h2>
                    <h2 class="textosejaheoi">Mostre seus poderes reais</h2>
                    <a class="botao" href="#">Seja um heroi</a>
                    <a class="botao" href="#">Saiba Mais sobre a vought</a>
                </div>
                <div> 
                    <img class="imgsejaheroi" src="assets/home/logo.png" alt="">
                </div>
                <div>
                    <img src="assets/home/cappatriacinza.png" alt="">
                </div>
            </div>

            <div class="infocomplementares">
                <p>77 Anos Experiência de Liderança</p>
                <p>Mais de 1 bilhão de vidas resgatadas  Orgulhosamente resgatados</p>
                <p>0 perdas Durante as batalhas</p>
            </div>

        </div>

    </section>

    <!--Faixa com o nome dos herois-->

        <div class="faixaherois">
            <img class="nomesfaixa" src="assets/nomes/starlight.png" alt="">
            <img class="nomesfaixa" src="assets/nomes/stormfront.png" alt="">
            <img class="nomesfaixamaior" src="assets/nomes/queenmaeve.png" alt="">
            <img class="nomesfaixa" src="assets/nomes/homelander.png" alt="">
            <img class="nomesfaixa" src="assets/nomes/atrain.png" alt="">
            <img class="nomesfaixamaior" src="assets/nomes/blacknoir.png" alt="">
            <img class="nomesfaixamaior" src="assets/nomes/profundo.png" alt="">
        </div>

    <!--Os sete-->

        <section>
            <h2 class="h2sete">Quem são os SETE?</h2>
            <div>
                <div>
                    <img class="imgsete" src="assets/home/SETE.png" alt="">
                </div>
                <div>
                    
                    <p class="textosete">Bem-vindos ao futuro! Bem-vindos ao padrão de excelência! Somos a Vought International, e temos a honra de apresentar aqueles que não apenas protegem, mas também inspiram o mundo todos os dias: Os Sete!

                    Eles são mais do que apenas supers. Eles são a família Vought, o baluarte da segurança global e o epítome de tudo o que é bom e americano.</p>
                </div>
            </div>

            <div class="prinpag">
                <div class="h2prinpag">
                    <h2>Principais paginas</h2>
                </div>

                <div>
                    <div class="divpag">
                        <div>
                            <a href="src/pages/noticias.html"><img src="assets/home/noticias.png" alt=""></a>
                        </div>
                        <div>
                            <a href="src/pages/catalogo.html"><img src="assets/home/catalogo.herois.png" alt=""></a>
                        </div>
                    </div>
                    
                    <div class="divpag">
                        <div>
                            <a href="src/pages/eventos.html"><img src="assets/home/eventos.png" alt=""></a>
                        </div>
                        <div>
                            <a href="src/pages/sejaumheroi.html"><img src="assets/home/procurados.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    <!--Rodapé-->

    <footer>
    <div class="footer-container">
        <div class="footer-col logo-col">
            <img id="imgfooter" src="assets/footer/vought.contatos.png" alt="Logo Vought">
            <div class="divredes">
                <a href="#"><img class="redesfootergit" src="assets/footer/github.png" alt=""></a>
                <a href="#"><img class="redesfooter" src="assets/footer/instagram.png" alt=""></a>
                <a href="#"><img class="redesfooter" src="assets/footer/email.png" alt=""></a>
            </div>
        </div>

        <div class="footer-col">
            <h2>Heróis</h2>
            <a href="src/pages/catalogo.html">Catálogo de heróis</a>
            <a href="src/pages/sejaumheroi.html">Seja um heroi</a>
        </div>

        <div class="footer-col">
            <h2>Notícias</h2>
            <a href="src/pages/noticias.html">Notícias</a>
            <a href="src/pages/eventos.html">Eventos</a>
            <a href="src/pages/procurados.html">Procurados</a>
        </div>

        <div class="footer-col">
            <h2>Sobre</h2>
            <a href="src/pages/cadastro.html">Cadastro</a>
        </div>

        <div class="footer-col">
            <h2>Emergência</h2>
            <a href="src/pages/chamada.html">Chamada de emergência</a>
        </div>
    </div>
    </footer>

    <script src="src/scripts/script.js"></script>

</body>
</html>