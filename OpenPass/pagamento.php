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
            border-radius: 5px;
            text-decoration: none;
            color:#ffffff
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

        section {
            height: 110vh;
        }

        .container {
            max-width: 1500px;
            margin: 0 auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
        }

        h1 {
            margin-top: 50px;
            text-align: center;
            margin-bottom: 20px;
        }

        section .linha {
            background-color:rgb(49, 49, 49);
            width: 60%;
            height: 1px;
            margin-left: 20%;
        }

        .payment-methods {
            margin-bottom: 20px;
            text-align: center;
        }

        .payment-methods label {
            margin-right: 40px;
            font-weight: bold;
        }

        .form-container, .pix-container {
            display: none;
            margin-top: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-group input:focus {
            border-color: #3b5998;
            outline: none;
        }

        .saved-card {
            margin-top: 10px;
            padding: 10px;
            background: #f0f0f0;
            border-radius: 5px;
        }

        .add-cartao {
            width: 100%;
            padding: 10px;
            background-color: #fff;
            font-size: 1.2rem;
            border-radius: 10px;
        }

        .pix-container {
            text-align: center;
        }

        .pix-qr {
            text-align: center;
            margin-bottom: 20px;
        }

        .pix-qr img {
            width: 20%;
        }

        .pix-code {
            margin-top: 10px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            background: #f0f0f0;
            padding: 10px;
            border-radius: 5px;
        }

        .pix-code input {
            width: 90%;
        }

        .pix-code button {
            padding: 5px 10px;
            background: #3b5998;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .pix-code button:hover {
            background: #2b4470;
        }
        .form-section {
            flex: 1;
            padding: 20px;
            display: none;
        }

        .card-section {
            display: flex;
            justify-content: center;
            align-items: center;
            background: #e0e0e0;
            border-radius: 10px;
            padding: 20px;
            margin-left: 20px;
            display: none;
        }

        .card {
            width: 500px;
            height: 280px;
            border-radius: 10px;
            background: linear-gradient(135deg, #3b5998, #192f6a);
            color: white;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .card .number,
        .card .name,
        .card .expiry {
            font-size: 1.2rem;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1rem;
        }

        .form-group input:focus {
            border-color: #3b5998;
            outline: none;
        }

        .btn {
            background: #3b5998;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
        }

        .btn:hover {
            background: #2b4470;
        }

        /* footer */
        footer{
            background-color: #011F26;
            width: 100%;
            height: 40vh;
            color: #fff;
            position: relative;
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
            grid-template-columns: repeat(5, 1fr);
            grid-template-rows: 80px;
            justify-content: center;
            align-items: center;
        }

        .container-buttons div a{
            display: flex;
            flex-direction: column;
            text-align: center;
            text-decoration: none;
            font-size: .8rem;
        }

        .container-buttons i{
            margin-bottom: 5px;
            font-size: 1rem;
        }

        .inicio a{
            color: #82C6C6;
        }

        .anunciar a,.ingressos a, .procura a, .perfil-mob a{
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
            body {
                overflow-x: hidden;
            }

            .logo h3, .pesquisa, .local, .ingresso, .carrinho, .perfil a, .perfil button {
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
                margin-left: 50%;
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
        }

        @media (max-width:450px) {
            .card {
                width: 280px;
                height: 170px;
            }

            .footer-mob {
                display: block;
            }

            footer {
                display: none;
            }
        }
        
        @media (max-width: 350px) {
            .card {
                width: 230px;
                height: 145px;
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

        <div class="local">
            <p>
                <i class="fa-solid fa-location-dot"></i>
                Qualquer lugar
            </p>
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
    <section>

        <h1>Pagamento</h1>
        <div class="container">
            <h4>Selecione a forma de pagamento</h4>
            <p>Valor: R$125.00</p>
            <div class="payment-methods">
                <label>
                    <input type="radio" name="payment-method" value="credit" id="credit-radio"> Crédito
                </label>
                <label>
                    <input type="radio" name="payment-method" value="pix" id="pix-radio"> PIX
                </label>
            </div>
            
            <div class="linha"></div>
            
            <!-- Credit Card Form -->
            <div class="form-container" id="credit-form">
                <button class="add-cartao" id="add-card-button">
                    <i class="fa-solid fa-circle-plus"></i>
                    Adicionar Cartão
                </button>
                
                <div class="form-section">
                    <div class="form-group">
                        <label for="card-number">Número do Cartão</label>
                        <input type="text" id="card-number" maxlength="19" placeholder="1234 5678 9012 3456">
                    </div>
                    <div class="form-group">
                        <label for="card-name">Nome</label>
                        <input type="text" id="card-name" placeholder="João Silva">
                    </div>
                    <div class="form-group">
                        <label for="card-expiry">Data de Validade</label>
                        <input type="text" id="card-expiry" placeholder="MM/AA">
                    </div>
                    <div class="form-group">
                        <label for="card-cvv">CVV</label>
                        <input type="text" id="card-cvv" maxlength="3" placeholder="123">
                    </div>
                    <button class="btn" id="save-card-button">Submit</button>
                </div>
                <div class="card-section">
                    <div class="card">
                        <div class="number">#### #### #### ####</div>
                        <div class="name">NOME</div>
                        <div class="expiry">MM/YY</div>
                        <div class="cvv">CVV: ###</div>
                    </div>
                </div>
            </div>
            
            <div id="saved-cards"></div>
            <!-- PIX Form -->
            <div class="pix-container" id="pix-form">
                <h2>Pagamento com QR-code</h2>
                <div class="pix-qr">
                    <img src="./imagens/teste.png" alt="QR Code">
                </div>
                <div class="pix-code">
                    <input type="text" id="pix-copy-code" readonly value="123e4567-e89b-12d3-a456-426614174000">
                    <button id="copy-pix-button">Copiar</but>
                </div>
            </div>
        </div>
    </section>

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
                <a href="#">
                    <i class="fa-solid fa-ticket"></i>
                    Ingressos
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

        // cartao e pix
        const creditRadio = document.getElementById('credit-radio'); //radio cred
        const pixRadio = document.getElementById('pix-radio'); //radio pix
        const creditForm = document.getElementById('credit-form');
        const pixForm = document.getElementById('pix-form');
        const addCardButton = document.getElementById('add-card-button');
        const cardForm = document.querySelector('.form-section');
        const saveCardButton = document.getElementById('save-card-button');
        const savedCards = document.getElementById('saved-cards');
        const copyPixButton = document.getElementById('copy-pix-button');
        const pixCopyCode = document.getElementById('pix-copy-code');
        const cardTrem = document.querySelector('.card-section');
        const cardNumberInput = document.getElementById('card-number');
        const cardNameInput = document.getElementById('card-name');
        const cardExpiryInput = document.getElementById('card-expiry');
        const cardCvvInput = document.getElementById('card-cvv');
        const cardNumberDisplay = document.querySelector('.card .number');
        const cardNameDisplay = document.querySelector('.card .name');
        const cardExpiryDisplay = document.querySelector('.card .expiry');
        const cardCvvDisplay = document.querySelector('.card .cvv');

        //aparecer
        creditRadio.addEventListener('change', () => {
        if (creditRadio.checked) {
            creditForm.style.display = 'block';
            pixForm.style.display = 'none';
        }
        });
        pixRadio.addEventListener('change', () => {
        if (pixRadio.checked) {
            creditForm.style.display = 'none';
            pixForm.style.display = 'block';
        }
        });

        //add cartao
        addCardButton.addEventListener('click', () => {
        cardForm.style.display = 'block';
        cardTrem.style.display = 'block';
        });

        // salvar cartao
        saveCardButton.addEventListener('click', () => {
        const cardNumber = document.getElementById('card-number').value;
        const cardName = document.getElementById('card-name').value;
        const cardExpiry = document.getElementById('card-expiry').value;

        if (cardNumber && cardName && cardExpiry) {
            const cardDiv = document.createElement('div');
            cardDiv.classList.add('saved-card');
            cardDiv.textContent = `${cardName} - ${cardNumber} - ${cardExpiry}`;
            savedCards.appendChild(cardDiv);

            cardForm.style.display = 'none';
            cardTrem.style.display = 'none';
        } else {
            alert('Please fill all fields!');
        }
        });

        copyPixButton.addEventListener('click', () => {
        pixCopyCode.select();
        navigator.clipboard.writeText(pixCopyCode.value);
        alert('PIX code copied to clipboard!');
        });

        // Mask for card number
        cardNumberInput.addEventListener('input', (e) => {
        let value = e.target.value.replace(/\D/g, '');
        value = value.replace(/(\d{4})(?=\d)/g, '$1 ');
        e.target.value = value;
        cardNumberDisplay.textContent = value || '#### #### #### ####';
        });

        cardNameInput.addEventListener('input', (e) => {
        cardNameDisplay.textContent = e.target.value.toUpperCase() || 'NOME';
        });

        cardExpiryInput.addEventListener('input', (e) => {
        let value = e.target.value.replace(/\D/g, '');
        if (value.length > 2) {
            value = value.slice(0, 2) + '/' + value.slice(2, 4);
        }
        e.target.value = value;
        cardExpiryDisplay.textContent = value || 'MM/AA';
        });

        cardCvvInput.addEventListener('input', (e) => {
        cardCvvDisplay.textContent = `CVV: ${e.target.value || '###'}`;
        });
    </script>
    <script src="https://kit.fontawesome.com/5553e94d09.js" crossorigin="anonymous"></script>
</body>
</html>