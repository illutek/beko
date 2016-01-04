/**
 * Created by Stefan on 17/12/2015.
 */
$(document).ready(function () {
    $('.copy-conditions').click(function () {
        openModal();
    });

    $('.close-button').click(function () {
        closeModal();
    });

    $(window).keypress(function (event) {
        if (event.which == 27) {
            closeModal();
        }
    });

    $('.modal-container').click(function (event) {
        if (this == event.target) {
            closeModal();
        }
    });
});

function openModal() {
    $('html').addClass('modal-open');
}

function closeModal() {
    $('html').removeClass('modal-open');
}
