  // Get the modal
  var modalProject = document.getElementById("proyect-Modal");

  // Get the button that opens the modal
  var btn1 = document.getElementById("btn1");
  var btn2 = document.getElementById("btn2");
  var btn3 = document.getElementById("btn3");


  // Get the <span> element that closes the modal
  var span = document.getElementsByClassName("close")[0];

  // When the user clicks the button, open the modal 
  btn1.onclick = function () {
      modalProject.style.display = "block";
  }

  btn2.onclick = function () {
      modalProject.style.display = "block";
  }

  btn3.onclick = function () {
      modalProject.style.display = "block";
  }


  // When the user clicks on <span> (x), close the modal
  span.onclick = function () {
      modalProject.style.display = "none";
  }

  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function (event) {
      if (event.target == modal) {
          modalProject.style.display = "none";
      }
  }
