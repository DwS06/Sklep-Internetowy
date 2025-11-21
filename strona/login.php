<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanie</title>
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

<!-- Main content – formularz logowania -->
<main>
    <h1>Logowanie</h1>

    <form class="login-form" action="login_process.php" method="POST">
    <label for="email">Adres e-mail:</label><br>
    <input type="email" id="email" name="email" required><br><br>

    <label for="password">Hasło:</label><br>
    <input type="password" id="password" name="password" required><br><br>

    <button type="submit" class="submit-btn">Zaloguj się</button>

    <!-- Link do rejestracji -->
    <p class="register-link">
        Nie masz konta? <a href="register.php">Zarejestruj się</a>.
    </p>
</form>
</main>

<!-- Footer -->
<footer class="footer">
    <p>&copy; 2025 ButySklep. Wszystkie prawa zastrzeżone.</p>
</footer>

</body>
</html>
