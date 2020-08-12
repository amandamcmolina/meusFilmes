//MODAL - MOVIE
var modalMovie = document.getElementById("myModalMovie");
var btnMovie = document.getElementsByClassName("btn-addFilme")[0];
var spanMovie = document.getElementsByClassName("closeMovie")[0];

// When the user clicks on the button, open the modal
btnMovie.onclick = function () {
    modalMovie.style.display = "block";
}

// <span> (x)
spanMovie.onclick = function () {
    modalMovie.style.display = "none";
}

var closeByClick3 = function (event) {
    if (event.target == modalMovie) {
        modalMovie.style.display = "none";
    }
}

//ESC
var closeByEsc3 = function (event) {
    if (event.keyCode == 27) {
        modalMovie.style.display = "none";
    }
};


window.addEventListener("keydown", closeByEsc3);
window.addEventListener("click", closeByClick3);














