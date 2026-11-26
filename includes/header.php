<?php
$pageTitle = $pageTitle ?? 'Nexcent | Lessons and insights for your digital growth';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Nexcent helps teams create clear, useful and beautiful digital experiences.">
  <meta name="theme-color" content="#ffffff">
  <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?></title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/nexcent.css">
</head>
<body>
<header class="site-header">
  <div class="container nav-wrap">
    <a class="brand" href="index.php" aria-label="Nexcent home">
      <img class="brand-image" src="assets/Icon.png" alt="Nexcent logo">
      <span>Nexcent</span>
    </a>
    <nav class="main-nav" id="primary-nav" aria-label="Main navigation">
      <a class="nav-item active" href="#home">Home</a>
      <a class="nav-item" href="#services">Features</a>
      <a class="nav-item" href="#community">Community</a>
      <a class="nav-item" href="#blog">Blog</a>
      <a class="nav-item" href="#portfolio">Pricing</a>
    </nav>
    <div class="nav-actions">
      <button class="theme-toggle" type="button" aria-label="Switch to dark mode" title="Switch to dark mode"><svg class="theme-icon" viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M20.2 15.4A8.5 8.5 0 0 1 8.6 3.8 8.6 8.6 0 1 0 20.2 15.4Z"/></svg></button>
      <a class="login-link" href="#services">Login</a>
      <a class="nav-register" href="#services">Sign up <span aria-hidden="true">→</span></a>
    </div>
    <button class="menu-toggle" type="button" aria-label="Open navigation" aria-expanded="false" aria-controls="primary-nav">
      <span></span><span></span><span></span>
    </button>
  </div>
</header>
<main>
