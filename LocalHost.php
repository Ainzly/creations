<?php
session_start();
require_once 'config.php';

if (isset($_POST['register'])) {
    $name = $_POST['Name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $role = $_POST['role'];

    $checkEmail = $conn->query("SELECT email FROM users WHERE email = '$email'");
    if ($checkEmail->num_rows > 0) {
        $_SESSION['register_error'] = 'Email is already registered!';
        $_SESSION['active_form'] = 'register';
    } else {
        $conn->query("INSERT INTO users (name, email, password, role)
        VALUES ('$name', '$email', '$password', '$role')");
    }
    
    header("Location: Signin.php");
    exit();
}

if (isset($_POST['Login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $result = $conn->query("SELECT * FROM users WHERE email = '$email'");
    
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            $_SESSION['name'] = $user['name'];
            $_SESSION['email'] = $user['email'];
            
            if ($user['role'] === 'admin') { 
                header("Location: adminpage.php");
            } else {
                header("Location: userpage.php");
            }
            exit();
            
        }
    }
    
    $_SESSION['login_error'] = 'Incorrect email or password';
    $_SESSION['active_form'] = 'login';
    header("Location: Signin.php");
    exit();
}
?>
