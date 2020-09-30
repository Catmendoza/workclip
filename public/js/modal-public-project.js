  // Get the modal
  var modalProject = document.getElementById("publicProjectModal");

  // Get the button that opens the modal
  var btnPublicProject = document.getElementById("btn-publicProject");

  // Get the <span> element that closes the modal
  var closebtnpp = document.getElementsByClassName("close-modal-pp")[0];

  // When the user clicks the button, open the modal 
  btnPublicProject.onclick = function () {
      modalProject.style.display = "block";
  }

 
  // When the user clicks on <span> (x), close the modal
  closebtnpp.onclick = function () {
      modalProject.style.display = "none";
  }

  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function (event) {
      if (event.target == modal) {
          modalProject.style.display = "none";
      }
  }
