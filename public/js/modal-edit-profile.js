  // Get the modal
  var modaleditprofile = document.getElementById("EditProfileModal");

  // Get the button that opens the modal
  var btnOpenEdit = document.getElementById("btnEditModal");

  // Get the <span> element that closes the modal
  var closeEditProfile = document.getElementById("cancelBtnProfile");

  // When the user clicks the button, open the modal 
  btnOpenEdit.onclick = function() {
      modaleditprofile.style.display = "block";
  }


  // When the user clicks on <span> (x), close the modal
  closeEditProfile.onclick = function() {
      modaleditprofile.style.display = "none";
  }

  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
      if (event.target == modal) {
          modaleditprofile.style.display = "none";
      }
  }