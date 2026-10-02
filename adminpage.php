<?php

session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Profile</title>
    <link rel="stylesheet" href="Signin.css">
</head>
<body class="gradient">
    <div class="box">
        <h1>Welcome, <?= htmlspecialchars($_SESSION['name'] ?? 'Guest'); ?></h1>
        <p>Bakit<span>Ka</span> Nandito</p>
        <button onclick="window.location.href='logout.php'">Logout</button>
    </div>
</body>
</html>
