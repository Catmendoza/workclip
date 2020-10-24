// Get the modal
var modalPublicProject2 = document.getElementById("proyect-Modal");

// Get the button that opens the modal
var btnPublicProject2 = document.getElementById("btn1");
// Get the <span> element that closes the modal
var spanPublicProject2 = document.getElementsByClassName(
    "close-modal-public"
)[0];

// When the user clicks the button, open the modal
btnPublicProject2.onclick = function() {
    modalPublicProject2.style.display = "block";
};

// When the user clicks on <span> (x), close the modal
spanPublicProject2.onclick = function() {
    modalPublicProject2.style.display = "none";
};

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modalPublicProject2.style.display = "none";
    }
};
