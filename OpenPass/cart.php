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
            border-radius: 5px;
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

        #app {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .cart-container {
            background: white;
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            padding: 2rem;
            width: 100%;
            max-width: 1200px;
        }

        h1 {
            font-size: 1.5rem;
            margin: 0 0 2rem 0;
            color: #333;
        }

        .cart-item {
            display: flex;
            align-items: center;
            padding: 1rem 0;
            border-bottom: 1px solid #eee;
            gap: 1rem;
        }

        .item-image {
            width: 90px;
            height: 90px;
            background: #eee;
            border-radius: 8px;
        }

        .item-details {
            flex-grow: 1;
        }

        .item-name {
            font-weight: 500;
            margin: 0;
        }

        .item-meta {
            color: #666;
            font-size: 0.9rem;
            margin: 0.25rem 0;
        }

        .quantity-controls {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .quantity-btn {
            background: none;
            border: 1px solid #ddd;
            border-radius: 4px;
            width: 24px;
            height: 24px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            color: #666;
            padding: 0;
        }

        .quantity-btn:hover {
            background: #f5f5f5;
        }

        .quantity {
            margin: 0 0.5rem;
        }

        .item-price {
            font-weight: 500;
            color: #333;
            margin-left: auto;
            padding: 0 1rem;
        }

        .delete-btn {
            background: none;
            border: none;
            color: #ff4444;
            cursor: pointer;
            padding: 0.5rem;
        }

        .delete-btn:hover {
            color: #ff0000;
        }

        .cart-total {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            padding: 1.5rem 0;
            gap: 1rem;
        }

        .total-label {
            font-weight: 600;
        }

        .total-amount {
            font-weight: 600;
            color: #333;
        }

        .checkout-button {
            background: #0099ff;
            color: white;
            border: none;
            border-radius: 8px;
            padding: 1rem;
            width: 100%;
            font-size: 1rem;
            font-weight: 500;
            cursor: pointer;
            transition: background-color 0.2s;
        }

        .checkout-button:hover {
            background: #0088ee;
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

        .carrinho-footer a {
            color: #82C6C6;
        }

        .procura a,.inicio a,.ingressos a, .anunciar a, .perfil-mob a{
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

        @media (max-width:768px) {
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
            
            .cart-container {
                max-width: 700px;
            }
        }

        @media (max-width: 600px) {
            .cart-item {
                flex-wrap: wrap;
            }

            .item-price {
                width: 100%;
                text-align: right;
                margin-top: 1rem;
            }

            .quantity-controls {
                margin-top: 0.5rem;
            }
        }

        @media (max-width: 480px) {

            .cart-container {
                max-width: 400px;
                height: 600px;
            }

            .footer-mob {
                display: block;
                top: 93%;
            }

            footer {
                display: none;
            }
        }

        @media (max-width: 380px) {
            .sidebar{
                width: 70%;
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
            <a href="#">
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

    <div id="app">
      <div class="cart-container">
        <h1>Meu Carrinho</h1>
        <div class="cart-items" id="cartItems">
          <!-- Cart items will be dynamically added here -->
        </div>
        <div class="cart-total">
          <span class="total-label">Total:</span>
          <span class="total-amount" id="totalAmount">R$100.99</span>
        </div>
        <button class="checkout-button">Finalizar Compra</button>
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

        const cartItems = [
        {
            id: 1,
            name: 'Nome',
            date: 'data',
            location: 'local',
            price: 75.99,
            quantity: 1
        },
        {
            id: 2,
            name: 'Nome',
            date: 'data',
            location: 'local',
            price: 25.00,
            quantity: 1
        }
        ];

        function createCartItem(item) {
            return `
                <div class="cart-item" data-id="${item.id}">
                <div class="item-image"></div>
                <div class="item-details">
                    <h3 class="item-name">${item.name}</h3>
                    <p class="item-meta">${item.date} - ${item.location}</p>
                    <div class="quantity-controls">
                    <button class="quantity-btn minus" onclick="updateQuantity(${item.id}, -1)">-</button>
                    <span class="quantity">${item.quantity}</span>
                    <button class="quantity-btn plus" onclick="updateQuantity(${item.id}, 1)">+</button>
                    </div>
                </div>
                <span class="item-price">R$${item.price.toFixed(2)}</span>
                <button class="delete-btn" onclick="deleteItem(${item.id})">
                    <i class="fas fa-trash"></i>
                </button>
                </div>
            `;
        }

        function renderCart() {
            const cartContainer = document.getElementById('cartItems');
            cartContainer.innerHTML = cartItems.map(item => createCartItem(item)).join('');
            updateTotal();
        }

        window.updateQuantity = function(itemId, change) {
            const item = cartItems.find(item => item.id === itemId);
            if (item) {
                const newQuantity = item.quantity + change;
                if (newQuantity >= 1) {
                item.quantity = newQuantity;
                renderCart();
                }
            }
        };

        window.deleteItem = function(itemId) {
            const index = cartItems.findIndex(item => item.id === itemId);
            if (index !== -1) {
                cartItems.splice(index, 1);
                renderCart();
            }
        };

        function updateTotal() {
            const total = cartItems.reduce((sum, item) => sum + (item.price * item.quantity), 0);
            document.getElementById('totalAmount').textContent = `R$${total.toFixed(2)}`;
        }

        const finalizarCompra = document.querySelector('.checkout-button');
        finalizarCompra.addEventListener('click', () => {
            alert('Redirecionando a página de pagamento');
            window.location.href = './pagamento.php'
        });

        // Initial render
        renderCart();
    </script>
</body>
<script src="https://kit.fontawesome.com/5553e94d09.js" crossorigin="anonymous"></script>
</html>