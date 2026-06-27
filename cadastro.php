<?php $mensagem = ""; if (isset($_GET['sucesso']) && $_GET['sucesso'] == 1) { $mensagem = "Cadastro realizado com sucesso!"; } ?>   

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/logo.jpeg" type="image/x-icon">
    <title>Login - Rebirth Prosthetics</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
            text-decoration: none;
            color: inherit;
        }

        body {
            background: #f5f5f5;
            color: #111;
        }


        header {
            width: 100%;
            height: 80px;
            background: #fff;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 40px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 28px;
            font-weight: bold;
            color: #1f2b63;
        }

        .logo span {
            font-size: 18px;
        }

        nav {
            display: flex;
            align-items: center;
            gap: 35px;
        }

        nav a {
            text-decoration: none;
            color: #111;
            font-weight: 600;
            transition: 0.3s;
        }

        nav a:hover {
            color: #4f46e5;
        }

        .login-btn {
            background: #dfe3ff;
            padding: 12px 18px;
            border-radius: 10px;
        }

        /* HERO */
        .hero {
            background: #232d59;
            color: white;
            padding: 40px;
        }

        .hero h1 {
            font-size: 36px;
            margin-bottom: 10px;
        }

        .hero p {
            font-size: 18px;
            opacity: 0.9;
        }


        .container {
            width: 100%;
            display: flex;
            justify-content: center;
            margin-top: 40px;
        }

        .login-card {
            width: 450px;
            background: white;
            padding: 35px;
            border-radius: 12px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
        }

        .tabs {
            display: flex;
            margin-bottom: 30px;
            border-radius: 10px;
            overflow: hidden;
            border: 1px solid #ddd;
        }

        .tab {
            flex: 1;
            text-align: center;
            padding: 12px;
            background: #f2f2f2;
            cursor: pointer;
            font-weight: 600;
        }

        .tab.active {
            background: white;
        }

        .input-group {
            margin-bottom: 20px;
        }

        .input-group label {
            display: block;
            margin-bottom: 8px;
            font-size: 14px;
            color: #444;
        }

        .input-group input {
            width: 100%;
            padding: 14px;
            border: 1px solid #ddd;
            border-radius: 8px;
            outline: none;
            transition: 0.3s;
        }

        .input-group input:focus {
            border-color: #4f46e5;
        }

        .options {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
            font-size: 14px;
        }

        .options a {
            text-decoration: none;
            color: #4f46e5;
        }

        .cadastro_buttton {
            width: 100%;
            padding: 15px;
            border: none;
            border-radius: 8px;
            background: #4f46e5;
            color: white;
            font-size: 18px;
            cursor: pointer;
            transition: 0.3s;
            margin-bottom: 25px;
        }

        .login-button:hover {
            background: #4338ca;
        }
        #text_cadastro{
            color:blue;
        }
        .social-btn {
            width: 100%;
            padding: 14px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background: white;
            cursor: pointer;
            margin-bottom: 15px;
            font-weight: 600;
            transition: 0.3s;
        }

        .social-btn:hover {
            background: #f3f3f3;
        }

        @media(max-width:768px) {

            header {
                padding: 20px;
                flex-direction: column;
                height: auto;
                gap: 20px;
            }

            nav {
                flex-wrap: wrap;
                justify-content: center;
            }

            .hero {
                text-align: center;
            }

            .hero h1 {
                font-size: 28px;
            }

            .login-card {
                width: 90%;
            }
        }
    </style>
</head>

<body>

    <header>

        <div class="logo">
            <img src="img/logo.jpeg" alt="logo">
            <h1>RebirthProsthetics</h1>
        </div>

        <nav>
            <ul>
                <li onclick="window.location.href='duvidas.html'">
                    Dúvidas ▼</li>
                <li onclick="window.location.href='index.html'">
                    Sobre nós ▼</li>
                <li onclick="window.location.href='compra.html'">
                    Compre aqui ▼
                </li>
            </ul>
        </nav>

        <div class="header-actions">

            <button class="btn-login" onclick="window.location.href='login.php'">
                Login / Cadastro
            </button>

        </div>
        <div class="cart"><a href="carrinho.php"><img src="img/logo_cart.png" width="30px" height="30px"></a></div>
        <div class="search">⌕</div>

    </header>
    <section class="hero">
        <h1>Comece Agora</h1>
        <p>Crie sua conta ou faça log in e explore sobre o app</p>
    </section>

    <div class="container">
        <div class="login-card">

            <div class="tabs">
                <div class="tab"><a href="login.php">Log In</a></div>
                <div class="tab active"><a href="cadastro.php">Sign Up</a></div>
            </div>
            <form action="php/cadastro.php" method="post">
                <div class="input-group">
                    <label>CPF</label>
                    <input type="text" name="cpf_usuario" id="cpf_usuario">
                </div>

                <div class="input-group">
                    <label>Email</label>
                    <input type="text" name="email_usuario" id="email_usuario">
                </div>

                <div class="input-group">
                    <label>Nome de usuário</label>
                    <input type="text" name="nome_usuario" id="nome_usuario">
                </div>

                <div class="input-group">
                    <label>Senha</label>
                    <input type="password" name="" id="">
                </div>

                <div class="input-group">
                    <label>Confirmar senha</label>
                    <input type="password" name="senha_usuario" id="senha_usuario">
                </div>

                <button class="cadastro_buttton" type="submit">Cadastrar</button>
            </form>
            <a href="login.html" id="text_cadastro">Tenho cadastro</a>
        </div>

    </div>
    </div>
<footer class="footer">

        <div class="back-home">
            <a href="index.html">Voltar ao início</a>
        </div>

        <div class="footer-content">

            <div class="footer-column">
                <h3>Empresa</h3>
                <a href="duvidas.html">Sobre nós</a>
                <a href="duvidas.html">Contato</a>
                <a href="duvidas.html">Carreiras</a>
            </div>

            <div class="footer-column">
                <h3>Produtos</h3>
                <a href="produto.html">Próteses</a>
                <a href="produto.html">Personalizadas</a>
                <a href="produto.html">Acessórios</a>
            </div>

            <div class="footer-column">
                <h3>Suporte</h3>
                <a href="duvidas.html">Ajuda</a>
                <a href="duvidas.html">FAQ</a>
                <a href="duvidas.html">Política de Privacidade</a>
            </div>

        </div>

        <div class="footer-bottom">

            <div class="footer-logo">
                <img src="img/logo.jpeg" alt="Logo">
                <h2>RebirthProsthetics</h2>
            </div>

            <div class="country">
                Brasil 🇧🇷
            </div>

        </div>

        <div class="footer-links">
            <a href="duvidas.html">Termos</a>
            <a href="duvidas.html">Privacidade</a>
            <a href="duvidas.html">Cookies</a>
        </div>

        <div class="copyright">
            © 2025 Rebirth Prosthetics. Todos os direitos reservados.
        </div>

    </footer>

    </div>
<?php if ($mensagem != "") { ?> <script> alert("<?php echo $mensagem; ?>"); window.history.replaceState({}, document.title, "cadastro.php"); </script> <?php } ?>
</body>

</html>