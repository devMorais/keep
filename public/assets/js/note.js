const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
const baseUrl = document.querySelector('meta[name="base_url"]').getAttribute('content');

function setAppearance(element) {
    const color = element.data('color');
    const image = element.data('image');
    const type = element.data('type');
    const id = element.data('id');
    const $note = element.closest('.single_note'); // Armazena o elemento da nota
    const $modalContent = $(`.custom_modal_area[data-modal="modal_${id}"] .custom_modal_content`); // Armazena o elemento de conteúdo do modal

    if (type === 'color') {
        $note.css('background', color);
        $modalContent.css('background', color);
    } else {
        const imageUrl = `${baseUrl}/${image}`;
        // Aplica a imagem de fundo e garante que as propriedades de dimensionamento sejam aplicadas
        $note.css({
            'background': `url(${imageUrl})`,
            'background-size': 'cover',  // Garante que a imagem cubra todo o espaço
            'background-position': 'center',  // Garante que a imagem fique centralizada
            'background-repeat': 'no-repeat'  // Evita a repetição da imagem
        });

        $modalContent.css({
            'background': `url(${imageUrl})`,
            'background-size': 'cover',
            'background-position': 'center',
            'background-repeat': 'no-repeat'
        });
    }

    $.ajax({
        method: 'POST',
        url: `${baseUrl}/notes/appearance`,
        data: { _token: csrfToken, color, type, image, id },
        success: (data) => console.log("Aparência definida com sucesso:", data),
        error: (xhr, status, error) => console.error("Erro ao definir aparência:", error)
    });
}

$(document).ready(() => {
    $('.appearance').on('click', function () {
        setAppearance($(this));
    });
});
