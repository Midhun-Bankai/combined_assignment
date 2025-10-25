<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Shopcart Demo</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
      font-family: 'Poppins', sans-serif;
    }
    .navbar {
      background-color: #2874f0;
    }
    .navbar-brand {
      font-weight: 600;
    }
    .btn-primary {
      background-color: #2874f0;
      border-color: #2874f0;
    }
    .btn-primary:hover {
      background-color: #1a5cd8;
    }
    footer {
      background: #2874f0;
      color: white;
      padding: 20px 0;
      text-align: center;
      margin-top: 50px;
    }
    footer a {
      color: #ffe082;
      text-decoration: none;
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container">
    <a class="navbar-brand fs-4" href="index.php">🛒 Shopcart Demo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item"><a href="index.php" class="btn btn-light btn-sm me-2">Home</a></li>
        <?php if(isset($_SESSION['user'])): ?>
          <li class="nav-item"><a href="cart.php" class="btn btn-light btn-sm me-2">Cart</a></li>
          <li class="nav-item"><a href="orders.php" class="btn btn-light btn-sm me-2">My Orders</a></li>
          <li class="nav-item"><a href="logout.php" class="btn btn-danger btn-sm">Logout</a></li>
        <?php else: ?>
          <li class="nav-item"><a href="login.php" class="btn btn-light btn-sm me-2">Login</a></li>
          <li class="nav-item"><a href="register.php" class="btn btn-outline-light btn-sm">Register</a></li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</nav>

<div class="container my-5">
