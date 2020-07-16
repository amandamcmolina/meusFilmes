//LOGIN
var modal = document.getElementById("myModal");

var btn = document.getElementById("myBtn");


var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function () {
    modal.style.display = "block";
}

// <span> (x)
span.onclick = function () {
    modal.style.display = "none";
}

var closeByClick = function (event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

//ESC
var closeByEsc = function (event) {
    if (event.keyCode == 27) {
        modal.style.display = "none";
    }
};


window.addEventListener("keydown", closeByEsc);
window.addEventListener("click", closeByClick);











