<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OpenPass</title>
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
            padding: 10px;
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
            border-radius: 5px;
            padding: 5px 10px;
            background-color: #5C7373;
            color: #ffffff;
            text-decoration: none;
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
            display: flex;
            min-height: 120vh;
        }

        /* Search Bar */
        .search-container {
            position: absolute;
            left: 0;
            right: 0;
            padding: 1rem;
            background-color: white;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            z-index: 100;
        }

        .search-bar {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            display: flex;
        }

        .search-bar input {
            flex: 1;
            padding: 0.75rem;
            border: 2px solid #eee;
            border-radius: 4px;
            font-size: 1rem;
        }

        /* filtros */
        .filtros-btn {
            height: 100%;
            width: 280px;
            padding: 2rem;
            background-color: white;
            position: absolute;
            left: 0;
            top: 180px;
            bottom: 0;
            overflow-y: auto;
            border-right: 1px solid #eee;
        }

        .filter-section {
            margin-bottom: 2rem;
        }

        .filter-section h3 {
            margin-bottom: 1rem;
            color: #34495e;
        }

        .category-list {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
        }

        .price-inputs {
            display: flex;
            gap: 1rem;
        }

        .price-inputs input {
            width: 100%;
            padding: 0.5rem;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .filter-button {
            width: 100%;
            padding: 0.75rem;
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.2s;
        }

        .filter-button:hover {
            background-color: #2980b9;
        }

        /* Main Content */
        .main-content {
            flex: 1;
            margin-left: 280px;
            margin-top: 100px;
            padding: 2rem;
        }

        .events-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 2rem;
        }

        .event-card {
            background-color: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow:  0 2px 4px rgba(0,0,0,0.1);
            transition: transform 0.2s;
        }

        .event-card:hover {
            transform: translateY(-4px);
        }

        .event-image {
            width: 100%;
            height: 160px;
            background-color: #eee;
            
            background-size: cover;
            background-position: center;
        }

        .event-info {
            padding: 1rem;
        }

        .event-date {
            font-size: 0.875rem;
            color: #3498db;
            margin-bottom: 0.5rem;
        }

        .event-name {
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        .event-location {
            font-size: 0.875rem;
            color: #666;
        }

        /* Detail View Styles */
        .detail-view {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: white;
            z-index: 1000;
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.3s ease;
            overflow-y: auto;
        }

        .detail-view.active {
            opacity: 1;
            visibility: visible;
        }

        .detail-header {
            position: relative;
            height: 300px;  
            background-color: #5C7373;
            background-size: cover;
            background-position: center;
        }

        .back-button {
            position: absolute;
            top: 1rem;
            left: 1rem;
            background: white;
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 4px;
            cursor: pointer;
            font-weight: 500;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .detail-content {
            max-width: 800px;
            margin: -60px auto 0;
            padding: 2rem;
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            position: relative;
        }

        .detail-title {
            font-size: 2rem;
            margin-bottom: 1rem;
        }

        .detail-info {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
            margin-bottom: 2rem;
            padding-bottom: 2rem;
            border-bottom: 1px solid #eee;
        }

        .info-item {
            display: flex;
            flex-direction: column;
        }

        .info-label {
            font-size: 0.875rem;
            color: #7f8c8d;
            margin-bottom: 0.5rem;
        }

        .info-value {
            font-weight: 500;
        }

        .detail-description {
            line-height: 1.6;
            color: #2c3e50;
        }

        .add-cart {
            margin-top: 20px;
        }

        .add-cart a{
            margin-top: 10px;
            text-align: center;
            width: 25%;
            padding: 5px;
            background-color: #2980b9;
            border-radius: 5px;
            text-decoration: none;
            color: #ffffff;
        }
        
        /* footer */
        footer{
            background-color: #011F26;
            width: 100%;
            height: 40vh;
            color: #fff;
            position: absolute;
            margin-top: 100px;
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

        .procura a{
            color: #82C6C6;
        }

        .inicio a,.ingressos a, .anunciar a, .perfil-mob a, .carrinho-footer a{
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

        @media (max-width: 1024px) {
            header {
                font-size: .8rem;
            }

            header .perfil {
                margin-right: 0;
                margin-left: 100px;
            }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .filtros-btn {
                transform: translateX(-100%);
                transition: transform 0.3s;
            }

            .filtros-btn.active {
                transform: translateX(0);
            }

            .main-content {
                margin-left: 0;
            }

            .search-bar {
                margin-left: 80px
            }

            .events-grid {
                grid-template-columns: 1fr;
            }

            .logo h3, .pesquisa, .carrinho, .local, .ingresso, .cadastro a, .perfil button {
                display: none;
            }

            header {
                grid-template-columns: repeat(2, 1fr);
            }

            header .logo {
                grid-column: 2;
                text-align: end;
                margin-right: 100px;
            }

            header .logo img {
                width: 80px;
            }
            
            header .logo a {
                text-align: end;
                margin-left: 70%;
            }

            header .menu-icon {
                display: block;
                grid-row: 1;
                position: absolute;
                left: 10%;
            }

            .sidebar {
                display: block;
            }

            .logo-menu h3 {
                font-size: 1.3rem;
            }

            .sidebar ul li a {
                font-size: .9rem;
            }
        }

        @media (max-width: 450px) {
            header .logo img {
                margin-left: 50px;
            }

            .search-bar {
                max-width: 300px;
            }

            .footer-mob {
                display: block;
            }

            footer {
                display: none;
            }
        }

        @media (max-width: 380px) {
            .search-bar {
                max-width: 260px;
                margin-left: 80px
            }
        }

        @media (max-width: 320px) {
            .search-bar {
                max-width: 80px;
            }

            .search-bar input {
                font-size: .8rem;
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
                <li><a href="#">Todas as Categorias</a></li>
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
                    <a href="#">Sair</a>
                </div>
            </div>
            
        </div>
    </header>

    <div class="search-container">
        <div class="search-bar">
            <input type="text" placeholder="Search events...">
        </div>
    </div>

    <div class="container">
        <aside class="filtros-btn">
            <div class="filter-section">
                <h3>Category</h3>
                <div class="category-list">
                    <label><input type="checkbox" checked> Toda as Categorias</label>
                    <label><input type="checkbox"> Esportes</label>
                    <label><input type="checkbox"> Cinema</label>
                    <label><input type="checkbox"> Shows</label>
                    <label><input type="checkbox"> Tours</label>
                </div>
            </div>

            <div class="filter-section">
                <h3>Data</h3>
                <input type="date" style="width: 100%; padding: 0.5rem;">
            </div>

            <div class="filter-section">
                <h3>Preço</h3>
                <div class="price-inputs">
                    <input type="number" placeholder="Mínimo">
                    <input type="number" placeholder="Máximo">
                </div>
            </div>

            <div class="filter-section">
                <h3>Localização</h3>
                <input type="text" placeholder="Enter city or venue" style="width: 100%; padding: 0.5rem;">
            </div>

            <button class="filter-button">Aplicar Filtros</button>
        </aside>

        <main class="main-content">
            <div class="events-grid">
                <!-- Event cards will be dynamically generated by JavaScript -->
            </div>
        </main>

        <div class="detail-view">
            <div class="detail-header">
                <button class="back-button">← Back to Events</button>
            </div>
            <div class="detail-content">
                <!-- Detail content will be populated by JavaScript -->
            </div>
        </div>

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

       // Sample event data
       const events = [
            {
                id: 1,
                name: 'Summer Music Festival',
                date: 'Sat, Jul 15, 2024',
                time: '7:00 PM',
                location: 'Central Park',
                venue: 'Main Stage',
                price: '$45.00',
                capacity: '5000 people',
                description: 'Join us for an unforgettable evening of live music under the stars. Featuring multiple stages, food vendors, and amazing performances from both local and international artists. This year\'s lineup includes some of the most exciting acts in contemporary music.',
                image: 'https://source.unsplash.com/random/800x600/?concert'
            },
            {
                id: 2,
                name: 'Tech Conference 2024',
                date: 'Mon, Aug 20, 2024',
                time: '9:00 AM',
                location: 'Convention Center',
                venue: 'Grand Ballroom',
                price: '$299.00',
                capacity: '2000 people',
                description: 'A two-day conference featuring keynote speakers, workshops, and networking opportunities. Learn about the latest developments in AI, blockchain, and cloud computing from industry leaders.',
                image: 'https://source.unsplash.com/random/800x600/?technology'
            },
            {
                id: 3,
                name: 'Food & Wine Festival',
                date: 'Sat, Sep 5, 2024',
                time: '12:00 PM',
                location: 'Riverside Park',
                venue: 'Festival Grounds',
                price: '$75.00',
                capacity: '3000 people',
                description: 'Experience the finest local and international cuisines paired with exceptional wines. Meet celebrity chefs, attend cooking demonstrations, and enjoy live entertainment throughout the day.',
                image: 'https://source.unsplash.com/random/800x600/?food'
            }
        ];

        // Generate event cards
        function generateEventCards() {
            const eventsGrid = document.querySelector('.events-grid');
            events.forEach(event => {
                const eventCard = document.createElement('div');
                eventCard.className = 'event-card';
                eventCard.innerHTML = `
                    <div class="event-image" style="background-image: url('${event.image}')"></div>
                    <div class="event-info">
                        <div class="event-date">${event.date} - ${event.time}</div>
                        <div class="event-name">${event.name}</div>
                        <div class="event-location">${event.location}</div>
                    </div>
                `;
                eventCard.addEventListener('click', () => showEventDetail(event));
                eventsGrid.appendChild(eventCard);
            });
        }

        // Show event detail
        function showEventDetail(event) {
            const detailView = document.querySelector('.detail-view');
            const detailHeader = document.querySelector('.detail-header');
            const detailContent = document.querySelector('.detail-content');

            // Update header image
            detailHeader.style.backgroundImage = `url('${event.image}')`;

            // Update content
            detailContent.innerHTML = `
                <h1 class="detail-title">${event.name}</h1>
                <div class="detail-info">
                    <div class="info-item">
                        <span class="info-label">Date</span>
                        <span class="info-value">${event.date}</span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Time</span>
                        <span class="info-value">${event.time}</span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Location</span>
                        <span class="info-value">${event.location}</span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Venue</span>
                        <span class="info-value">${event.venue}</span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Price</span>
                        <span class="info-value">${event.price}</span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Capacity</span>
                        <span class="info-value">${event.capacity}</span>
                    </div>
                </div>
                <div class="detail-description">
                    ${event.description}
                </div>
                <div class="add-cart">
                    <a href="./cart.php" id="btn-addCart">adicionar ao carrinho</a>
                </div>
            `;

            // Show detail view with animation
            detailView.classList.add('active');

            // Prevent body scrolling
            document.body.style.overflow = 'hidden';
        }

        document.addEventListener('DOMContentLoaded', () => {
            generateEventCards();

            // Mobile sidebar toggle
            const toggleButton = document.createElement('button');
            toggleButton.innerHTML = 'Filtros';
            toggleButton.style.cssText = `
                position: absolute;
                left: 1rem;
                top: 12%;
                z-index: 101;
                display: none;
                padding: 0.5rem;
                background: #3498db;
                border-radius: 5px;
                border: none;
                font-size: .8rem;
                cursor: pointer;
            `;

            document.body.appendChild(toggleButton);

            // Show/hide toggle button based on screen size
            function updateToggleButtonVisibility() {
                toggleButton.style.display = window.innerWidth <= 768 ? 'block' : 'none';
            }

            window.addEventListener('resize', updateToggleButtonVisibility);
            updateToggleButtonVisibility();

            // Toggle sidebar on mobile
            toggleButton.addEventListener('click', () => {
                document.querySelector('.filtros-btn    ').classList.toggle('active');
            });

            const backButton = document.querySelector('.back-button');
            backButton.addEventListener('click', () => {
                const detailView = document.querySelector('.detail-view');
                detailView.classList.remove('active');
                document.body.style.overflow = '';
            });
        });
    </script>

    <script src="https://kit.fontawesome.com/5553e94d09.js" crossorigin="anonymous"></script>
</body>
</html>