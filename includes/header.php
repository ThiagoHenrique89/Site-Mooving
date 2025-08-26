<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="format-detection" content="telephone=no">
  <meta name="theme-color" content="#62966c">
  <meta name="robots" content="index, follow">
  
  <title><?php echo $title; ?></title>
  <meta name="description" content="<?php echo $description;?>">
  <meta name="author" content="Mooving">

  <!-- Open Graph -->
  <meta property="og:title" content="<?php echo $title; ?>">
  <meta property="og:description" content="<?php echo $description;?>">
  <meta property="og:image" content="https://www.mooving.com.br/assets/ico/og-facebook.jpg">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?php echo $title; ?>">
  <meta name="twitter:description" content="<?php echo $description;?>">
  <meta name="twitter:image" content="https://www.mooving.com.br/assets/ico/og-twitter.jpg">

  <!-- Favicon -->
  <link rel="shortcut icon" href="/assets/ico/favicon.webp">

  <!-- CSS principal (não bloqueante) -->
  <link rel="preload" href="/assets/style.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="/assets/style.css"></noscript>

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Unbounded:wght@200..900&family=Poppins:wght@100..900&display=swap" rel="stylesheet">

  <!-- Preload Hero Image (LCP) -->
  <link rel="preload" as="image" href="/assets/images/mosaico-header-bg-verde.webp" imagesrcset="/assets/images/mosaico-header-bg-verde-celular.webp 768w, /assets/images/mosaico-header-bg-verde.webp 1200w" imagesizes="100vw">

  <!-- CSS crítico inline (só header/menu/hero) -->
  <style>
    body { margin:0; font-family:'Poppins', sans-serif; }
    header { display:flex; }
    .navbar { display:flex; align-items:center; justify-content:space-between; padding:1rem; }
    .navbar .menu a { margin:0 0.5rem; text-decoration:none; }
    .cta-button {     background-color: #1aff45;color: #262626;padding: 25px 45px;border: none;cursor: pointer;border-radius: 5px;height: fit-content;font-weight: 500; }
    .banner { position:relative; text-align:left; color:#fff; }
    .banner img { width:100%; height:auto; display:block; }
    h1 { font-family:'Unbounded',sans-serif; font-size:1.5rem; line-height:1.3; }
  </style>
</head>

<body>
  <nav class="navbar">
    <div class="displayMenu container-menu">
      <div class="logo"><a href="/"><img src="/assets/images/logo-verde.webp" alt="Logo Mooving"></a></div>
      <div class="barra">
        <div class="menu">
          <a href="/web-design-criacao-de-sites">Criação de Sites</a>
          <a href="/branding-identidade-visual">Identidade Visual</a>
          <a href="/gestao-de-midias-sociais">Mídias Sociais</a>
          <a href="/anuncios-trafego-pago">Tráfego Pago</a>
          <a href="/seo-otimizacao-de-sites">SEO</a>
          <a href="/videos-audiovisual">Audiovisual</a>
        </div>
      </div>
      <a href="https://api.whatsapp.com/send?phone=5511916945159" class="cta-button">Entre em Contato</a>
    </div>
  </nav>