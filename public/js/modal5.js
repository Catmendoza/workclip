// Get the modal
var modalPublicProejct = document.getElementById("publicProjectModal");

// Get the button that opens the modal
var btnPublicProject = document.getElementById("btn-publicProject");
// Get the <span> element that closes the modal
var spanPublicProject = document.getElementsByClassName(
    "close-modal-publicProject"
)[0];

// When the user clicks the button, open the modal
btnPublicProject.onclick = function() {
    modalPublicProject.style.display = "block";
};

// When the user clicks on <span> (x), close the modal
spanPublicProject.onclick = function() {
    modalPublicProject.style.display = "none";
};

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modalPublicProject.style.display = "none";
    }
};
