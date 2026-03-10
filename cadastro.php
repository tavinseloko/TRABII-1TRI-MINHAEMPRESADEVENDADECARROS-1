<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - AutoMax</title>
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
                <li><a href="login.php" class="nav-link">Login</a></li>
                <li><a href="cadastro.php" class="nav-link btn-cadastro">Cadastro</a></li>
            </ul>
        </div>
    </nav>

    <section class="auth-section signup-section">
        <div class="auth-container">
            <div class="auth-box signup-box">
                <h1>Cadastre-se na AutoMax</h1>
                <p class="auth-subtitle">Crie sua conta para acessar ofertas exclusivas</p>

                <form class="auth-form">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="firstname">Primeiro Nome *</label>
                            <input type="text" id="firstname" name="firstname" placeholder="João" required>
                        </div>

                        <div class="form-group">
                            <label for="lastname">Sobrenome *</label>
                            <input type="text" id="lastname" name="lastname" placeholder="Silva" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email">Email *</label>
                        <input type="email" id="email" name="email" placeholder="seu@email.com" required>
                    </div>

                    <div class="form-group">
                        <label for="phone">Telefone *</label>
                        <input type="tel" id="phone" name="phone" placeholder="(11) 99999-9999" required>
                    </div>

                    <div class="form-group">
                        <label for="cpf">CPF *</label>
                        <input type="text" id="cpf" name="cpf" placeholder="000.000.000-00" required>
                    </div>

                    <div class="form-group">
                        <label for="address">Endereço *</label>
                        <input type="text" id="address" name="address" placeholder="Rua, número e complemento" required>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="city">Cidade *</label>
                            <input type="text" id="city" name="city" placeholder="São Paulo" required>
                        </div>

                        <div class="form-group">
                            <label for="state">Estado *</label>
                            <select id="state" name="state" required>
                                <option value="">Selecione</option>
                                <option value="sp">São Paulo</option>
                                <option value="rj">Rio de Janeiro</option>
                                <option value="mg">Minas Gerais</option>
                                <option value="ba">Bahia</option>
                                <option value="rs">Rio Grande do Sul</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password">Senha *</label>
                        <input type="password" id="password" name="password" placeholder="Mínimo 6 caracteres" required>
                    </div>

                    <div class="form-group">
                        <label for="confirmpassword">Confirmar Senha *</label>
                        <input type="password" id="confirmpassword" name="confirmpassword" placeholder="Confirme sua senha" required>
                    </div>

                    <div class="form-group checkbox">
                        <input type="checkbox" id="terms" name="terms" required>
                        <label for="terms">Concordo com os <a href="#" class="link">Termos e Condições</a> *</label>
                    </div>

                    <div class="form-group checkbox">
                        <input type="checkbox" id="newsletter" name="newsletter">
                        <label for="newsletter">Desejo receber ofertas e promoções</label>
                    </div>

                    <button type="submit" class="btn btn-primary btn-full">Criar Conta</button>
                </form>

                <div class="auth-footer">
                    <p>Já tem conta? <a href="login.php" class="link">Faça login</a></p>
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
