// // PEGAR INDORMAÇÕES DO JSON E MANDAR PARA O HTML VIA PHP
// // COMO FAZER O decode pelo javascript

function readTextFile(file, callback) {
    var rawFile = new XMLHttpRequest();
    rawFile.overrideMimeType("application/json");
    rawFile.open("POST", file, true);
    rawFile.onreadystatechange = function() {
        if (rawFile.readyState === 4 && rawFile.status == "200") {
            callback(rawFile.responseText);
        }
    }
    rawFile.send(null);
}

    readTextFile("movies.json", function(text){
        var dados = JSON.parse(text);

    var titulo = document.getElementsByClassName('tituloFinal')[0];
        titulo.textContent = dados.titulo;  

        var teste = document.getElementsByClassName('teste')[0];
        titulo.textContent = dados.titulo;  


    

//     var ano = document.getElementsByClassName('year')[0];
//         ano.textContent = "1987";  
        

//     var descricao = document.getElementsByClassName('movieDescription')[0];
//     descricao.textContent = "O filme é sobre as férias de verão de Baby, uma jovem mulher que encontra seu verdadeiro amor em um dançarino. No meio de muita dança e amor, eles precisam passar por obstáculos sociais.";  


//     var atores = document.getElementsByClassName('principalsActors')[0];
//     atores.textContent = "Patrick Swayse / Jennifer Grey";  


//     var diretor = document.getElementsByClassName('director')[0];
//     diretor.textContent = "Direção por: Emile Ardolino";  


//     var comentarios = document.getElementsByClassName('coments')[0];
//     comentarios.textContent = "Top 10 dos meus filmes preferidos";  


//     var nota = document.getElementsByClassName('grade')[0];
//     nota.textContent = "10"; 

 });





function novaDirecao() {
    window.location.href = "index.html";
    console.log("funciona");
}


