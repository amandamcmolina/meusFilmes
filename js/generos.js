//AUTOCOMPLETE  - JSON + MYSQL + PHP + jquery

$(function () {
    $("#g_autocomplete").autocomplete({
        source: "./php/upGenres.php",
        minLength: 2
    });
});


var tagContainerGenero = document.querySelector('.tag-container-genero');
var inputGenero = document.querySelector('.tag-container-genero input');
var tagsGenero = [];

function createTagGenero(label) {
    var div = document.createElement('div');
    div.setAttribute('class', 'tagGenero');
    var span = document.createElement('span');
    span.innerHTML = label;
    var closeBtn = document.createElement('i');
    closeBtn.setAttribute('class', 'material-icons');
    closeBtn.setAttribute('data-itemGenero', label);
    closeBtn.innerHTML = 'close';

    div.appendChild(span);
    div.appendChild(closeBtn);
    return div;
}

function resetGenero() {
    document.querySelectorAll('.tagGenero').forEach(function (tagGenero) {
        tagGenero.parentElement.removeChild(tagGenero);
    });
};

function addTagsGenero() {
    resetGenero();
    tagsGenero.slice().reverse().forEach(function (tagGenero) {
        var inputGenero = createTagGenero(tagGenero);
        tagContainerGenero.prepend(inputGenero);
    });
}

var upGenero = function (e) {
    if (e.key == 'Enter') {
        tagsGenero.push(inputGenero.value);
        addTagsGenero();
        inputGenero.value = '';
    }
};

inputGenero.addEventListener("keyup", upGenero);


document.addEventListener('click', function (e) {
    console.log(e.target.tagName);
    if (e.target.tagName == 'I') {
        const tagLabel = e.target.getAttribute('data-itemGenero');
        const index = tagsGenero.indexOf(tagLabel);
        tagsGenero = [...tagsGenero.slice(0, index), ...tagsGenero.slice(index + 1)];
        addTagsGenero();
    }
})


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





