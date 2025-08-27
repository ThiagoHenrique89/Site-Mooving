// Função para adicionar a classe "active" ao link correspondente à URL atual
function setActiveLink() {
    // Obter todos os links do menu
    const links = document.querySelectorAll('.menu a');
    
    // Remover a classe 'active' de todos os links
    links.forEach(link => {
        link.classList.remove('active');
    });
    
    // Obter o caminho da URL atual
    const currentPath = window.location.pathname;
    
    // Verificar qual link corresponde à URL e adicionar a classe 'active'
    links.forEach(link => {
        if (currentPath.includes(link.getAttribute('href'))) {
            link.classList.add('active');
        }
    });
}

// Executar a função quando a página carregar
window.onload = setActiveLink;

// Executar a função também em caso de navegação dentro da página (caso use navegação por JavaScript, SPA)
window.onpopstate = setActiveLink;