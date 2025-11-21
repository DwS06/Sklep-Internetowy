<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rejestracja</title>
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

<!-- Main content – formularz rejestracji -->
<main>
    <h1>Rejestracja</h1>

    <form class="login-form" action="register_process.php" method="POST">
        <label for="first_name">Imię:</label><br>
        <input type="text" id="first_name" name="first_name" required><br><br>

        <label for="last_name">Nazwisko:</label><br>
        <input type="text" id="last_name" name="last_name" required><br><br>

        <label for="email">Adres e-mail:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="dob">Data urodzenia:</label><br>
        <input type="date" id="dob" name="dob" required><br><br>

        <label for="country">Kraj:</label><br>
        <input type="text" id="country" name="country" required><br><br>

        <label for="city">Miasto:</label><br>
        <input type="text" id="city" name="city" required><br><br>

        <label for="street">Ulica:</label><br>
        <input type="text" id="street" name="street" required><br><br>

        <label for="zip">Kod pocztowy:</label><br>
        <input type="text" id="zip" name="zip" required><br><br>

        <label for="phone">Telefon:</label><br>
        <input type="tel" id="phone" name="phone" required><br><br>

        <label for="password">Hasło:</label><br>
        <input type="password" id="password" name="password" required><br><br>

        <label for="confirm_password">Powtórz hasło:</label><br>
        <input type="password" id="confirm_password" name="confirm_password" required><br><br>

        <button type="submit" class="submit-btn">Zarejestruj się</button>

        <!-- Link do logowania -->
        <p class="register-link">
            Masz już konto? <a href="login.php">Zaloguj się</a>.
        </p>
    </form>
</main>

<!-- Footer -->
<footer class="footer">
    <p>&copy; 2025 ButySklep. Wszystkie prawa zastrzeżone.</p>
</footer>

</body>
</html>
