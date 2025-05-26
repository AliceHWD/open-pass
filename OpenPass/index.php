<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OpenPass</title>
    <link rel="shortcut icon" href="./imagens/logo.png  ">
    <link rel="stylesheet" href="style.css">
</head>
<body>
   

    <header>
        <div class="logo">
            <a href="./index.php">
                <img src="../OpenPassOfc/imagens/logo.png" alt="">
                <h3>OpenPass</h3>
            </a>
        </div>

        <div class="menu-icon" id="menu-icon" onclick="toggleMenu()">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
        </div>

        <!-- Menu Lateral -->
        <div class="sidebar" id="sidebar">

            <div class="logo-menu">
                <a href="./index.php">
                    <img src="../imagens/logo.png" alt="">
                    <h3>OpenPass</h3>
                </a>
            </div>

            <ul>
                <li><a href="./pesquisa.php">Procurar Ingressos</a></li>
                <li><a href="./areaV.php">Anunciar Ingresso <i class="fa-solid fa-plus"></i></a></li>
                <li><a href="./ingressoM.php">Meus Ingressos</a></li>
                <li><a href="./login/cadastro.php">Cadastrar-se!</a></li>
            </ul>

            <div class="user-menu">
                <a href="./login/cadastro.php">
                    <div class="quadro">
                        <i class="fa-solid fa-user"></i>
                    </div>
                    <p>Visitante</p>
                </a>
            </div>

            <div class="redes">
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-x-twitter"></i>
                <i class="fa-brands fa-whatsapp"></i>
            </div>

        </div>

        <div class="pesquisa">
            <a href="./pesquisa.php">
                <i class="fa-solid fa-magnifying-glass"></i>
                Pesquisar
            </a>
        </div>

        <div class="ingresso">
            <a href="./areaV.php">
                Anunciar Ingresso
                <i class="fa-solid fa-plus"></i>
            </a>
        </div>

        <div class="carrinho">
            <a href="./cart.php">
                Carrinho
                <i class="fa-solid fa-cart-shopping"></i>
            </a>
        </div>

        <div class="cadastro">
            <a href="./login/cadastro.php">
                Cadastrar-se!
            </a>
        </div>

        <div class="perfil" id="profile">
            <div class="dropdown-container">
                <button class="dropdown-button" onclick="toggleDropdown()">
                    Perfil
                    <i class="fa-solid fa-user"></i> 
                </button>
                <div id="dropdown-menu" class="dropdown-menu">
                    <a href="./login/cadastro.php">Entrar</a>
                    <a href="./perfil/perfil.php">Minha Conta</a>
                    <a href="./ingressoM.php">Meus Ingressos</a>
                    <a href="./pesquisa.php">Procurar Ingressos</a>
                    <a href="#">Ajuda</a>
                    <a href="../login/logout.php">Sair</a>
                </div>
            </div>
            
        </div>
    </header>

    <main>
        <div class="slides-carrossel">
            <div class="carousel">
                <div class="slides">
                    <div class="slide" style="background-color: #3498db;">Slide 1</div>
                    <div class="slide" style="background-color: #e74c3c;">Slide 2</div>
                    <div class="slide" style="background-color: #2ecc71;">Slide 3</div>
                </div>
                <div class="navigation">
                    <span class="dot" data-index="0"></span>
                    <span class="dot" data-index="1"></span>
                    <span class="dot" data-index="2"></span>
                </div>
            </div>
        </div>

        <div class="topicos">
            <div class="topicos-botoes">

                <div class="festa">
                    <a href="./festa.php">
                        <img src="../imagens/festa.png" alt="">
                    </a>
                    <p>Festa e festivais</p>
                </div>

                <div class="shows">
                    <a href="./shows.php">
                        <img src="../imagens/show-icon.png" alt="">
                    </a>
                    <p>Shows e Musicais</p>
                </div>
                
                <div class="esporte">
                    <a href="./esporte.php">
                        <img src="../imagens/esporte-icon.png" alt="">
                    </a>
                    <p>Esportes</p>
                </div>

                <div class="palestra">
                    <a href="./palesta.php">
                        <img src="../imagens/palestra.png" alt="">
                    </a>
                    <p>Palestras</p>
                </div>

                <div class="tours">
                    <a href="./lazer.php">
                        <img src="../imagens/lazer.png" alt="">
                    </a>
                    <p>Lazer e tours</p>
                </div>

                <div class="cultura">
                    <a href="./cultura.php">
                        <img src="../imagens/culture.png" alt="">    
                    </a>
                    <p>Cultura</p>
                </div>

                <div class="more">
                    <a href="./pesquisa.php">
                        <img src="../imagens/plus.png" alt="">    
                    </a>
                    <p>Mais</p>
                </div>

            </div>
        </div>
        <div class="primeiros-ingressos">
            <a href="#" class="card-ingresso">
                <img src="./imagens/image.png" alt="">
                <p class="data">dia/data/horario</p>
                <p class="nome">Nome do evento</p>
                <div class="lugar">
                    <strong>R$55</strong>
                    Local
                </div>
            </a>
            <a href="#" class="card-ingresso">
                <img src="./imagens/image.png" alt="">
                <p class="data">dia/data/horario</p>
                <p class="nome">Nome do evento</p>
                <div class="lugar">
                    <strong>R$55</strong>
                    Local
                </div>
            </a>
            <a href="#" class="card-ingresso">
                <img src="./imagens/image.png" alt="">
                <p class="data">dia/data/horario</p>
                <p class="nome">Nome do evento</p>
                <div class="lugar">
                    <strong>R$55</strong>
                    Local
                </div>
            </a>
            <a href="#" class="card-ingresso">
                <img src="./imagens/image.png" alt="">
                <p class="data">dia/data/horario</p>
                <p class="nome">Nome do evento</p>
                <div class="lugar">
                    <strong>R$55</strong>
                    Local
                </div>
            </a>
            <a href="#" class="card-ingresso">
                <img src="../imagens/image.png" alt="">
                <p class="data">dia/data/horario</p>
                <p class="nome">Nome do evento</p>
                <div class="lugar">
                    <strong>R$55</strong>
                    Local
                </div>
            </a>
        </div>

        <div class="folder">
            <div class="folder-img">
                <img src="../OpenPassOfc/imagens/folder.png" alt="">
                <div class="text">
                    <h1><span>publique</span> seu ingresso <br> com a <span>openpass!</span></h1>
                    <a href="./areaV.php">Anunciar</a>
                </div>
            </div>
            <div class="folder-img-Mob">
                <img src="../OpenPassOfc/imagens/folder-mobile.png" alt="">
                <div class="text-mob">
                    <h1><span>publique</span> seu ingresso <br> com a <span>openpass!</span></h1>
                    <a href="./areaV.php">Anunciar</a>
                </div>
            </div>
        </div>
        
        <div class="primeiros-ingressos">
            <a href="#" class="card-ingresso">
                <img src="./imagens/image.png" alt="">
                <p class="data">dia/data/horario</p>
                <p class="nome">Nome do evento</p>
                <div class="lugar">
                    <strong>R$55</strong>
                    Local
                </div>
            </a>
            <a href="#" class="card-ingresso">
                <img src="./imagens/image.png" alt="">
                <p class="data">dia/data/horario</p>
                <p class="nome">Nome do evento</p>
                <div class="lugar">
                    <strong>R$55</strong>
                    Local
                </div>
            </a>
            <a href="#" class="card-ingresso">
                <img src="./imagens/image.png" alt="">
                <p class="data">dia/data/horario</p>
                <p class="nome">Nome do evento</p>
                <div class="lugar">
                    <strong>R$55</strong>
                    Local
                </div>
            </a>
            <a href="#" class="card-ingresso">
                <img src="./imagens/image.png" alt="">
                <p class="data">dia/data/horario</p>
                <p class="nome">Nome do evento</p>
                <div class="lugar">
                    <strong>R$55</strong>
                    Local
                </div>
            </a>
            <a href="#" class="card-ingresso">
                <img src="./imagens/image.png" alt="">
                <p class="data">dia/data/horario</p>
                <p class="nome">Nome do evento</p>
                <div class="lugar">
                    <strong>R$55</strong>
                    Local
                </div>
            </a>
        </div>
        <div class="primeiros-ingressos">
            <a href="#" class="card-ingresso">
                <img src="./imagens/image.png" alt="">
                <p class="data">dia/data/horario</p>
                <p class="nome">Nome do evento</p>
                <div class="lugar">
                    <strong>R$55</strong>
                    Local
                </div>
            </a>
            <a href="#" class="card-ingresso">
                <img src="./imagens/image.png" alt="">
                <p class="data">dia/data/horario</p>
                <p class="nome">Nome do evento</p>
                <div class="lugar">
                    <strong>R$55</strong>
                    Local
                </div>
            </a>
            <a href="#" class="card-ingresso">
                <img src="./imagens/image.png" alt="">
                <p class="data">dia/data/horario</p>
                <p class="nome">Nome do evento</p>
                <div class="lugar">
                    <strong>R$55</strong>
                    Local
                </div>
            </a>
            <a href="#" class="card-ingresso">
                <img src="./imagens/image.png" alt="">
                <p class="data">dia/data/horario</p>
                <p class="nome">Nome do evento</p>
                <div class="lugar">
                    <strong>R$55</strong>
                    Local
                </div>
            </a>
            <a href="#" class="card-ingresso">
                <img src="./imagens/image.png" alt="">
                <p class="data">dia/data/horario</p>
                <p class="nome">Nome do evento</p>
                <div class="lugar">
                    <strong>R$55</strong>
                    Local
                </div>
            </a>
            
        </div>
        <div class="primeiros-ingressos">
            <a href="#" class="card-ingresso">
                <img src="./imagens/image.png" alt="">
                <p class="data">dia/data/horario</p>
                <p class="nome">Nome do evento</p>
                <div class="lugar">
                    <strong>R$55</strong>
                    Local
                </div>
            </a>
            <a href="#" class="card-ingresso">
                <img src="./imagens/image.png" alt="">
                <p class="data">dia/data/horario</p>
                <p class="nome">Nome do evento</p>
                <div class="lugar">
                    <strong>R$55</strong>
                    Local
                </div>
            </a>
            <a href="#" class="card-ingresso">
                <img src="./imagens/image.png" alt="">
                <p class="data">dia/data/horario</p>
                <p class="nome">Nome do evento</p>
                <div class="lugar">
                    <strong>R$55</strong>
                    Local
                </div>
            </a>
            <a href="#" class="card-ingresso">
                <img src="./imagens/image.png" alt="">
                <p class="data">dia/data/horario</p>
                <p class="nome">Nome do evento</p>
                <div class="lugar">
                    <strong>R$55</strong>
                    Local
                </div>
            </a>
            <a href="#" class="card-ingresso">
                <img src="./imagens/image.png" alt="">
                <p class="data">dia/data/horario</p>
                <p class="nome">Nome do evento</p>
                <div class="lugar">
                    <strong>R$55</strong>
                    Local
                </div>
            </a>
        </div>

    </main>

    <div class="footer-mob">

        <div class="container-buttons">
            <div class="inicio">
                <a href="./index.php">
                    <i class="fa-solid fa-house"></i>
                    Início
                </a>
            </div>
            <div class="anunciar">
                <a href="./areaV.php">
                    <i class="fa-solid fa-plus"></i>
                    Anunciar
                </a>
            </div>
            <div class="procura">
                <a href="./pesquisa.php">
                    <i class="fa-solid fa-globe"></i>
                    Procurar
                </a>
            </div>
            <div class="ingressos">
                <a href="./ingressoM.php">
                    <i class="fa-solid fa-ticket"></i>
                    Ingressos
                </a>
            </div>
            <div class="carrinho-footer">
                <a href="./cart.php">
                    <i class="fa-solid fa-cart-shopping"></i>
                    Carrinho
                </a>
            </div>
            <div class="perfil-mob">
                <a href="./perfil/perfil.php">
                    <i class="fa-solid fa-user"></i>
                    Perfil
                </a>
            </div>
        </div>

    </div>

    <footer>
        <div class="logo">
            <img src="imagens/logo.png" alt="">
            <h3>OpenPass</h3>
        </div>

        <div class="menu-footer">
            <div class="pt-cima">
                <a href="./pesquisa.php">Encontre Ingressos</a>
                <a href="#">Cidades</a>
                <a href="#">Categorias</a>
                <a href="./areaV.php">Adicione seu ingresso</a>
                <a href="#">Ajuda</a>
            </div>
            <div class="linha"></div>
            <div class="pt-baixo">
                <a href="index.php">Home</a>
                <a href="#">Sobre</a>
                <a href="#">Termos e Políticas</a>
            </div>
        </div>

        <div class="redes-footer">
            <a href="#">
                <i class="fa-brands fa-instagram"></i>
            </a>
            <a href="#">
                <i class="fa-brands fa-whatsapp"></i>
            </a>
            <a href="#">
                <i class="fa-brands fa-x-twitter"></i>
            </a>
        </div>
    </footer>

    <script>
        //menu lateral
        // Função para abrir e fechar o menu
        function toggleMenu() {
            const sidebar = document.getElementById('sidebar');
            const menuIcon = document.getElementById('menu-icon');
            const content = document.getElementById('content');

            // Se o menu estiver fechado, abra-o
            if (sidebar.classList.contains('open')) {
                sidebar.classList.remove('open');
                content.classList.remove('shifted');
                menuIcon.style.display = 'block'; // Exibe o ícone novamente
            } else {
                sidebar.classList.add('open');
                content.classList.add('shifted');
                menuIcon.style.display = 'none'; // Esconde o ícone
            }
        }

        // Fecha o menu se o clique for fora do menu
        document.addEventListener('click', function (event) {
            const sidebar = document.getElementById('sidebar');
            const menuIcon = document.getElementById('menu-icon');
            const content = document.getElementById('content');

            // Verifica se o clique foi fora do menu e do ícone
            if (!sidebar.contains(event.target) && !menuIcon.contains(event.target)) {
                if (sidebar.classList.contains('open')) {
                    sidebar.classList.remove('open');
                    content.classList.remove('shifted');
                    menuIcon.style.display = 'block'; // Reexibe o ícone
                }
            }
        });

        //aba visitante
        function toggleDropdown() {
            const dropdown = document.getElementById('dropdown-menu');
            if (dropdown.style.display === 'block') {
                dropdown.style.display = 'none';
            } else {
                dropdown.style.display = 'block';
            }
        }

        // Fecha o dropdown ao clicar fora
        document.addEventListener('click', function (event) {
            const dropdown = document.getElementById('dropdown-menu');
            const button = document.querySelector('.dropdown-button');
            if (!button.contains(event.target) && !dropdown.contains(event.target)) {
                dropdown.style.display = 'none';
            }
        });

        //carrossel
        const slides = document.querySelector('.slides');
        const dots = document.querySelectorAll('.dot');
        const totalSlides = dots.length;
        let currentIndex = 0;
        let interval;

        // Atualiza o slide ativo
        function updateSlide(index) {
            slides.style.transform = `translateX(-${index * 100}%)`;
            dots.forEach(dot => dot.classList.remove('active'));
            dots[index].classList.add('active');
        }

        // Navegação automática
        function startAutoSlide() {
            interval = setInterval(() => {
                currentIndex = (currentIndex + 1) % totalSlides;
                updateSlide(currentIndex);
            }, 3000);
        }

        // Clique nos pontos para navegação manual
        dots.forEach(dot => {
            dot.addEventListener('click', () => {
                currentIndex = parseInt(dot.dataset.index);
                updateSlide(currentIndex);
                clearInterval(interval); // Pausa a navegação automática ao interagir
                startAutoSlide(); // Reinicia o timer
            });
        });

        // Inicializa o carrossel
        updateSlide(currentIndex);
        startAutoSlide();

    </script>
    <script src="https://kit.fontawesome.com/5553e94d09.js" crossorigin="anonymous"></script>
</body>
</html>