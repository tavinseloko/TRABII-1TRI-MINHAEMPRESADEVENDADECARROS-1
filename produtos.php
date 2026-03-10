<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos - AutoMax</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <nav class="navbar">
        <div class="container">
            <div class="logo">AutoMax</div>
            <ul class="nav-menu">
                <li><a href="index.php" class="nav-link">Início</a></li>
                <li><a href="produtos.php" class="nav-link active">Produtos</a></li>
                <li><a href="contato.php" class="nav-link">Contato</a></li>
                <li><a href="login.php" class="nav-link">Login</a></li>
                <li><a href="cadastro.php" class="nav-link btn-cadastro">Cadastro</a></li>
            </ul>
        </div>
    </nav>

    <section class="products-section">
        <div class="container">
            <h1>Nossos Veículos</h1>
            <p class="section-subtitle">Explore nossa seleção de carros de alta qualidade</p>

            <div class="filters">
                <input type="text" placeholder="Buscar por modelo..." class="filter-input">
                <select class="filter-select">
                    <option>Todos os modelos</option>
                    <option>Sedan</option>
                    <option>SUV</option>
                    <option>Hatchback</option>
                    <option>Esportivo</option>
                </select>
            </div>

            <div class="products-grid">
                <div class="product-card">
                    <div class="product-info">
                        <h3>BMW X5 2023</h3>
                        <p class="product-category">SUV Luxo</p>
                        <p class="product-description">Motor 3.0L, 340 HP, 4WD Automático</p>
                        <div class="product-price">R$ 380.000</div>
                        <button class="btn btn-primary">Ver Detalhes</button>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-info">
                        <h3>Mercedes C300 2024</h3>
                        <p class="product-category">Sedan Premium</p>
                        <p class="product-description">Motor 2.0L Turbo, 258 HP, Automático 9V</p>
                        <div class="product-price">R$ 320.000</div>
                        <button class="btn btn-primary">Ver Detalhes</button>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-info">
                        <h3>Audi A4 2023</h3>
                        <p class="product-category">Sedan Executivo</p>
                        <p class="product-description">Motor 2.0L Turbo, 265 HP, Quattro</p>
                        <div class="product-price">R$ 290.000</div>
                        <button class="btn btn-primary">Ver Detalhes</button>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-info">
                        <h3>Tesla Model 3 2024</h3>
                        <p class="product-category">Elétrico Esportivo</p>
                        <p class="product-description">Motor Elétrico, 500 HP, Autonomia 600km</p>
                        <div class="product-price">R$ 310.000</div>
                        <button class="btn btn-primary">Ver Detalhes</button>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-info">
                        <h3>Porsche 911 Carrera</h3>
                        <p class="product-category">Esportivo Superluxo</p>
                        <p class="product-description">Motor 3.8L Twin-Turbo, 580 HP, 0-100 em 2.8s</p>
                        <div class="product-price">R$ 580.000</div>
                        <button class="btn btn-primary">Ver Detalhes</button>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-info">
                        <h3>Jaguar F-Pace 2023</h3>
                        <p class="product-category">SUV Performance</p>
                        <p class="product-description">Motor 3.0L V6, 380 HP, All-Wheel Drive</p>
                        <div class="product-price">R$ 420.000</div>
                        <button class="btn btn-primary">Ver Detalhes</button>
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
