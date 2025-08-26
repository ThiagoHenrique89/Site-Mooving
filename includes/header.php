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
  <link rel="shortcut icon" href="/assets/ico/favicon.jpg">

  <!-- CSS principal (não bloqueante) -->
  <link rel="preload" href="/assets/style.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="/assets/style.css"></noscript>

    <!-- Google Fonts - carregamento não bloqueante -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Unbounded:wght@200..900&family=Poppins:wght@100..900&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
    <link href="https://fonts.googleapis.com/css2?family=Unbounded:wght@200..900&family=Poppins:wght@100..900&display=swap" rel="stylesheet">
    </noscript>

  <!-- Preload Hero Image (LCP) -->
  <link rel="preload" as="image" href="/assets/images/mosaico-header-bg-verde.webp" imagesrcset="/assets/images/mosaico-header-bg-verde-celular.webp 768w, /assets/images/mosaico-header-bg-verde.webp 1200w" imagesizes="100vw" fetchpriority="high">

  <style>
/* Reset de CSS bÃƒÆ’Ã†â€™Ãƒâ€šÃ‚Â¡sico */
*,
*::before,
*::after {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

/* Tipografia */
body {
  background-color: #e4e4e4;
  font-family: 'Poppins', sans-serif;
  font-weight: 400; /* Peso normal */
  line-height: 1.6;
  color: #262626;
  letter-spacing: 1px;
}

h1,h2,h3,h4,h5,h6 {
  font-family: "Unbounded", sans-serif;
  font-optical-sizing: auto;
  font-style: normal;
}

strong {
  font-weight: 600 !important
}

.logo a {

  vertical-align: top;
  line-height: 1;

}

/* Listas */
ul, ol {
 padding: 0 10px;
}

/* Tabelas */
table {
  border-collapse: collapse;
  border-spacing: 0;
}

/* Imagens */
img {
  max-width: 100%;
  height: auto;
}

/* Links */
a {
  text-decoration: none;
  color: inherit;
  letter-spacing: .2px;
  line-height: 0;
}

/* FormulÃƒÆ’Ã†â€™Ãƒâ€šÃ‚Â¡rios */
input, textarea, button, select {
  font: inherit;
  border: none;
  background: none;
}

/* Remover espaÃƒÆ’Ã†â€™Ãƒâ€šÃ‚Â§amento extra em elementos de formataÃƒÆ’Ã†â€™Ãƒâ€šÃ‚Â§ÃƒÆ’Ã†â€™Ãƒâ€šÃ‚Â£o */
button, input[type="button"], input[type="submit"], input[type="reset"], select {
  cursor: pointer;
  background: transparent;
}

/* Scrollbars */
html {
  -webkit-overflow-scrolling: touch;
}

/* Remove o estilo padrÃƒÆ’Ã†â€™Ãƒâ€šÃ‚Â£o de botÃƒÆ’Ã†â€™Ãƒâ€šÃ‚Âµes */
button:focus, input:focus, textarea:focus {
  outline: none;
}

/* Container padrÃƒÆ’Ã†â€™Ãƒâ€šÃ‚Â£o para desktop */
.container {
    width: 100%;
    max-width: 1200px; /* Largura mÃƒÆ’Ã†â€™Ãƒâ€šÃ‚Â­nima de 1400px para desktop */
    margin: 0 auto; /* Centraliza o container */
    padding: 0 20px; /* Padding nas laterais */
}
.container-menu {
    width: 100%;
    max-width: 95vw; /* Largura mÃƒÆ’Ã†â€™Ãƒâ€šÃ‚Â­nima de 1400px para desktop */
    margin: 0 auto; /* Centraliza o container */
}

/* Definindo fontes base para todo o site */
html {
  font-size: 16px; /* Base para 1rem = 16px */
}


/* TÃƒÆ’Ã†â€™Ãƒâ€šÃ‚Â­tulos principais - h1 */
h1 {
  font-size: clamp(30px, 5vw, 50px);
  margin-bottom: 20px;
  font-weight: 900; /* Peso extra pesado para maior destaque */
  line-height: 1.2;
}

/* TÃƒÆ’Ã†â€™Ãƒâ€šÃ‚Â­tulos secundÃƒÆ’Ã†â€™Ãƒâ€šÃ‚Â¡rios - h2 */
h2, .tituloServicos {
  font-size: 22px;
  margin-bottom: 20px;
  font-weight: 800; /* Peso mais pesado para tÃƒÆ’Ã†â€™Ãƒâ€šÃ‚Â­tulos secundÃƒÆ’Ã†â€™Ãƒâ€šÃ‚Â¡rios */
  letter-spacing: 1px;
  line-height: 1;
}

/* TÃƒÆ’Ã†â€™Ãƒâ€šÃ‚Â­tulos menores - h3 */
h3 {
  font-size: 18px;
  margin-bottom: 15px;
  font-weight: 700; /* Peso para subtÃƒÆ’Ã†â€™Ãƒâ€šÃ‚Â­tulos */
  line-height: 1.1;
  letter-spacing: .5px;
}

/* ParÃƒÆ’Ã†â€™Ãƒâ€šÃ‚Â¡grafos - p */
p {
  font-size: 16px;
  line-height: 1.6;
  color: #4d4d4d;
  margin-bottom: 15px;
  font-weight: 300; /* Peso mais leve para o texto do parÃƒÆ’Ã†â€™Ãƒâ€šÃ‚Â¡grafo */
  letter-spacing: .2px;
}
.light {
  font-weight: 300;
}
  
header {
    display: flex;
    justify-content: center;
}

.col {
  flex: 1;
  padding: 20px;
}

section {
  padding: 35px 0;
}
.primeiraSection {
  padding: 70px 0 35px 0;
}

.navbar {
    background-color: #262626;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    padding: 15px 0px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.menu {
  display: block;
  text-align: center;
}
.displayMenu {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.menu a {
    text-decoration: none;
    color: #ffffff;
    font-size: 14px;
}
.menu a:hover, .menu a:active {
    color: #1aff45;
}
.menu a {
    /* Define o posicionamento relativo para que o pseudo-elemento seja posicionado corretamente */
    position: relative;
}

.menu a::after {
    /* Adiciona a bolinha como conteÃƒÂºdo */
    content: '•';

    /* Define o espaÃƒÂ§amento entre a bolinha e o texto */
    padding: 0 13px 0 19px;

    /* Define a cor da bolinha para combinar com o design */
    color: #1aff45; /* Use a cor que preferir */
}

.menu a:last-child::after {
    /* Remove a bolinha do ÃƒÂºltimo item para nÃƒÂ£o quebrar o layout */
    content: '';
}
.cta-button {
    background-color: #1aff45;
    color: #262626;
    padding: 25px 45px;
    border: none;
    cursor: pointer;
    border-radius: 5px;
    height: fit-content;
    font-weight: 500;

}
.menu a:nth-child(6)::after {
    content: '';
    padding: 0;
}
.cta-button:hover {
  background-color: #62966c;
  color: #ffffff;
}

.logo img {
    transition: transform 0.1s ease-in-out;
}

.logo:hover img {
    animation: tremor 0.2s ;
}

@keyframes tremor {
    0% { transform: translate(0, 0); }
    25% { transform: translate(-2px, 2px); }
    50% { transform: translate(2px, -2px); }
    75% { transform: translate(-2px, -2px); }
    100% { transform: translate(2px, 2px); }
}
.banner {
    position: relative;
    display: inline-block; /* Ajusta o tamanho ao da imagem */
}

.banner img {

}

.banner h1 {
    position: absolute;
    top: 50%;
    left: 50%;
    font-size: clamp(1.5rem, 3.2vw, 3.7rem);
    transform: translate(-50%, -50%);
    color: white;
    padding: 0;
    color: #ffffff;
    width: inherit;
    padding: 0 30px;
    max-width: 1200px
}
.barra {
    display: flex;
    justify-content: space-between;
}

.cards {
  display: flex;
  flex-wrap: wrap;
  gap: 20px;
}

@keyframes borda-animada {
  0% { background-position: 200% 50%; }
  100% { background-position: 0% 50%; }
}


.card {
  flex: 1 1 calc(33.33% - 20px);
  background: white;
  padding: 40px 30px;
  text-align: left;
  position: relative;
  overflow: hidden; /* Evita que o pseudo-elemento ultrapasse os limites */
}

/* Criando a borda animada no topo com ::before */
.card::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 5px; /* Espessura da borda */
  background: linear-gradient(90deg, #1aff45, #262626, #1aff45);
  background-size: 200% 100%;
  animation: borda-animada 2.5s infinite linear;
}

.secao-intro .bloco {
position: relative;
}

.secao-intro .bloco::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 5px; /* Espessura da borda */
  background: linear-gradient(90deg, #1aff45, #262626, #1aff45);
  background-size: 200% 100%;
  animation: borda-animada 2.5s infinite linear;
}


.card img {
  width: 100%;
  height: auto;
  margin-bottom: 30px;
}

.menuCard {
  padding: 0 10px;
  display: grid;
  row-gap: 5px;
}
.menuCard li{
  font-weight: 600;
  font-size: 12.5px;
}
.whatsapp-fixo{
  position: fixed;
  bottom: 25px;
  right: 13px;
  z-index: 9999;
}

.bloco {
  display: flex;
  background-color: white;
  padding: 30px;
  margin-bottom: 20px;
  align-items: center;
  justify-content: center;
}


/* Layout das colunas */
.coluna {
  padding: 10px;
}

.esquerda {
  width: 33.33%;
}

.direita {
  width: 66.67%;
}
.direita p {
  padding-left: 30px;
  margin-bottom: 0;
}

/* EstilizaÃƒÂ§ÃƒÂ£o do subtÃƒÂ­tulo */
.breadcrumb {
  display: block;
  font-size: 14px;
  color: #262626;
  margin-bottom: 5px;
}
.active {
  color: #1aff45 !important;
}

.grade-marcas {
  display: flex;
   /* 3 colunas iguais */
  gap: 50px; /* espaÃƒÂ§amento entre colunas e linhas */
  justify-items: center; /* centraliza as imagens horizontalmente */
  align-items: center;   /* centraliza as imagens verticalmente */
  align-content: center;
  justify-content: center;
}

.grade-marcas img {
  max-width: 100%;
  height: auto;
  object-fit: contain;
  height: 25px;
}

.mbz {
  margin-bottom: 0 !important;
}

.artigos {
  background-color: #ffff;
  padding: 50px 40px;
}

.artigos h2{
  padding-top: 20px;
}

.artigos h2, .artigos h3 {
  font-weight: 500 !important;
}

.secao-intro {
  padding-top: 70px;
}

.conteudo-principal {
  padding-bottom: 70px;
}

footer .container{
  display: flex;
  align-items: center;
}
footer .container p{
  margin-bottom: 0;
}
.rodape {
  display: flex;
  justify-content: space-between;
  align-items: flex-start;
  padding: 50px 20px 35px 20px;
  background-color: white;
  flex-wrap: wrap;
  gap: 20px;
}

.rodape p{
 font-size: 13px;
}

.coluna-logo {
  flex: 1;
  line-height: 0;
}

.logo-footer {
  max-width: 120px;
  height: auto;
}

.coluna-texto {
  flex: 1;
  min-width: 200px;
  font-size: 14px;
}

.coluna-redes {
  min-width: 150px;
  display: flex;
  gap: 10px;
  align-items: center;
}

.icone-rede {

  transition: opacity 0.3s;
}

.icone-rede:hover {
  opacity: 0.6;
} 


.area-cta h2 {
  font-size: 8.9em;
  text-align: center;
}
.area-cta-bloco {
  display: flex;
  align-items: center;
  justify-content: space-between;
 
}
.area-cta-bloco-esquerda {
  width: 70%;
}
.area-cta-bloco-esquerda p {
  margin-bottom: 0;
  font-weight: 600;
}
.area-cta-bloco-direita {
  text-align: end;
  width: 30%;
}

.footer-cta {
    padding: 0px 0 50px 0 !important;
}

.footer-cta-botao {
  background-color: #1aff45;
  padding: 60px 20px;
}
.cta-button-footer {
  background-color: #262626 !important;
  color: #1aff45 !important;
  padding: 25px 45px !important;
}

.cta-button-footer:hover {
  background-color: #ffffff !important;
  color: #262626 !important;
}

.carrosel-section {
  padding: 0;
}

.carrossel-palavras {
  overflow: hidden;
  width: 100%;
  background-color: #1aff45;
  padding: 30px 0;
}

.conteudo-carrossel {
  display: flex;
  width: max-content;
  animation: deslizar 100s linear infinite;

}

.conteudo-carrossel h2 {
  font-size: 5vw;
  font-weight: bold;
  color: #262626;
  white-space: nowrap;
  margin: 0;
}

.conteudo-carrossel span {
    margin-right: 1vw;
    position: relative;
    top: 1vw;
}

/* AnimaÃƒÂ§ÃƒÂ£o fluida */
@keyframes deslizar {
  0% {
    transform: translateX(0%);
  }
  100% {
    transform: translateX(-50%);
  }
}

@media (max-width: 1561px) {
    .cta-button {
      padding: 15px 45px;
      font-size: 12px;
      line-height: normal;
      text-align: center;
  }
}
@media (max-width: 1465px) {
    .menu a {
    font-size: 12px;
}
  .menu a::after {
    padding: 0 3px 0 9px;
}
  .cta-button {
      padding: 15px 45px;
      font-size: 12px;
      line-height: normal;
      text-align: center;
  }
}
  @media (max-width: 1024px) {
      .container {
        padding: 0 15px; 
      }
      .col {
        flex: 1 1 calc(33.33% - 10px);
    }
      .cta-button {
      padding: 5px 35px;
      font-size: 12px;
      line-height: normal;
      text-align: center;
  }

  }

  @media (max-width: 768px) {
    .container {
      padding: 0 10px; 
    }
    .col {
      flex: 1 1 calc(100% - 10px);
  }
  .banner {
    margin-top: 64px;
  }
  .menu {
      display: list-item;
      text-align: center;
      z-index: 9;
      position: absolute;
      top: 78px;
      left: 0;
      width: 100%;
      background-color: #262626;
      padding: 5px 15px;
      border-top: #1aff449c solid 1px;
    }
    .displayMenu  {
      padding: 0 !important;
    }
    .menu a {
      color: #ffffff;
      font-size: 12px;
    }
    .menu a::after {
    content: '•';
    padding: 0 2px 0 7px;
    color: #1aff45;
}
.menu a:nth-child(3)::after {
    content: '';
    padding: 0;
}

    .logo img {
        transition: transform 0.1s ease-in-out;
        width: 150px;
    }
    .navbar {
      padding: 20px;
    }
    .navbar .cta-button {
      padding: 20px 25px;
      font-size: 12px;
      line-height: 0;
    }
    .marcas h3 {
      text-align: center;
    }
    .card {
      flex: 1 1 100%;
    }
    html {
    font-size: 18px; /* Para telas grandes, define 1rem como 18px */
    }
    .bloco {
      flex-direction: column;
  }
  .esquerda, .direita {
      width: 100%;
  }
  .active {
    color: #1aff45 !important;
  }
  .grade-marcas {
    display: grid;
    grid-template-columns: repeat(2, 1fr); /* 3 colunas iguais */
    gap: 50px; /* espaÃƒÂ§amento entre colunas e linhas */
    justify-items: center; /* centraliza as imagens horizontalmente */
    align-items: center;   /* centraliza as imagens verticalmente */
    padding-top: 20px;
  }
  .direita p {
    padding-left: 0px;
    margin-bottom: 0;
}
.grade-marcas img {
  max-width: 100px;
}
.area-cta h2 {
    font-size: 11vw;
   
}
.coluna-redes {
    justify-content: center;
}
footer .container {
    display: flex;
    align-items: center;
    flex-direction: column;
    text-align: center;
    row-gap: 15px;
}
.conteudo-carrossel h2 {
    font-size: 10vw;
}
.area-cta-bloco-esquerda br {
  display: none;
}
.area-cta-bloco {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
}
.area-cta-bloco-esquerda, .area-cta-bloco-direita {
    width: 100%;
    text-align: center;

}
.footer-cta {
    padding: 0 0 30px 0 !important;
}
.area-cta-bloco {
    row-gap: 35px;
}
.secao-intro {
    padding-top: 138px;
}

}
    
  </style>

</head>

<body>
  <nav class="navbar">
    <div class="displayMenu container-menu">
      <div class="logo"><a href="/"><img src="/assets/images/logo-verde.webp" width="150" height="38" alt="Logo Mooving"></a></div>
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