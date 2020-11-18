/*Botones melos*/

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#imagePreview').css('background-image', 'url(' + e.target.result + ')');
            $('#imagePreview').hide();
            $('#imagePreview').fadeIn(650);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
$("#imageUpload").change(function() {
    readURL(this);
});



$("#saveemail").on("click", function(ev) {
   var aux = $("#email").val();

   $("#email2").text(aux);

   
});


$("#saveprograma").on("click", function(ev) {
    var aux = $("#programa").val();
 
    $("#programa2").text(aux);
 
    
 });

 $("#savecontacto").on("click", function(ev) {
    var aux = $("#contacto").val();
 
    $("#contacto2").text(aux);
 
    
 });



