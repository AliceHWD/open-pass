<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OpenPass - Cadastro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        session_start();
        include 'config.php';

        // Cadastro de usuário
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['cadastro'])) {
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $telefone = $_POST['telefone'];
            $cpf = $_POST['cpf'];
            $senha = $_POST['senha'];
            $confirma_senha = $_POST['confirma_senha'];

            if ($senha !== $confirma_senha) {
                echo "As senhas não coincidem!";
            } else {
                $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

                // Prepara a query corretamente com a quantidade exata de placeholders
                $stmt = $conn->prepare("INSERT INTO usuario (nomeCompleto, email, tel, cpf, senha) VALUES (?, ?, ?, ?, ?)");
                
                // O bind_param deve ter o mesmo número de elementos da query
                $stmt->bind_param("sssss", $nome, $email, $telefone, $cpf, $senha_hash);

                if ($stmt->execute()) {
                    echo '<script>alert("Cadastro realizado com sucesso!")</script>';
                    header("Location: ./index.php");
                } else {
                    echo '<script>alert("Erro ao cadastrar!")</script>' . $conn->error;
                }

                $stmt->close();
            }
        }

        //login
        if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {
            $email = $_POST['email'];
            $senha = $_POST['senha'];

            $stmt = $conn->prepare("SELECT id, nomeCompleto, tel, cpf, senha FROM usuario WHERE email = ?");
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $stmt->store_result();

            if ($stmt->num_rows > 0) {
                $stmt->bind_result($id, $nome, $hash_senha);
                $stmt->fetch();
        
                if (password_verify($senha, $hash_senha)) {
                    $_SESSION['id'] = $id;
                    $_SESSION['nome'] = $nome;
                    $_SESSION['tipo'] = "usuario";
                    header("Location: ../Inicio/index.php");
                    exit;
                } else {
                    echo "Senha incorreta!";
                }
            } else {
                echo "E-mail não cadastrado!";
            }
        
            $stmt->close();
        }

        // Acesso como visitante
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['visitante'])) {
            $nome_aleatorio = "Visitante_" . rand(1000, 9999);
            $email_fake = strtolower(str_replace(" ", "_", $nome_aleatorio)) . "@guest.com";

            $stmt = $conn->prepare("INSERT INTO usuario (nomeCompleto, email, senha) VALUES (?, ?, NULL)");
            $stmt->bind_param("ss", $nome_aleatorio, $email_fake);

            if ($stmt->execute()) {
                $_SESSION['id'] = $conn-> insert_id;
                $_SESSION['nomeCompleto'] = $nome_aleatorio;
                $_SESSION['tipo'] = "visitante";
                header("Location: ../Inicio/index.php");
                exit;
            } else {
                echo "Erro ao entrar como visitante!";
            }

            $stmt->close();
        }
    ?>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Inter", serif;
        }

        body{
            background: linear-gradient(126deg, #5C7373 55%, #82C6C6 90%);
            height: 100vh;
        }

        header {
            padding: 20px;
            background-color: #011F26;
            color: white;
            display: grid;
            grid-template-columns: 1.3fr repeat(4, 1fr);
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
            color: #ffffff;
        }

        header .logo img {
            width: 20%;
        }

        main{
            position: relative;
            height: 90%;
        }

        .container {
            position: absolute;
            top: 45%;
            left: 50%;
            transform: translate(-50%, -50%);
            perspective: 1000px;
            width: 450px;
            height: 500px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .card {
            width: 100%;
            height: 100%;
            position: relative;
            transform-style: preserve-3d;
            transition: transform 0.8s ease;
        }

        .card .face {
            position: absolute;
            width: 100%;
            height: 100%;
            backface-visibility: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(140deg, #011F26 20%, #597C81 70%, #5C7373 90%);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 40px;
        }

        .card .login {
            transform: rotateY(0deg);
            display: flex;
            flex-direction: column;
        }

        .card .signup {
            position: absolute;
            top: -7%;
            width: 100%;
            height: 125%;
            backface-visibility: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(140deg, #011F26 20%, #597C81 70%, #5C7373 90%);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 40px;
            transform: rotateY(180deg);
        }

        .card.flip {
            transform: rotateY(180deg);
        }

        .form {
            width: 90%;
            height: 90%;
            text-align: center;
            border: solid 2px rgba(255, 255, 255, 0.44);
            border-radius: 20px;
            padding: 30px;
            backdrop-filter: blur(50px);
        }

        .form h2 {
            margin-bottom: 20px;
            text-transform: uppercase;
            color: white;
        }

        .form input {
            width: 100%;
            padding: 12px;
            margin: 20px 0 20px;
            border: 3px solid rgba(0, 0, 0, 0.66);
            border-radius: 50px;
            background: none;
            color: white;
            outline: none;
        }

        .card .signup form input {
            margin: 5px 0 5px;   
        }

        .form input::placeholder{
            color: white;
            opacity: 53%;
        }

        .form button[type="submit"] {
            padding: 10px;
            border: none;
            background: rgba(1, 31, 38, .75);
            color: white;
            border-radius: 25px;
            cursor: pointer;
            font-size: 1.3rem;
            transition: .3s;
        }

        .form button[type="submit"]:hover {
            background: rgba(93, 159, 159, 1);
            color: black;
        }

        .visitante button {
            position: absolute;
            top: 86%;
            left: 34.5%;
            background: none;
            border: none;
            color: white;
            text-decoration: underline;
            font-weight: 700;
            cursor: pointer;
        }

        .toogle-button {
            margin-top: 20px;
            cursor: pointer;
            color: white;
            font-weight: 400;
        }

        .toogle-button span{
            font-weight: 600;
            text-decoration: underline;
        }

        .toogle-button:hover {
            text-decoration: underline;
        }

        .linha{
            background-color: rgba(255, 255, 255, .75);
            width: 75%;
            height: 2px;
            margin-left: 12.5%;
            margin-top: 10px;
        }

        @media (max-width: 880px){
            header .logo img{
                width: 50%;
            }

            header .logo h3{
                display: none;
            }

            .card .signup {
                width: 90%;
                height: 635px;
                top: -10%;
            }

            .card .signup input {
                height: 8%;
            }

            .card .signup .toogle-button{
                margin-top: 10px;
            }
        }

        @media (max-width: 450px) {
            header .logo img{
                width: 100%;
            }

            .container{
                width: 100%;
            }

            .card {
                width: 80%;
            }

            .card .signup {
                right: 5%;
            }

            form{
                padding: 20px;
            }

            .toogle-button{
                font-size: .8rem;
            }
        }

        @media (max-width: 380px) {
            .card{
                width: 90%;
            }
            
            .card .signup form h2{
                font-size: 1.5rem;
            }

            form input[type="submit"] {
                font-size: .8rem;
            }
        }


    </style>
 
    <header>
        <div class="logo">
            <a href="./index.php">
                <img src="./imagens/logo.png" alt="">
                <h3>OpenPass</h3>
            </a>
        </div>
    </header>

    <main>
        <div class="container">
            <div class="card" id="card">
                <div class="face login">
                    <form action="" method="POST" class="form">
                        <h2>login</h2>
                        <input type="text" placeholder="Email:" name="email">
                        <input type="password" placeholder="Senha:" name="senha">
                        <button type="submit" name="login">ENTRAR</button>
                        <div class="linha"></div>
                        <div class="toogle-button" onclick="toggleFlip()">Não possui uma conta? <br> <span>Cadastre-se!</span></div>
                    </form>
                    <form action="cadastro.php" method="POST" class="visitante">
                        <button type="submit" name="visitante">Entrar como visitante</button>
                    </form>
                </div>
                <div class="face signup">
                    <form action="" method="POST" class="form">
                        <h2>Cadastre-se</h2>
                        <input type="text" placeholder="Nome Completo:" name="nome">
                        <input type="text" placeholder="Email:" name="email">
                        <input type="text" placeholder="Telefone:" name="telefone" id="phone">
                        <input type="text" placeholder="CPF:" name="cpf" id="cpf" maxlength="14">
                        <input type="password" placeholder="Cadastrar Senha:" name="senha">
                        <input type="password" placeholder="Confirmar Senha:" name="confirma_senha">
                        <button type="submit" name="cadastro">CADASTRAR-SE</button>
                        <div class="linha"></div>
                        <div class="toogle-button" onclick="toggleFlip()">Já possui uma conta? <br> <span>Faça login!</span></div>
                    </form>
                </div>
            </div>
        </div>
    </main>


    <script>
        function toggleFlip() {
            const card = document.getElementById('card');
            card.classList.toggle('flip');
        }

        function maskPhone(value) {
            return value
                .replace(/\D/g, '') // Remove tudo que não for número
                .replace(/^(\d{2})(\d)/, '($1) $2') // Adiciona parênteses no DDD
                .replace(/(\d{5})(\d)/, '$1-$2') // Adiciona o hífen no número de celular
                .replace(/(-\d{4})\d+?$/, '$1'); // Garante que só há 4 números após o hífen
        }

        function maskCPF(value) {
            return value
                .replace(/\D/g, '') // Remove tudo que não for número
                .replace(/(\d{3})(\d)/, '$1.$2') // Adiciona ponto após os três primeiros números
                .replace(/(\d{3})(\d)/, '$1.$2') // Adiciona ponto após os seis primeiros números
                .replace(/(\d{3})(\d{1,2})$/, '$1-$2'); // Adiciona o hífen antes dos dois últimos números
        }

        // Exemplo de uso:
        document.getElementById('phone').addEventListener('input', function () {
            this.value = maskPhone(this.value);
        });

        document.getElementById('cpf').addEventListener('input', function () {
            this.value = maskCPF(this.value);
        });
    </script>
</body>
</html>