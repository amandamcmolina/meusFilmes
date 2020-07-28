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




// $(function () {
//     $("#teste").autocomplete({
//         source: ["Amanda", 'Larissa', "Juscely", "Ramon", "Valdeci", "Artur"],
//         minLength: 2
//     });
// });

