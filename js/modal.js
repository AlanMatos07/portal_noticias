function inicializeModal(modalID) {
    if (localStorage.modalClose !== modalID) { // Verifica se o modal ainda não foi fechado
        const modal = document.getElementById(modalID);

        if (modal) { // Verifica se existe o modal. Caso não exista não ocorre nenhum erro
            modal.classList.add('show');

            // Adiciona o evento de fechar o modal
            modal.addEventListener('click', (e) => {
                if (e.target.id == modalID || e.target.className == 'close') {
                    modal.classList.remove('show');

                    // Salva a ação do usuário no Local Storage
                    localStorage.modalClose = modalID;
                }
            });
        }
    }   
}

// Se o scroll for maior que 100, ativa a função do modal
document.addEventListener('scroll', () => {
    if (window.pageYOffset > 100) {
        inicializeModal('promotion-modal');
    }
});
