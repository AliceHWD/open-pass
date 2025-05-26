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
            color: #fff;
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
            max-width: 600px;
            margin: 2rem auto;
            padding: 2rem;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .container section {
            text-align: center;
            margin-bottom: 2rem;
        }

        .autocomplete-container {
            position: relative;
            /* width: 300px; */
        }

        .city-suggestions {
            position: absolute;
            background-color: white;
            border: 1px solid #4db6ac;
            max-height: 200px;
            overflow-y: auto;
            width: 100%;
            z-index: 1000;
            border-radius: 4px;
        }

        .city-suggestions div {
            padding: 8px;
            cursor: pointer;
        }

        .city-suggestions div:hover {
            background-color: #f1f1f1;
        }


        .container h1 {
            font-size: 1.5rem;
            margin-bottom: 0.5rem;
        }

        .vendor-name {
            color: #666;
        }

        .container h2 {
            font-size: 1.25rem;
            text-align: center;
            margin-bottom: 1.5rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        label {
            display: block;
            margin-bottom: 0.5rem;
            font-size: 0.9rem;
        }

        select,
        input {
            width: 100%;
            padding: 0.75rem;
            border: none;
            border-radius: 4px;
            background-color: rgba(96, 125, 139, 0.2);
            font-size: 1rem;
        }

        select:focus,
        input:focus {
            outline: 2px solid #4db6ac;
        }

        .total {
            text-align: center;
            margin: 1.5rem 0;
            font-weight: bold;
        }

        .button-container {
            text-align: center;
        }

        form button {
            background-color: #4db6ac;
            color: white;
            border: none;
            padding: 0.75rem 2rem;
            border-radius: 4px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        form button:hover {
            background-color: #3d9d94;
        }

        form button:disabled {
            background-color: #cccccc;
            cursor: not-allowed;
        }

        section {
            margin-bottom: 2rem;
        }

        /* footer */
        footer{
            background-color: #011F26;
            width: 100%;
            height: 40vh;
            color: #fff;
            position: relative;
            margin-top: 100px;
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

        .anunciar a{
            color: #82C6C6;
        }

        .inicio a,.ingressos a, .procura a, .carrinho-footer a, .perfil-mob a{
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
                font-size: .9rem;
            }
        }

        @media (max-width: 912px) {
            header .logo img {
                width: 80px;
            }

            .carrinho {
                text-align: center;
            }

            .pesquisa, .ingresso {
                text-align: end;
            }

            header .logo a {
                font-size: 1.1rem;
            }

            header {
                font-size: .8rem;
            }
        }


        @media (max-width: 880px) {
            .logo h3, .pesquisa, .carrinho, .local, .ingresso, .cadastro a, .perfil button {
                display: none;
            }

            header {
                grid-template-columns: repeat(2, 1fr);
            }

            header .logo {
                grid-column: 2;
                text-align: end;
                margin-right: 50px;
            }
            
            header .logo a {
                text-align: end;
                margin-left: 80%;
            }

            header .logo img {
                width: 100%;
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
            .container {
                margin: 1rem;
                padding: 1rem;
            }
            
            .container h1 {
                font-size: 1.25rem;
            }
            
            .container h2 {
                font-size: 1.1rem;
            }
            
            header .logo img {
                width: 80px;
            }
            
            .footer-mob {
                display: block;
                top: 93%;
            }
            
            footer {
                display: none;
            }
            
        }
        
        @media (max-width: 430px) {
            .container {
                height: 102vh;
            }
        }
        
        @media (max-width: 390px) {
            .container {
                height: 140vh;
            }

            .sidebar {
                width: 70%;
            }

            .quadro {
                background: none ;
            }
            
            .footer-mob {
                top: 91%;
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


    <div class="container">
        <section>
            <h1>Bem-vindo à área de vendas</h1>
            <p class="vendor-name">(nome do vendedor)</p>
        </section>

        <form id="salesForm">
            <section class="event-data">
                <h2>Dados do evento</h2>
                <div class="autocomplete-container form-group">
                    <label for="city">1. Onde seu evento vai acontecer?</label>
                    <input type="text" id="city" name="city" placeholder="Digite o nome da cidade..." autocomplete="off" required>
                </div>

                <div class="form-group">
                    <label for="eventDate">2. Selecione o dia do evento</label>
                    <input type="date" id="eventDate" required>
                </div>
            </section>

            <section class="tickets">
                <h2>Ingressos</h2>
                <div class="form-group">
                    <label for="ticketType">3. Selecione o tipo do ingresso</label>
                    <select id="ticketType" required>
                        <option value="">Selecione o tipo</option>
                        <option value="tipo1">Inteira</option>
                        <option value="tipo2">Meia</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="ticketCategory">4. Categoria do ingresso</label>
                    <select id="ticketCategory" required>
                        <option value="">Selecione a categoria</option>
                        <option value="cat1">Categoria 1</option>
                        <option value="cat2">Categoria 2</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="ticketQuantity">5. Quantidade de ingressos</label>
                    <input type="number" id="ticketQuantity" min="1" required>
                </div>

                <div class="form-group">
                    <label for="ticketPrice">6. Valor que deseja vender</label>
                    <input type="number" id="ticketPrice" min="0" step="0.01" required>
                </div>

                <div class="total">
                    <p>Total a receber: R$<span id="totalAmount">0.00</span></p>
                </div>
            </section>

            <div class="button-container">
                <button type="submit" id="announceButton">Anunciar</button>
            </div>
        </form>
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

        function toggleDropdown() {
            const dropdown = document.getElementById('drop');
            if (dropdown.style.display === 'block') {
                dropdown.style.display = 'none';
            } else {
                dropdown.style.display = 'block';
            }
        }

        // Fecha o dropdown ao clicar fora
        document.addEventListener('click', function (event) {
            const dropdown = document.getElementById('drop');
            const button = document.querySelector('.dropdown-button');
            if (!button.contains(event.target) && !dropdown.contains(event.target)) {
                dropdown.style.display = 'none';
            }
        });

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

        //form
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('salesForm');
            const quantityInput = document.getElementById('ticketQuantity');
            const priceInput = document.getElementById('ticketPrice');
            const totalAmount = document.getElementById('totalAmount');
            const announceButton = document.getElementById('announceButton');

            // Function to calculate and update total
            function updateTotal() {
                const quantity = parseFloat(quantityInput.value) || 0;
                const price = parseFloat(priceInput.value) || 0;
                const total = quantity * price;
                totalAmount.textContent = total.toFixed(2);
                
                // Validate form to enable/disable button
                validateForm();
            }

            // Function to validate form
            function validateForm() {
                const requiredFields = form.querySelectorAll('input[required], select[required]');
                let isValid = true;

                requiredFields.forEach(field => {
                    if (!field.value) {
                        isValid = false;
                    }
                });

                // Additional validation for quantity and price
                const quantity = parseFloat(quantityInput.value);
                const price = parseFloat(priceInput.value);
                
                if (isNaN(quantity) || quantity <= 0 || isNaN(price) || price < 0) {
                    isValid = false;
                }

                announceButton.disabled = !isValid;
            }

            // Add event listeners
            quantityInput.addEventListener('input', updateTotal);
            priceInput.addEventListener('input', updateTotal);
            
            form.addEventListener('input', validateForm);

            form.addEventListener('submit', function(e) {
                e.preventDefault();
                
                // Here you would typically send the form data to a server
                alert('Anúncio enviado com sucesso!');
                window.location.href = './index.php'
            });

            // Initial validation
            validateForm();
        });

        const cities = [
            "São Paulo", "Rio de Janeiro", "Belo Horizonte", "Salvador", "Fortaleza", 
            "Brasília", "Curitiba", "Manaus", "Recife", "Porto Alegre", "Vitória",
            "Goiânia", "Belém", "Maceió", "Campo Grande", "Natal", "Teresina", "João Pessoa",
            "São Luís", "Aracaju", "Cuiabá", "Macapá", "Boa Vista", "Palmas", "Florianópolis"
        ];

        const input = document.getElementById("city");
        const suggestionsBox = document.createElement("div");
        suggestionsBox.classList.add("city-suggestions");
        input.parentNode.appendChild(suggestionsBox);

        input.addEventListener("input", function() {
        const query = input.value.toLowerCase();
        suggestionsBox.innerHTML = "";
        if (query.length > 0) {
            const filteredCities = cities.filter(city => city.toLowerCase().includes(query));
            filteredCities.forEach(city => {
            const div = document.createElement("div");
            div.textContent = city;
            div.addEventListener("click", function() {
                input.value = city;
                suggestionsBox.innerHTML = "";
            });
            suggestionsBox.appendChild(div);
            });
        }
        });

        document.addEventListener("click", function(event) {
        if (!input.contains(event.target) && !suggestionsBox.contains(event.target)) {
            suggestionsBox.innerHTML = "";
        }
        });

    </script>
</body>
<script src="https://kit.fontawesome.com/5553e94d09.js" crossorigin="anonymous"></script>
</html>