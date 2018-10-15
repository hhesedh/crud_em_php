function removeLinha() {
    $(".button_delete").click(function(e) {
        e.preventDefault();
        var button = $(this);
        var linha = button.parent().parent();
        linha.fadeOut(1000);
        setTimeout(function() {
            button.submit();
        }, 1000);
    });
}

function produzMascaras() {
	$("#cpf").mask("000.000.000-00");
	$("#phone").mask("(00) 0000-0000");
}