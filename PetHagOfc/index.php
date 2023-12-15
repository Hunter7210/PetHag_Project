<?php session_start(); ?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PetHag Oficial!</title>
    <link rel="icon" href="./View/img/logo (1).png" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./View/Style/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Raleway&display=swap" rel="stylesheet">
</head>

<body>
    <?php
    if (isset($_SESSION['ativa'])) { ?>
    <nav>
        <h1>
            <?php echo $_SESSION['nome']; ?>
        </h1>
    </nav>

    <?php } else {
        /* header("location: ./View/login.php"); */
    } ?>
    <header id="header">
        <div class="container">
            <div class="flex">
                <div class="img-nav">
                    <a href="Index.html">
                        <img src="./View/img/Dog Cat Logo.png" alt="">
                    </a>
                </div>
                
                <div class="search-bar">
                    <input type="text" class="search-input" placeholder="Pesquisar...">
                    <button class="search-button">Pesquisar</button>
                </div>

                <div class="center">
                    <ul>
                        <li>
                            <a href="https://web.whatsapp.com/"><img id="instagram" src="./View/img/instagram (1).png"
                                    alt=""></a>
                        </li>
                        <li>
                            <a href=""><img src="./View/img/linkedin (4).png" alt=""></a>
                        </li>
                        <li>
                            <a href="https://pt-br.facebook.com/"><img src="./View/img/facebook (2).png" alt=""></a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="nav-2">
                <ul>
                    <li><a href="./index.php"><button>HOME</button></a></li>
                    <li><a href=""><button>PRODUTO</button></a></li>
                    <li><a href="./View/login.php"><button>LOGIN</button></a></li>
                    <li><a href="#link1"><button>SOBRE NÓS</button></a></li>
                </ul>
            </div>

        </div>
    </header>

    <div class="banner">
        <video autoplay loop muted playsinline>
            <source src="./View/img/PetHag Pet Shop (1).mp4" type="video/mp4">
        </video>
    </div>

    <div class="img-Meio">
        <a href="./View/img/img2log.png"><img src="./View/img/blog_pethag.png" alt=""></a>
        <a href="./View/img/eventosimg1.png"><img src="./View/img/eventos.png" alt=""></a>
        <a href="./View/img/img4produto.png"><img src="./View/img/produto.png" alt=""></a>
        <a href="./View/img/img3banho.png"><img src="./View/img/banho.png" alt=""></a>
    </div>

    <div class="carousel-container">
        <div class="carousel">
            <div class="slide">
                <img src="./View/img/banner1.png" alt="Slide 1">
            </div>
            <div class="slide">
                <img src="./View/img/banner2.png" alt="Slide 2">
            </div>
            <div class="slide">
                <img src="./View/img/banner3.png" alt="Slide 3">
            </div>
        </div>
        <button class="prev" onclick="changeSlide(-1)"><img src="./View/img/anterior.png"></button>
        <button class="next" onclick="changeSlide(1)"><img src="./View/img/proximo.png"></button>
    </div>
    <div class="tit">
        <h1>Os Favoritos dos Bichos</h1>
    </div>
    <div class="contai-cards-container">
        <div class="card-container">
            <div class="card">
                <div class="card-image">
                    <img src="./View/img/r1.jpg" alt="Produto 1">
                </div>
                <div class="card-content">
                    <p>Descrição breve do produto.</p>
                    <p class="price">R$ 19,99</p>
                    <button class="buy-button">Comprar</button>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="./View/img/r2.webp" alt="Produto 2">
                </div>
                <div class="card-content">
                    <h2>Produto 2</h2>
                    <p>Outra descrição breve do produto.</p>
                    <p class="price">R$ 29,99</p>
                    <button class="buy-button">Comprar</button>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="./View/img/r3.png" alt="Produto 3">
                </div>
                <div class="card-content">
                    <h2>Produto 3</h2>
                    <p>Outra descrição breve do produto.</p>
                    <p class="price">R$ 29,99</p>
                    <button class="buy-button">Comprar</button>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="./View/img/r4.jpg" alt="Produto 4">
                </div>
                <div class="card-content">
                    <h2>Produto 4</h2>
                    <p>Outra descrição breve do produto.</p>
                    <p class="price">R$ 29,99</p>
                    <button class="buy-button">Comprar</button>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="./View/img/r5.webp" alt="Produto 5">
                </div>
                <div class="card-content">
                    <h2>Produto 5</h2>
                    <p>Outra descrição breve do produto.</p>
                    <p class="price">R$ 29,99</p>
                    <button class="buy-button">Comprar</button>
                </div>
            </div>
            <!--  <div class="card">
            <div class="card-image">
                <img src="./View/img/r6.webp" alt="Produto 6">
            </div>
            <div class="card-content">
                <h2>Produto 6</h2>
                <p>Outra descrição breve do produto.</p>
                <p class="price">R$ 29,99</p>
                <button class="buy-button">Comprar</button>
            </div>
        </div> -->
        </div>
    </div>




    <!--  <a href="https://www.instagram.com/cobasi/">
        <div class="banner2">
            <video autoplay loop muted playsinline>
                <source src="./View/img/Banner para Docs de Roteiro de Vídeo Estilo Ousado Rosa Azul Escuro.mp4"
                    type="video/mp4">
            </video>
        </div>
    </a> -->

    <div class="containter-img-banner">
        <div class="contain-img-ban">
            <a href="">
                <div class="img-banner1">
                    <img src="./View/img/Banner_Dog_Natal.png" alt="">
                </div>
            </a>
            <div class="contain-div-pra-grid">
                <a href="">
                    <div class="img-banner2">
                        <img src="./View/img/Banner_Banho.png" alt="">
                    </div>
                </a>

                <a href="">
                    <div class="img-banner3">
                        <img src="./View/img/Banner_petisco.png" alt="">
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div class="tit">
        <h1>Os mais buscados</h1>
    </div>
    <div class="contai-cards-container">
        <div class="card-container">
            <div class="card">
                <div class="card-image">
                    <img src="./View/img/r1.jpg" alt="Produto 1">
                </div>
                <div class="card-content">
                    <p>Descrição breve do produto.</p>
                    <p class="price">R$ 19,99</p>
                    <button class="buy-button">Comprar</button>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="./View/img/r2.webp" alt="Produto 2">
                </div>
                <div class="card-content">
                    <h2>Produto 2</h2>
                    <p>Outra descrição breve do produto.</p>
                    <p class="price">R$ 29,99</p>
                    <button class="buy-button">Comprar</button>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="./View/img/r3.png" alt="Produto 3">
                </div>
                <div class="card-content">
                    <h2>Produto 3</h2>
                    <p>Outra descrição breve do produto.</p>
                    <p class="price">R$ 29,99</p>
                    <button class="buy-button">Comprar</button>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="./View/img/r4.jpg" alt="Produto 4">
                </div>
                <div class="card-content">
                    <h2>Produto 4</h2>
                    <p>Outra descrição breve do produto.</p>
                    <p class="price">R$ 29,99</p>
                    <button class="buy-button">Comprar</button>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="./View/img/r5.webp" alt="Produto 5">
                </div>
                <div class="card-content">
                    <h2>Produto 5</h2>
                    <p>Outra descrição breve do produto.</p>
                    <p class="price">R$ 29,99</p>
                    <button class="buy-button">Comprar</button>
                </div>
            </div>
            <!--   <div class="card">
                <div class="card-image">
                    <img src="./View/img/r6.webp" alt="Produto 6">
                </div>
                <div class="card-content">
                    <h2>Produto 6</h2>
                    <p>Outra descrição breve do produto.</p>
                    <p class="price">R$ 29,99</p>
                    <button class="buy-button">Comprar</button>
                </div>
            </div> -->
        </div>

        <div class="container-card-pets">
            <div class="tit">
                <h1>Escolha produtos para seu pet!</h1>
            </div>

            <div class="card-pets">
                <div class="card-desing">

                    <a href="">
                        <img src="././View/img/Cachorro_Card.png" alt="">
                    </a>
                </div>
                <div class="card-desing">
                    <a href="">
                        <img src="././View/img/Gato_Card.png" alt="">
                    </a>
                </div>
                <div class="card-desing">
                    <a href="">
                        <img src="././View/img/Peixe_Card.png" alt="">
                    </a>
                </div>
            </div>
        </div>
        <div class="marcasApoiad">
            <div class="tit">
                <h1>Marcas Apoiadoras</h1>
            </div>
            <div class="espaco">
                <div class="conted-marcaApo">
                    <a href=""><img src="./View/img/m1.webp" alt="" height="250px" width="550pcx"></a>
                    <a href=""><img src="./View/img/m2.webp" alt="" height="250px" width="550pcx"></a>
                    <a href=""><img src="./View/img/m3.webp" alt="" height="250px" width="550pcx"></a>
                    <a href=""><img src="./View/img/m4.webp" alt="" height="250px" width="550pcx"></a>
                    <a href=""><img src="./View/img/m5.webp" alt="" height="250px" width="550pcx"></a>
                    <a href=""><img src="./View/img/m6.webp" alt="" height="250px" width="550pcx"></a>
                </div>
            </div>
        </div>


        <div class="container-sobrenos">

            <div class="projetosLinks" id="link1">

                <p>
                <h1>Sobre Nós:</h1>
                Bem-vindo à Pethag, sua fonte confiável de informações veterinárias e cuidados dedicados aos animais
                de
                estimação. Somos uma página comprometida em promover o bem-estar e a saúde dos seus companheiros
                peludos.

                Na Pethag, entendemos que os animais de estimação são membros valiosos da sua família, e é por isso
                que nos
                esforçamos para fornecer conteúdo informativo, dicas práticas e orientações especializadas para
                garantir que
                seus amigos de quatro patas vivam uma vida feliz e saudável.


                <span id="readMoreContent" style="display: none;">
                    <h6>Nossa Missão:</h6>
                    Nosso compromisso é ser a sua principal fonte de conhecimento sobre cuidados com animais de
                    estimação,
                    promovendo o bem-estar, a felicidade e a saúde de seus amigos peludos.

                    <h6>Nossa Equipe:</h6>
                    A equipe da Pethag é composta por apaixonados por animais e profissionais veterinários
                    dedicados,
                    prontos
                    para compartilhar seu conhecimento e experiência. Buscamos criar uma comunidade onde os amantes
                    de
                    animais
                    possam se conectar, aprender e trocar histórias inspiradoras.

                    <h6>Conteúdo Especializado:</h6>
                    Na Pethag, você encontrará artigos envolventes sobre nutrição, cuidados preventivos,
                    treinamento,
                    curiosidades e notícias relevantes para o universo dos pets. Navegue pelo nosso conteúdo e
                    descubra
                    maneiras
                    de fortalecer o vínculo especial que você compartilha com seu animal de estimação.

                    <h6>Formas de Pagamento:</h6>
                    Oferecemos diversas opções de pagamento para tornar sua experiência de compra ainda mais
                    conveniente.
                    Aceitamos cartões de crédito/débito das principais bandeiras, transferências bancárias e outros
                    métodos
                    seguros. Na Pethag, garantimos transações seguras e protegidas para que você possa adquirir
                    produtos e
                    serviços com confiança.

                    <h6>Política da Empresa:</h6>
                    Nosso compromisso com a transparência e a satisfação do cliente é a base da nossa política
                    empresarial.
                    Garantimos a qualidade de nossos produtos e serviços, e estamos sempre prontos para ouvir suas
                    sugestões
                    e
                    preocupações. Na Pethag, respeitamos a privacidade dos nossos clientes e garantimos a
                    confidencialidade
                    das
                    informações fornecidas.
                    Junte-se a nós nesta jornada dedicada ao amor e cuidado pelos animais. Na Pethag, estamos aqui
                    para
                    apoiar
                    você em cada passo da jornada de cuidados com seus amigos peludos. Obrigado por fazer parte da
                    nossa
                    comunidade dedicada aos amantes de animais!
                </span>

                <button id="vejamais" onclick="toggleReadMore()">Ver Mais</button>
                </p>
            </div>
        </div>

        <div class="cont">
            <div class="form-container">
                <div class="fim">
                    <!-- <img src="img/banho12.png" alt="" height="50px" width="50px"> -->
                    <h1>Club Pethag <img src="./View/img/pawprint.png"></h1>
                    <h3>Cadastre-se e receba nossas ofertas,lançamentos e promoções.</h3>
                </div>

                <form action="#" method="post" onsubmit="return confirmSubmit()">
                    <label for="name">Nome:</label>
                    <input type="text" id="name" name="name" required>

                    <label for="email">E-mail:</label>
                    <input type="email" id="email" name="email" required>

                    <button type="submit">Confirmação</button>
                </form>
            </div>
        </div>
        <div class="divContendoChat" id="divContendoChatPequeno" onclick="alternarDivMaior()">
            <img src="./View/img/cachorro-unscreen.gif" alt="ChatBot PetHag!" class="Chat" > 
        </div>
        <div class="divContendoChat divContendoChatGrande" id="divChatGrande">
            <iframe class="ChatGrande" width="150" height="130" allow="microphone;"
                src="https://console.dialogflow.com/api-client/demo/embedded/c2d0d9ae-9759-45ad-8056-d535d5cea3e5"></iframe>

        </div>

        <footer class="main_footer">
            <div class="content">
                <div class="colfooter">
                    <h3 class="titleFooter">Menu</h3>
                    <ul>
                        <li><a href="#" title="Página Inícial">Página Inícial</a></li>
                        <li><a href="#" title="Sobre a Empresa">Sobre a Empresa</a></li>
                        <li><a href="#" title="Galeria de Fotos">Galeria de Fotos</a></li>
                        <li><a href="#" title="Fale Conosco">Fale Conosco</a></li>
                    </ul>
                </div><!--Col Footer 1-->
                <div class="colfooter">
                    <h3 class="titleFooter">Contato</h3>
                    <p><i class="icon icon-mail"></i>pethag.ofc@gmail.com</p>
                    <p><i class="icon icon-phone"></i>19 93500-1761</p>
                    <p><i class="icon icon-whatsapp"></i>19 987358041</p>
                </div><!--Col Footer 2-->
                <div class="colfooter">
                    <h3 class="titleFooter">Redes Sociais</h3>
                    <a href="#" class="botao"><span><i class="icon icon-facebook"></i></span></a>
                    <a href="#" class="botao"><span><i class="icon icon-instagram"></i></span></a>
                    <a href="#" class="botao"><span><i class="icon icon-twitter"></i></span></a>
                    <a href="#" class="botao"><span><i class="icon icon-pinterest"></i></span></a>
                </div><!--Col Footer 3-->
                <div class="clear"></div>
            </div><!--Content-->
            <div class="main_footer_copy">
                <p class="m-b-footer">PetHag - 2023, todos os direitos reservados.</p>
                <p class="by"><i class="icon icon-heart-3"></i> Desenvolvido por: <a href="#" title="Seu nome">Heitor,
                        Heloisa, Anthony</a></p>
            </div>
        </footer>



        <script>
            function toggleReadMore() {
                var readMoreContent = document.getElementById('readMoreContent');
                var buttonText = document.querySelector('#link1 button');

                if (readMoreContent.style.display === 'none') {
                    readMoreContent.style.display = 'inline';
                    buttonText.textContent = 'Ver Menos';
                } else {
                    readMoreContent.style.display = 'none';
                    buttonText.textContent = 'Ver Mais';
                }
            }
        </script>

        <script>
            function confirmSubmit() {
                var name = document.getElementById('name').value;
                var email = document.getElementById('email').value;

                alert('Nome: ' + name + '\nE-mail: ' + email + '\nConfirmação enviada com sucesso!');

                return false;
            }
        </script>

        
</body>
<script src="./View/Script/index_script.js"></script>
</html>