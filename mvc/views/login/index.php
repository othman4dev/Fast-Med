<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/admin/assets/css/style.css">
    <script src="script.js" defer></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <title>FastMeds | Login & Register</title>
</head>

<body>
    <main id="main">
        <form action="index.html" class="login" id="login">
            <h1>Login <i class="bi bi-person-circle"></i></h1>
            <input type="text" placeholder="Email or Username">
            <input type="password" placeholder="Password">
            <a href="#">Forgot Password?</a>
            <button type="submit">Login <i class="bi bi-arrow-right"></i></button>
            <p onclick="toggleForm(1)">Don't have an account? <a onclick="toggleForm(0)">Sign Up</a></p>
        </form>
        <form action="" class="register" id="register">
            <h1>Sign Up <i class="bi bi-person-plus"></i></h1>
            <input type="text" placeholder="Full Name">
            <input type="text" placeholder="Email">
            <input type="text" placeholder="Password" id="pass1">
            <input type="text" placeholder="Confirm Password" id="pass2">
            <p id="msg"></p>
            <button type="submit" confirmPass()>Sign Up <i class="bi bi-arrow-right"></i></button>
            <p onclick="toggleForm(0)">Already have an account? <a href="#">Login</a></p>
        </form>
        <img src="assets/banner-right.svg" alt="" class="right-img" id="right">
    </main>
    <footer>
        <p>FastMeds &copy; 2023-2024 , By Othman Kharbouch</p>
    </footer>
</body>

</html>