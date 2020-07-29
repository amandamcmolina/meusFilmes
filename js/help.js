//CANCELAR O ENTER NOS INPUTS

$("input, select", "form") // busca input e select no form
    .keypress(function (e) { // evento ao presionar uma tecla válida keypress

        var k = e.which || e.keyCode; // pega o código do evento

        if (k == 13) { // se for ENTER
            e.preventDefault(); // cancela o submit
            $(this)
                .closest('tr') // seleciona a linha atual
                .next() // seleciona a próxima linha
                .find('input, select') // busca input ou select
                .first() // seleciona o primeiro que encontrar
                .focus(); // foca no elemento
        }

    });