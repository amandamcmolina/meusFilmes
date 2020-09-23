//MODAL - MOVIE
var modalMovieEdit = document.getElementById("myModalMovie");
var btnMovieEdit = document.getElementsByClassName("btn-edit")[0];
var spanMovieEdit = document.getElementsByClassName("closeMovie")[0];

// When the user clicks on the button, open the modal
btnMovieEdit.onclick = function () {
    modalMovieEdit.style.display = "block";
}

// <span> (x)
spanMovieEdit.onclick = function () {
    modalMovieEdit.style.display = "none";
}

var closeByClickEdit = function (event) {
    if (event.target == modalMovieEdit) {
        modalMovieEdit.style.display = "none";
    }
}

//ESC
var closeByEscEdit = function (event) {
    if (event.keyCode == 27) {
        modalMovieEdit.style.display = "none";
    }
};


window.addEventListener("keydown", closeByEscEdit);
window.addEventListener("click", closeByClickEdit);











