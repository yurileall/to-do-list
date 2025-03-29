$(document).ready(function () {
    console.log("JS de logout carregado com jQuery!");

    var $logoutButton = $("#logout_button");
    var $logoutForm = $("#logout-form");

    if ($logoutButton.length && $logoutForm.length) {
        console.log("Botão de logout encontrado!");

        $logoutButton.on("click", function (e) {
            e.preventDefault();
            console.log("Botão Sair clicado!");
            $logoutForm.submit();
        });
    } else {
        console.log("Elemento do botão ou formulário não encontrado!");
    }
});