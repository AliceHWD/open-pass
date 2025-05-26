<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Inter", serif;
        }

        header {
            padding: 20px;
            background-color: #011F26;
            color: white;
            display: grid;
            grid-template-columns: 1.3fr repeat(5, 1fr);
            grid-template-rows: 100%;
            justify-content: center;
            align-items: center;
        }

        header .logo a {
            display: flex;
            align-items: center;
            margin-left: 15%;
            font-size: 1.3rem;
            text-decoration: none;
            color: #fff;
        }
        
        header .logo img {
            width: 20%;
        }

        header .menu-icon {
            display: none;
        }
        
        header .ingresso a, .pesquisa a, .carrinho a, .perfil a {
            text-decoration: none;
            color: #ffffff;
            cursor: pointer;
        }

        header .perfil {
            display: flex;
            align-items: center;
            justify-content: space-evenly;
            margin-right: 30%;
        }

        .cadastro a{
            padding: 5px 10px;
            background-color: #5C7373;
            color: #ffffff;
            text-decoration: none;
            border-radius: 5px;
        }

        .bar {
            width: 30px;
            height: 4px;
            margin: 6px 0;
            background-color: #fff;
            transition: 0.4s;
        }

        .sidebar {
            display: none;
            height: 100%;
            width: 350px;
            position: fixed;
            top: 0;
            left: -350px;
            background: #011F26;
            border: 1px solid rgba(0, 0, 0, 0.17);
            color: white;
            transition: 0.3s;
            padding: 20px;
            z-index: 1000;
        }

        /* Quando o menu lateral estiver aberto */
        .sidebar.open {
            left: 0;
            /* Menu visível */
        }

        .sidebar ul {
            list-style-type: none;
            padding: 0;
            margin-top: 50px;
        }

        .sidebar ul li {
            padding: 15px 16px;
            text-align: left;
        }

        .sidebar ul li:nth-child(7) a {
            color: red;
        }

        .sidebar ul li a {
            font-size: 1.4rem;
            color: white;
            text-decoration: none;
            display: block;
            transition: 0.3s;
        }

        .sidebar ul li a:hover {
            transform: scale(.5.1);
            font-weight: 800;
        }

        .logo-menu a{
            text-decoration: none;
            color: white;
            display: flex;
            align-items: center;
            font-size: 1.3rem;
            padding-top: 100px;
        }

        .logo-menu img {
            width: 40%;
        }

        .logo-menu h3 {
            font-size: 1.8rem;
        }
        
        .user-menu a {
            margin-top: 20px;
            margin-left: 20px;
            display: flex;
            align-items: center;
            text-decoration: none;
            color: white;
        }

        .quadro {
            background-color: #5C7373;
            width: 80px;
            height: 80px;
            border-radius: 50%;
            font-size: 3rem;
            color: white;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .user-menu p {
            font-size: 1.5rem;
            margin-left: 20px;
            font-weight: 600;
        }

        .redes {
            margin-top: 50px;
            font-size: 1.8rem;
            text-align: center;
        }

        .redes i{
            margin-left: 10px;
        }

        .local {
            grid-column: 3;
        }

        header button {
            width: 50%;
            background: none;
            border: none;
            display: flex;
            align-items: center;
            color: white;
            font-size: 1rem;
            cursor: pointer;
        }

        header button p {
            margin-left: 10px;
        }

        .dropdown-container {
            position: relative;
        }

        .dropdown-button {
            display: flex;
            color: white;
            cursor: pointer;
        }

        .dropdown-button i {
            margin-left: 10px;
        }

        .dropdown-menu {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            background-color: white;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            overflow: hidden;
            min-width: 150px;
            z-index: 1000;
        }

        .dropdown-menu a {
            display: block;
            padding: 10px 15px;
            text-decoration: none;
            color: #333;
            font-size: 12px;
        }

        .dropdown-menu a:hover {
            background-color: #f1f1f1;
        }

        .dropdown-menu a:nth-child(6) {
            color: red;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            margin-top: 2rem;
        }

        .container h1 {
            text-align: center;
            margin-bottom: 2rem;
            font-size: 2rem;
        }

        .container h2 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }

        .tickets-section {
            margin-bottom: 2rem;
        }

        .tickets-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
            margin-bottom: 2rem;
        }

        .ticket-card {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s ease-in-out;
        }

        .ticket-card:hover {
            transform: translateY(-4px);
        }

        .ticket-image {
            width: 100%;
            height: 150px;
            background-color: #000;
        }

        .ticket-details {
            padding: 1rem;
        }

        .container h3 {
            font-size: 1rem;
            margin-bottom: 0.5rem;
        }

        .event-info,
        .seat-info {
            font-size: 0.9rem;
            color: #666;
            margin-bottom: 0.25rem;
        }

        .price {
            font-weight: 600;
            margin: 0.5rem 0;
        }

        .view-ticket {
            width: 100%;
            padding: 0.75rem;
            background-color: #2A9D8F;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 0.9rem;
            transition: background-color 0.2s;
        }

        .view-ticket:hover {
            background-color: #248277;
        }

        .buy-tickets {
            display: block;
            width: 100%;
            max-width: 300px;
            margin: 2rem auto;
            padding: 1rem;
            background-color: #2A9D8F;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 1rem;
            font-weight: 600;
            text-transform: uppercase;
            transition: background-color 0.2s;
        }

        .buy-tickets:hover {
            background-color: #248277;
        }

        /* footer */
        footer{
            background-color: #011F26;
            width: 100%;
            height: 40vh;
            color: #fff;
            position: absolute;
            margin-top: 150px;
            top: 100%;
        }

        footer .logo{
            position: absolute;
            display: flex;
            align-items: center;
            font-size: 1.1rem;
            top: 20%;
            left: 10%;
        }

        footer .logo img {
            width: 20%;
        }

        footer .menu-footer{
            position: absolute;
            top: 50%;
            left: 20%;
        }

        footer .menu-footer a{
            margin-right: 80px;
            text-align: center;
            text-decoration: none;
            color: white;
            font-weight: 600;
        }

        footer .linha{
            margin-top: 20px;
            margin-bottom: 20px;
            background-color: #ffffff;
            height: 1px;
            width: 100%;
        }

        footer .redes-footer{
            position: absolute;
            top: 90%;
            left: 75%;
            font-size: 1.4rem;
            text-decoration: none;
        }

        .redes-footer a{
            text-decoration: none;
        }

        .redes-footer i{
            color: #fff;
            margin-right: 10px;
        }

        /* footer mobile */
        .footer-mob{
            background-color: #011F26;
            position: fixed;
            top: 92%;
            width: 100%;
            z-index: 999;
            display: none;
        }

        .container-buttons{
            display: grid;
            grid-template-columns: repeat(6, 1fr);
            grid-template-rows: 80px;
            justify-content: center;
            align-items: center;
        }

        .container-buttons div a{
            display: flex;
            flex-direction: column;
            text-align: center;
            text-decoration: none;
            font-size: .7rem;
        }

        .container-buttons i{
            margin-bottom: 5px;
            font-size: 1rem;
        }
        
        .ingressos a {
            color: #82C6C6;
        }

        .procura a, .inicio a, .anunciar a, .carrinho-footer a, .perfil-mob a{
            color: #fff;
        }

        .ingressos i{
            transform: rotate(90deg);
        }

        .paginas{
            margin-top: 100px;
        }

        .categorias{
            margin-top: 50px;
        }

        .categorias h2{
            font-size: 1.8rem;
            margin-left:70px;
            color: #011F26;
        }

        @media (max-width: 768px) {
            .logo h3, .pesquisa, .local, .ingresso, .carrinho, .cadastro a, .perfil button {
                display: none;
            }

            header {
                grid-template-columns: repeat(2, 1fr);
            }

            header .logo {
                grid-column: 2;
                text-align: end;
            }
            
            header .logo a {
                text-align: end;
                margin-left: 40%;
            }

            header .logo img {
                width: 70px;
            }

            header .menu-icon {
                display: block;
                grid-row: 1;
                position: absolute;
                left: 10%;
            }

            .sidebar {
                display: block;
                /* width: 70%; */
            }

            .logo-menu h3 {
                font-size: 1.3rem;
            }

            .sidebar ul li a {
                font-size: .9rem;
            }

            .container {
                padding: 1rem;
                height: 350vh;
            }

            .tickets-grid {
                grid-template-columns: 1fr;
            }

            .ticket-card {
                max-width: 400px;
                margin: 0 auto;
            }
        }

        @media (max-width: 450px) {

            footer {
                display: none;
            }

            .footer-mob {
                display: block;
            }
        }
    </style>
    <header>
        <div class="logo">
            <a href="./index.php">
                <img src="imagens/logo.png" alt="">
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
                    <img src="imagens/logo.png" alt="">
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
            <a href="./login/cadastro.php" class="cadastro">
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
                    <a href="#">Sair</a>
                </div>
            </div>
            
        </div>
    </header>

    <div class="container">
        <h1>Meus Ingressos</h1>
        <section class="tickets-section">
            <h2>Encerrados</h2>
            <div class="tickets-grid">
                <div class="ticket-card">
                    <div class="ticket-image"></div>
                    <div class="ticket-details">
                        <h3>TITULAR</h3>
                        <p class="event-info">Show da Hora</p>
                        <p class="seat-info">Pista / Assento A1</p>
                        <p class="price">R$ 55,00</p>
                        <button class="view-ticket">Visualizar Ingresso</button>
                    </div>
                </div>
                <div class="ticket-card">
                    <div class="ticket-image"></div>
                    <div class="ticket-details">
                        <h3>TITULAR</h3>
                        <p class="event-info">Show da Noite</p>
                        <p class="seat-info">Pista / Assento B2</p>
                        <p class="price">R$ 65,00</p>
                        <button class="view-ticket">Visualizar Ingresso</button>
                    </div>
                </div>
                <div class="ticket-card">
                    <div class="ticket-image"></div>
                    <div class="ticket-details">
                        <h3>TITULAR</h3>
                        <p class="event-info">Show da Tarde</p>
                        <p class="seat-info">Pista / Assento C3</p>
                        <p class="price">R$ 45,00</p>
                        <button class="view-ticket">Visualizar Ingresso</button>
                    </div>
                </div>
                <div class="ticket-card">
                    <div class="ticket-image"></div>
                    <div class="ticket-details">
                        <h3>TITULAR</h3>
                        <p class="event-info">Show da Manhã</p>
                        <p class="seat-info">Pista / Assento D4</p>
                        <p class="price">R$ 75,00</p>
                        <button class="view-ticket">Visualizar Ingresso</button>
                    </div>
                </div>
            </div>
      </section>

      <section class="tickets-section">
        <h2>Disponíveis</h2>
        <div class="tickets-grid">
          <div class="ticket-card">
            <div class="ticket-image"></div>
            <div class="ticket-details">
              <h3>TITULAR</h3>
              <p class="event-info">Show do Mês</p>
              <p class="seat-info">Pista / Assento E5</p>
              <p class="price">R$ 85,00</p>
              <button class="view-ticket">Visualizar Ingresso</button>
            </div>
          </div>
          <div class="ticket-card">
            <div class="ticket-image"></div>
            <div class="ticket-details">
              <h3>TITULAR</h3>
              <p class="event-info">Show do Ano</p>
              <p class="seat-info">Pista / Assento F6</p>
              <p class="price">R$ 95,00</p>
              <button class="view-ticket">Visualizar Ingresso</button>
            </div>
          </div>
          <div class="ticket-card">
            <div class="ticket-image"></div>
            <div class="ticket-details">
              <h3>TITULAR</h3>
              <p class="event-info">Show Especial</p>
              <p class="seat-info">Pista / Assento G7</p>
              <p class="price">R$ 105,00</p>
              <button class="view-ticket">Visualizar Ingresso</button>
            </div>
          </div>
          <div class="ticket-card">
            <div class="ticket-image"></div>
            <div class="ticket-details">
              <h3>TITULAR</h3>
              <p class="event-info">Show Premium</p>
              <p class="seat-info">Pista / Assento H8</p>
              <p class="price">R$ 115,00</p>
              <button class="view-ticket">Visualizar Ingresso</button>
            </div>
          </div>
        </div>
      </section>

      <button class="buy-tickets">COMPRAR INGRESSOS</button>
    </div>

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

        // Get all view ticket buttons
        const viewTicketButtons = document.querySelectorAll('.view-ticket');

        // Add click event listener to each view ticket button
        viewTicketButtons.forEach(button => {
        button.addEventListener('click', () => {
            const ticketDetails = button.closest('.ticket-details');
            const eventName = ticketDetails.querySelector('.event-info').textContent;
            const seatInfo = ticketDetails.querySelector('.seat-info').textContent;
            alert(`Viewing Ticket Details\nEvent: ${eventName}\nSeat: ${seatInfo}`);
        });
        });

        // Get the buy tickets button
        const buyTicketsButton = document.querySelector('.buy-tickets');

        // Add click event listener to the buy tickets button
        buyTicketsButton.addEventListener('click', () => {
            alert('Redirecionando a página de compra');
            window.location.href = './pesquisa.php'
        });
    </script>
    <script src="https://kit.fontawesome.com/5553e94d09.js" crossorigin="anonymous"></script>
</body>
</html>