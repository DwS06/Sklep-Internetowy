<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buty męskie</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<!-- Navbar -->
<nav class="navbar">
    <div class="logo">
        <a href="index.html" class="logo-link">
            <img src="logo.jpg" alt="Logo" class="logo-img">
            <span class="brand-name">ButySklep</span>
        </a>
    </div>

    <div class="nav-right">
        <a href="cart.html" class="cart-btn">🛒 Koszyk</a>
        <a href="login.php" class="auth-btn">Zaloguj się</a>
        <a href="register.php" class="auth-btn">Zarejestruj się</a>
    </div>
</nav>

<!-- Main content -->
<main class="products-page">
    <div class="filters">
        <h2>Filtry</h2>
        <form>
            <label for="size">Rozmiar:</label><br>
            <select id="size" name="size">
                <option value="">Wszystkie</option>
                <option value="40">40</option>
                <option value="41">41</option>
                <option value="42">42</option>
                <option value="43">43</option>
            </select><br><br>

            <label for="color">Kolor:</label><br>
            <select id="color" name="color">
                <option value="">Wszystkie</option>
                <option value="black">Czarny</option>
                <option value="white">Biały</option>
                <option value="brown">Brązowy</option>
            </select><br><br>

            <label for="price">Cena do:</label><br>
            <input type="number" id="price" name="price" placeholder="PLN"><br><br>

            <button type="submit" class="submit-btn">Filtruj</button>
        </form>
    </div>

    <div class="products">
        <!-- Przykładowe kafelki produktów -->
        <div class="product-card">
            <img src="shoe1.jpg" alt="But 1">
            <h3>But 1</h3>
            <p>199 PLN</p>
            <button class="submit-btn">Dodaj do koszyka</button>
        </div>
        <div class="product-card">
            <img src="shoe2.jpg" alt="But 2">
            <h3>But 2</h3>
            <p>249 PLN</p>
            <button class="submit-btn">Dodaj do koszyka</button>
        </div>
        <div class="product-card">
            <img src="shoe3.jpg" alt="But 3">
            <h3>But 3</h3>
            <p>179 PLN</p>
            <button class="submit-btn">Dodaj do koszyka</button>
        </div>
        <!-- Dodaj więcej produktów według potrzeb -->
    </div>
</main>

<!-- Footer -->
<footer class="footer">
    <p>&copy; 2025 ButySklep. Wszystkie prawa zastrzeżone.</p>
</footer>

</body>
</html>
