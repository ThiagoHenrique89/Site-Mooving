<?php
// Definição das rotas e seus respectivos títulos e descrições
$rotas = [
    'home' => [
        'titulo' => 'Agência de Marketing Digital e publicidade em Jundiaí | Mooving',
        'descricao' => 'Mooving é uma agência de marketing digital em Jundiaí, focada em resultados. Criamos sites, logotipos, gerimos tráfego pago, SEO e mídias sociais para o seu negócio.'
    ],
    'web-design-criacao-de-sites' => [
        'titulo' => 'Criação de Sites e Web Design em Jundiaí | Mooving',
        'descricao' => 'Mooving oferece criação de sites responsivos, e-commerce, landing pages e sites institucionais em Jundiaí. Transforme sua presença online com estilo e resultados.'
    ],
    'branding-identidade-visual' => [
        'titulo' => 'Branding e Identidade Visual em Jundiaí | Mooving',
        'descricao' => 'Agência de branding em Jundiaí especializada na criação de logotipo, identidade visual completa, naming e rebranding. Construa uma marca forte e memorável.'
    ],
    'gestao-de-midias-sociais' => [
        'titulo' => 'Gestão de Mídias Sociais em Jundiaí | Mooving',
        'descricao' => 'Especialistas em gestão de mídias sociais para empresas de Jundiaí. Cuidamos da sua estratégia, criativos e anúncios para gerar engajamento e vendas.'
    ],
    'anuncios-trafego-pago' => [
        'titulo' => 'Tráfego Pago e Anúncios Online em Jundiaí | Mooving',
        'descricao' => 'Agência de tráfego pago em Jundiaí. Criamos e otimizamos campanhas de Google Ads e Social Ads (Meta, TikTok, LinkedIn) para gerar leads e aumentar suas vendas.'
    ],
    'seo-otimizacao-de-sites' => [
        'titulo' => 'SEO e Otimização de Sites em Jundiaí | Mooving',
        'descricao' => 'Especialistas em SEO em Jundiaí. Otimizamos seu site para ranquear no Google, com foco em SEO local, on-page e performance. Seja encontrado por seus clientes.'
    ],
    'videos-audiovisual' => [
        'titulo' => 'Produção de Vídeos em Jundiaí | Mooving',
        'descricao' => 'Produtora de vídeos em Jundiaí para mídias sociais, vídeos comerciais e institucionais. Criamos conteúdo audiovisual que engaja e transforma sua comunicação.'
    ]
];

// Captura a página solicitada (exemplo: site.com.br/servicos)
$pagina = isset($_GET['pagina']) ? $_GET['pagina'] : 'home';

// Se a página existir nas rotas, usa os dados; caso contrário, exibe erro 404
if (array_key_exists($pagina, $rotas)) {
    $title = $rotas[$pagina]['titulo'];
    $description = $rotas[$pagina]['descricao'];
} else {
    $title = 'Erro 404 | Página não encontrada';
    $description = 'A página que você está tentando acessar não existe.';
    $pagina = '404';
}

// Inclui o cabeçalho
include 'includes/header.php';

// Inclui a página correspondente (se existir), ou exibe erro 404
$arquivo = "paginas/$pagina.php";
if (file_exists($arquivo)) {
    include $arquivo;
} else {
    include "paginas/404.php";
}

// Inclui o rodapé
include 'includes/footer.php';
?>