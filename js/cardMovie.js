// // PEGAR INDORMAÇÕES DO JSON E MANDAR PARA O HTML VIA PHP
// // COMO FAZER O decode pelo javascript

function readTextFile(file, callback) {
    var rawFile = new XMLHttpRequest();
    rawFile.overrideMimeType("application/json");
    rawFile.open("post", file, true);
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

    var ano = document.getElementsByClassName('year')[0];
        ano.textContent = dados.ano;
        
    var descricao = document.getElementsByClassName('movieDescription')[0];
        descricao.textContent = dados.descricao;


//     var atores = document.getElementsByClassName('principalsActors')[0];
//     atores.textContent = "Patrick Swayse / Jennifer Grey";  


    var diretor = document.getElementsByClassName('director')[0];
        diretor.textContent = dados.diretor;  


    var comentarios = document.getElementsByClassName('coments')[0];
        comentarios.textContent = dados.comentario;  


    var nota = document.getElementsByClassName('grade')[0];
        nota.textContent = dados.nota; 

    var genre = document.getElementsByClassName('genre')[0];
    genre.textContent = dados.genero;

    // var img = document.getElementsByClassName('img-capa2')[0];
    // img.src = dados.capa;
    
    // var capa = document.getElementById('img-capa')[0];
    // var img = document.createElement("img");
    // img.src = dados.capa;
    // capa.appendChild(img); 
    

    // var imagem = localStorage.getItem('capa');
    // document.getElementsByClassName('img-capa').innerHTML= "<img src="+imagem+" />";

 });

 

 


