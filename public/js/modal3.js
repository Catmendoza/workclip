// Get the modal
var modalPublic = document.getElementById("publicModal");

// Get the button that opens the modal
var btnPublic = document.getElementById("btn-public");
// Get the <span> element that closes the modal
var spanPublic = document.getElementsByClassName("close-modal-public")[0];

// When the user clicks the button, open the modal
btnPublic.onclick = function() {
    modalPublic.style.display = "block";
};

// When the user clicks on <span> (x), close the modal
spanPublic.onclick = function() {
    modalPublic.style.display = "none";
};

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modalPublic.style.display = "none";
    }
};
