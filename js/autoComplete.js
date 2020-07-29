// //SELECT GÊNEROS
// let generos = ["Ação", "Animação", "Aventura", "Comédia", "Comédia Romântica", "Musical",   "Drama", "Ficção Cietífica", "Romance", "Suspense", "Terror"];
// var select = document.getElementById("selecao-generos"); 

//     for(var i = 0; i < generos.length; i++) {
//         var genero = generos[i];
//         var generoOption = document.createElement("option"); 
//         generoOption.textContent = genero;   
//         generoOption.value = genero; 
//         select.appendChild(generoOption); 
//     }



//AUTOCOMPLETE  - JSON + MYSQL + PHP + jquery

$(function () {
    $("#g_autocomplete").autocomplete({
        source: "upGenres.php",
        minLength: 2
    });
});



/* <div class="container">
            <div class="tag-container">
                <div class="tag">
                    <span>Javascript</span>
                    <span class="material-icons">close</span>
                </div>
                
                <input type="text">
            </div>
        </div> */


// TAGS INPUT
// var tagContainer = document.querySelector('.tag-container');

// var input = document.querySelector('.tag-container input');

// function createTag(label) {
//     var div = document.createElement('div');
//     div.setAttribute('class', 'tag');
//     var span = document.createElement('span');
//     span.innerHTML = label;
//     var closeBtn = document.createElement('span');
//     closeBtn.setAttribute('class', 'material-icons');
//     closeBtn.innerHTML = 'close';

//     div.appendChild(span);
//     div.appendChild(closeBtn);




//     return div;


// }

// var upActors = function (e) {
//     if (e.key == 'Enter') {
//         var tag = createTag(input.value);
//         tagContainer.prepend(tag);
//         input.value = '';
//     }
// };

// input.addEventListener("keyup", upActors);


