//LOGIN
var modalLogin = document.getElementById("myModalLogin");

var btnLogin = document.getElementById("myBtnLogin");


var spanLogin = document.getElementsByClassName("closeLogin")[0];

// When the user clicks on the button, open the modal
btnLogin.onclick = function () {
    modalLogin.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
spanLogin.onclick = function () {
    modalLogin.style.display = "none";
}

var closeByEscLogin= function evento( event ) {
    if ( event.keyCode == 27 ) {
        modalLogin.style.display = "none";
    }
};

window.addEventListener("keydown", closeByEscLogin);

// When the user clicks anywhere outside of the modal, close it

var closeByClickLogin = function evento(event) {
    if (event.target == modalLogin) {
      modalLogin.style.display = "none";
    }
  }

window.addEventListener("click", closeByClickLogin);

