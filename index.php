<?php
// Definição das rotas e seus respectivos títulos e descrições
$rotas = [
    'home' => [
        'titulo' => 'Mooving | Agência de Marketing Digital e Publicidade | Jundiaí - SP',
        'descricao' => 'Agência de Marketing Digital em Jundiaí, especializada em publicidade, criação de sites, SEO, logotipos e mídias sociais.'
    ],
    'criacao-de-logotipo-identidade-visual' => [
        'titulo' => 'Criação de Logotipo e Identidade Visual | Mooving',
        'descricao' => 'Criação de logotipo e identidade visual com foco em branding, impacto e estratégia. Posicione sua marca com a Mooving.'
    ],
    'cases' => [
        'titulo' => 'Cases de Sucesso | Mooving - Resultados Reais',
        'descricao' => 'Confira cases de sucesso de clientes que aumentaram sua visibilidade com nossa expertise em marketing digital.'
    ],
    'sobre' => [
        'titulo' => 'Sobre Nós | Mooving - Marketing Digital',
        'descricao' => 'Saiba mais sobre a Mooving, nossa missão, valores e como ajudamos empresas a crescerem no mundo digital.'
    ],
    'contato' => [
        'titulo' => 'Fale Conosco | Mooving - Agência Digital',
        'descricao' => 'Entre em contato com nossa equipe e descubra como podemos ajudar a sua empresa a crescer no ambiente digital.'
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