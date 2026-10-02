<?php

session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="Signin.css">
</head>
<body class="gradient">
    <div class="box">
        <h1 style="Font-family: Arial;">Welcome, <?= htmlspecialchars($_SESSION['name'] ?? 'Guest'); ?></h1>
        <h2 style="Font-family: Arial;"><center><p>Bakit <span>Ka</span> Nandito?</p></center></h2>
        <button onclick="window.location.href='logout.php'">Logout</button>
    </div>
</body>
</html>
