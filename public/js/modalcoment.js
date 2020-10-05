 // Get the modal
var modalcomentarios = document.getElementById("modalcomentarios");

// Get the button that opens the modal
var modal_abrir = document.getElementById("modal-abrir");

// Get the <span> element that closes the modal
var closebtnpp2 = document.getElementsByClassName("close-modal-pp2")[0];

// When the user clicks the button, open the modal 
modal_abrir.onclick = function () {
    modalcomentarios.style.display = "block";
}


// When the user clicks on <span> (x), close the modal
closebtnpp2.onclick = function () {
    modalcomentarios.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
    if (event.target == modalcomentarios) {
        modalcomentarios.style.display = "none";
    }
}
