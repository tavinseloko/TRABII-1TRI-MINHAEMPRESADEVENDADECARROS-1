<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato - AutoMax</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <nav class="navbar">
        <div class="container">
            <div class="logo">AutoMax</div>
            <ul class="nav-menu">
                <li><a href="index.php" class="nav-link">Início</a></li>
                <li><a href="produtos.php" class="nav-link">Produtos</a></li>
                <li><a href="contato.php" class="nav-link active">Contato</a></li>
                <li><a href="login.php" class="nav-link">Login</a></li>
                <li><a href="cadastro.php" class="nav-link btn-cadastro">Cadastro</a></li>
            </ul>
        </div>
    </nav>


    <section class="contact-section">
        <div class="container">
            <h1>Entre em Contato</h1>
            <p class="section-subtitle">Estamos aqui para ajudar com qualquer dúvida</p>

            <div class="contact-grid">
                <div class="contact-form">
                    <h2>Formulário de Contato</h2>
                    <form>
                        <div class="form-group">
                            <label for="name">Nome Completo *</label>
                            <input type="text" id="name" name="name" required>
                        </div>

                        <div class="form-group">
                            <label for="email">Email *</label>
                            <input type="email" id="email" name="email" required>
                        </div>

                        <div class="form-group">
                            <label for="phone">Telefone *</label>
                            <input type="tel" id="phone" name="phone" required>
                        </div>

                        <div class="form-group">
                            <label for="subject">Assunto *</label>
                            <select id="subject" name="subject" required>
                                <option value="">Selecione um assunto</option>
                                <option value="duvidas">Dúvidas sobre veículos</option>
                                <option value="financiamento">Financiamento</option>
                                <option value="manutencao">Manutenção</option>
                                <option value="permuta">Permuta</option>
                                <option value="outro">Outro</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="message">Mensagem *</label>
                            <textarea id="message" name="message" rows="6" required></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Enviar Mensagem</button>
                    </form>
                </div>

                <div class="contact-info">
                    <h2>Informações de Contato</h2>

                    <div class="info-card">
                        <div class="info-icon">📍</div>
                        <div>
                            <h3>Localização</h3>
                            <p>Rua das Flores, 1000 - Zona Leste</p>
                            <p>São Paulo, SP - CEP 03000-000</p>
                        </div>
                    </div>

                    <div class="info-card">
                        <div class="info-icon">📞</div>
                        <div>
                            <h3>Telefone</h3>
                            <p>(11) 3000-0000</p>
                            <p>(11) 99999-9999</p>
                        </div>
                    </div>

                    <div class="info-card">
                        <div class="info-icon">✉️</div>
                        <div>
                            <h3>Email</h3>
                            <p>contato@automax.com.br</p>
                            <p>vendas@automax.com.br</p>
                        </div>
                    </div>

                    <div class="info-card">
                        <div class="info-icon">🕐</div>
                        <div>
                            <h3>Horário de Funcionamento</h3>
                            <p>Segunda a Sexta: 9h - 18h</p>
                            <p>Sábado: 10h - 16h</p>
                            <p>Domingo: Fechado</p>
                        </div>
                    </div>

                    <div class="map-container">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3659.0699999999998!2d-46.6!3d-23.5!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cef8a0a0a0a0a1%3A0xa0a0a0a0a0a0a0a0!2sAutom%C3%B3vel!5e0!3m2!1spt-BR!2sbr!4v1234567890" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
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
