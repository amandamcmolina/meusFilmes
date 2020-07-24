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
    
    $("#teste").autocomplete({
        source: 'upGenres.php'
    });
});

// var esportes = [
//     "Natação",
//     "Futebol",
//     "Vôlei",
//     "Basquete"
//   ];
