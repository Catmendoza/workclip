// Get the modal
var modalPublicJob = document.getElementById("publicJobModal");

// Get the button that opens the modal
var btnPublicJob = document.getElementById("btn-publicJob");
// Get the <span> element that closes the modal
var spanPublicJob = document.getElementsByClassName("close-modal-publicJob")[0];

// When the user clicks the button, open the modal
btnPublicJob.onclick = function() {
    modalPublicJob.style.display = "block";
};

// When the user clicks on <span> (x), close the modal
spanPublicJob.onclick = function() {
    modalPublicJob.style.display = "none";
};

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modalPublicJob.style.display = "none";
    }
};
