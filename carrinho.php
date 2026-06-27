<?php $mensagem = ""; if (isset($_GET['sucesso']) && $_GET['sucesso'] == 1) { $mensagem = "Pedido realizado com sucesso!"; } ?> 
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rebirth Prosthetics - Carrinho</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="container">

        <header>

            <div class="logo">
                <img src="img/logo.jpeg" alt="logo">
                <h1>RebirthProsthetics</h1>
            </div>

            <nav>
                <ul>
                    <li onclick="window.location.href='duvidas.html'">
                        Dúvidas ▼
                    </li>

                    <li onclick="window.location.href='index.html'">
                        Sobre nós ▼
                    </li>

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

            <div class="cart">
                <a href="carrinho.php">
                    <img src="img/logo_cart.png" width="30" height="30">
                </a>
            </div>

            <div class="search">⌕</div>

        </header>

        <!-- CARRINHO -->

        <section class="carrinho-container">

            <div class="carrinho-produtos">

                <div class="titulo-carrinho">
                    <h2>Carrinho de compras</h2>
                    <span>Preço</span>
                </div>

                <div class="produto-carrinho">

                    <img src="img/protese.png" alt="Prótese">

                    <div class="info-produto">

                        <h3>Prótese impressa 3D 2.0 2026 - Mão</h3>

                        <p>#53276328</p>

                        <span class="estoque">Em estoque</span>

                        <a href="#">
                            Ver opções de pagamento
                        </a>

                        <div class="quantidade">

                            <button>-</button>

                            <span>1</span>

                            <button>+</button>

                            <span class="favorito">♡</span>

                        </div>

                    </div>

                    <div class="preco-produto">
                        R$ 350,00
                    </div>

                </div>

                <div class="finalizar">
                    <button onclick="mostrarEndereco()">
                        Adicionar endereço
                    </button>
                </div>

                <div class="subtotal">
                    Subtotal (1 produto):
                    <strong>R$ 350,00</strong>
                </div>

                <div id="endereco" class="endereco-container">

                    <div class="titulo-endereco">
                        ENDEREÇO
                    </div>

                    <form action="php/pedido.php" method="POST">
                        <div class="campos-endereco">

                            <div class="coluna">
                                <label>CEP:</label>
                                <input type="text" name="cep_usuario" id="cep_usuario"  placeholder="00000-000" required>

                                <label>Cidade:</label>
                                <input type="text" name="cidade_usuario" id="cidade_usuario" placeholder="São Paulo" required>

                                <label>Estado:</label>
                                <input type="text" name="estado_usuario" id="estado_usuario" placeholder="São Paulo" required>
                            </div>

                            <div class="coluna">
                                <label>Bairro:</label>
                                <input type="text" name="bairro_usuario" id="bairro_usuario" placeholder="Santana" required>

                                <label>Rua:</label>
                                <input type="text" name="rua_usuario" id="rua_usuario" placeholder="Av. Marvo" required>

                                <label>Número:</label> <input type="text" name="numero_usuario" id="numero_usuario" placeholder="123"
                                    required>

                                <label>Complemento (Opcional):</label> <input type="text" name="complemento_usuario" id="complemento_usuario"
                                    placeholder="Apto, Bloco...">

                                <label>Tipo:</label>
                                <input type="text" name="tipo_usuario" id="tipo_usuario" placeholder="Casa" required>
                            </div>

                        </div>

                        <div style="margin-top: 20px; text-align: center;">
                            <button type="submit" style="padding: 10px 20px; cursor: pointer;  background:#06253b; color:white; border:none; border-radius:4px;">Realizar Pedido</button>
                        </div>
                    </form>
                    <br>
                    <br>
                </div>

                <div class="resumo-entrega">

                    <p id="entrega">
                        Entrega <strong>GRÁTIS</strong><br>
                    </p>

                    <h3>DISPONÍVEL</h3>

                    <select>
                        <option>Quantidade: 1</option>
                        <option>Quantidade: 2</option>
                        <option>Quantidade: 3</option>
                        <option>Quantidade: 4</option>
                    </select>

                    <p class="enviado">
                        Enviado por <strong>REBIRTHPROSTHETICS</strong>
                    </p>

                </div>

        </section>

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
                    <a href="compra.html">Próteses</a>
                    <a href="compra.html">Personalizadas</a>
                    <a href="compra.html">Acessórios</a>
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

    <script>
        const hoje = new Date();

        const inicio = new Date();
        inicio.setDate(hoje.getDate() + 3);

        const fim = new Date();
        fim.setDate(hoje.getDate() + 6);

        const meses = [
            "Janeiro", "Fevereiro", "Março", "Abril",
            "Maio", "Junho", "Julho", "Agosto",
            "Setembro", "Outubro", "Novembro", "Dezembro"
        ];

        document.getElementById("entrega").innerHTML =
            `Entrega <strong>GRÁTIS</strong><br>
        realizada entre dia ${inicio.getDate()} e ${fim.getDate()} de ${meses[fim.getMonth()]}.`;
    </script>

    <script>
        function mostrarEndereco() {
            document.getElementById("endereco").style.display = "block";

            document.getElementById("endereco")
                .scrollIntoView({
                    behavior: "smooth"
                });
        }
    </script>
<?php if ($mensagem != "") { ?> <script> alert("<?php echo $mensagem; ?>"); window.history.replaceState({}, document.title, "carrinho.php"); </script> <?php } ?>
</body>

</html>