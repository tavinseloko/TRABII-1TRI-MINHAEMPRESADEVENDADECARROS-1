<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - AutoMax</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <nav class="navbar">
        <div class="container">
            <div class="logo">AutoMax</div>
            <ul class="nav-menu">
                <li><a href="index.php" class="nav-link">Início</a></li>
                <li><a href="produtos.php" class="nav-link">Produtos</a></li>
                <li><a href="contato.php" class="nav-link">Contato</a></li>
                <li><a href="login.php" class="nav-link active">Login</a></li>
                <li><a href="cadastro.php" class="nav-link btn-cadastro">Cadastro</a></li>
            </ul>
        </div>
    </nav>


    <section class="auth-section">
        <div class="auth-container">
            <div class="auth-box">
                <h1>Login na AutoMax</h1>
                <p class="auth-subtitle">Acesse sua conta para gerenciar pedidos e acompanhar</p>

                <form class="auth-form">
                    <div class="form-group">
                        <label for="email">Email *</label>
                        <input type="email" id="email" name="email" placeholder="seu@email.com" required>
                    </div>

                    <div class="form-group">
                        <label for="password">Senha *</label>
                        <input type="password" id="password" name="password" placeholder="Sua senha" required>
                    </div>

                    <div class="form-group checkbox">
                        <input type="checkbox" id="remember" name="remember">
                        <label for="remember">Lembrar-se de mim</label>
                    </div>

                    <button type="submit" class="btn btn-primary btn-full">Entrar</button>

                    <div class="form-divider">ou</div>

                    <button type="button" class="btn btn-secondary btn-full">Entrar com Google</button>
                </form>

                <div class="auth-footer">
                    <p>Esqueceu sua senha? <a href="#" class="link">Clique aqui</a></p>
                    <p>Não tem conta? <a href="cadastro.php" class="link">Cadastre-se</a></p>
                </div>
            </div>

            <div class="auth-image">
            </div>
        </div>
    </section>


    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h4>AutoMax</h4>
                    <p>A sua melhor escolha em carros premium</p>
                </div>
                <div class="footer-section">
                    <h4>Links Rápidos</h4>
                    <ul>
                        <li><a href="index.php">Início</a></li>
                        <li><a href="produtos.php">Produtos</a></li>
                        <li><a href="contato.php">Contato</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Contato</h4>
                    <p>Email: contato@automax.com.br</p>
                    <p>Telefone: (11) 3000-0000</p>
                </div>
                <div class="footer-section">
                    <h4>Redes Sociais</h4>
                    <div class="social-links">
                        <a href="#" class="social-link">Facebook</a>
                        <a href="#" class="social-link">Instagram</a>
                        <a href="#" class="social-link">Twitter</a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2026 AutoMax. Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>
</body>
</html>
