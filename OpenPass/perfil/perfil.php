<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "openpass";

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = $_POST["name"];
    $email = $_POST["email"];
    $cpf = $_POST["cpf"];
    $telefone = $_POST["phone"];
    $senha = $_POST["password"];

    // Atualiza os dados do usuário (mudar o ID conforme necessário)
    $sql = "UPDATE usuario SET 
                nomeCompleto = ?, 
                email = ?, 
                cpf = ?, 
                tel = ?, 
                senha = ? 
            WHERE id = 1";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $nome, $email, $cpf, $telefone, $senha);

    if ($stmt->execute()) {
        echo "<script>alert('Dados atualizados com sucesso!');</script>";
    } else {
        echo "<script>alert('Erro ao atualizar: " . $conn->error . "');</script>";
    }

    $stmt->close();
}




$sql = "SELECT nomeCompleto, email, cpf, tel, senha FROM usuario WHERE id = 1";
$result = $conn->query($sql);

if (!$result) {
    die("Erro na consulta SQL: " . $conn->error);
}

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $nome = $row["nomeCompleto"];
    $email = $row["email"];
    $cpf = $row["cpf"];
    $telefone = $row["tel"];
    $senha = $row["senha"];
} else {
    die("Nenhum usuário encontrado.");
}

// Fechando conexão
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OpenPass</title>
    <link rel="stylesheet" href="./perfil.css">
</head>

<body>

    <header>
        <div class="logo">
            <a href="../index.php">
                <img src="../imagens/logo.png" alt="">
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
                <a href="../Inicio/index.php">
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
        <!-- Header Section -->
        <div class="profile-header">
            <h1>Olá <span><?php echo htmlspecialchars($nome); ?></span></h1>
            <div class="profile-picture">

            </div>
        </div>

        <!-- Account Details Section -->
        <section class="account-details">
            <h2>Dados da Conta</h2>
            <form method="POST">
                <div class="form-container">
                    <div class="form-left">
                        <input type="text" name="name" id="name" value="<?php echo htmlspecialchars($nome); ?>" disabled>
                        <input type="email" name="email" id="email" value="<?php echo htmlspecialchars($email); ?>" disabled>
                        <input type="password" name="password" id="password" value="<?php echo htmlspecialchars($senha); ?>" disabled>
                    </div>
                    <div class="form-right">
                        <input type="tel" name="phone" id="phone" value="<?php echo htmlspecialchars($telefone); ?>" disabled>
                        <input type="text" name="cpf" id="cpf" value="<?php echo htmlspecialchars($cpf); ?>" disabled>
                    </div>
                </div>
                <button type="button" class="edit-btn" id="editBtn">Editar informações</button>
                <button type="submit" class="save-btn" id="saveBtn" style="display: none;">Salvar</button>
            </form>

            <div class="action-buttons">
                <button class="end-session-btn">Encerrar sessão</button>
                <button class="delete-account-btn">Deletar Conta</button>
            </div>
        </section>

        <!-- Tickets Section -->
        <section class="tickets-section">
            <h2>Meus Ingressos</h2>
            <h3>RECENTES</h3>
            <div class="tickets-grid">
                <!-- Ticket cards will be generated by JavaScript -->
            </div>
            <button class="view-more-btn">VER MAIS INGRESSSOS</button>
        </section>
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
                <a href="#">
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
                <a href="#">
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

    </script>
</body>
<script src="https://kit.fontawesome.com/5553e94d09.js" crossorigin="anonymous"></script>
<script src="./perfil.js"></script>

</html>