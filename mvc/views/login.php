<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login1/assets/css/style.css">
    <script src="login1/assets/scripts/script.js" defer></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <title>FastMeds | Login & Register</title>
</head>
<body>
    <main id="main">
        <form action="/" method="post" class="login" id="login">
            <h1>Login <i class="bi bi-person-circle"></i></h1>
            <input type="text" name="email" placeholder="Email or Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <a href="#">Forgot Password?</a>
            <button type="submit"  name="submit" >Login <i class="bi bi-arrow-right"></i></button>
            <p onclick="toggleForm(1)">Don't have an account? <a onclick="toggleForm(0)" >Sign Up</a></p>
        </form>
        <form action="/register" method="post" class="register" id="register">
            <h1>Sign Up <i class="bi bi-person-plus"></i></h1>
            <input type="text" name="username" placeholder="Full Name" required>
            <input type="text" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" id="pass1" required>
            <input type="password" name="confirm_password" placeholder="Confirm Password" id="pass2" required>
            <p id="msg"></p>
            <button type="submit" name="submit">Sign Up <i class="bi bi-arrow-right"></i></button>            
            <p onclick="toggleForm(0)">Already have an account? <a href="#">Login</a></p>
        </form>
        <img src="login1/assets/img/banner-right.svg" alt="" class="right-img" id="right">
    </main>
    <footer>
        <p><font style="color: #7500db;">FastMeds</font> &copy; 2023-2024.<font style="color: #7500db;"></font></p>
    </footer>
</body>
</html>
