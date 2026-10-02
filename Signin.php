<?php 
session_start(); 

$errors = [ 
    'login' => $_SESSION['login_error'] ?? '', 
    'register' => $_SESSION['register_error'] ?? '', 
]; 
$activeForm = $_SESSION['active_form'] ?? 'login'; 

session_unset();

function showError($error) { 
    return !empty($error) ? "<p class='error-message'>$error</p>" : "";
} 

function isActiveForm($formName, $activeForm) { 
    return $formName === $activeForm ? 'active' : ''; 
} 

?> 

<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <title>Sign In</title> 
    <link rel="stylesheet" href="Signin.css"> 
</head>
<body class="gradient"> 
    <div class="container"> 

        <div class="form-box <?= isActiveForm('login', $activeForm); ?>" id="login-form"> 
            <form action="LocalHost.php" method="post"> 
                <h2>Login</h2> 
                <?= showError($errors['login']); ?> 
                <input type="email" name="email" placeholder="email" required> 
                <input type="password" name="password" placeholder="password" required><br> 
                <button type="submit" name="Login">Login</button>
                <br><br> 
                <p>Don't have an account?</p> 
                <div class="register"><a href="#" onclick="showForm('register-form')"> Register </a></div> 
            </form> 
        </div> 

        <div class="form-box <?= isActiveForm('register', $activeForm); ?>" id="register-form"> 
            <form action="LocalHost.php" method="post"> 
                <h2>Register</h2>
                <?= showError($errors['register']); ?> 
                <input type="text" name="Name" placeholder="Name" required>
                <input type="email" name="email" placeholder="email" required> 
                <input type="password" name="password" placeholder="password" required> 
                <select name="role" required> 
                    <option value=""> Form </option> 
                    <option value="user">User</option> 
                    <option value="admin">Admin</option> 
                </select> 
                <button type="submit" name="register">Register</button> 
                <br><br> 
                <p>Already have an account?</p> 
                <div class="register"><a href="#" onclick="showForm('login-form')"> Login </a></div> 
            </form> 
        </div> 
    </div> 
    <script src="login.js"></script> 
</body> 
</html>
