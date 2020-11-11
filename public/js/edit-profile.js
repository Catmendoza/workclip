var $uploadCrop;




$("#browseImg").on("click", function(ev) {
    $("#imgpreviewcrop").css("display", "block");
});

function readFile(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
            $(".modalhh").addClass("ready");
            $uploadCrop
                .croppie("bind", {
                    url: e.target.result
                })
                .then(function() {
                    console.log("jQuery bind complete");
                });
        };

        reader.readAsDataURL(input.files[0]);

        $('#exampleModal').modal('show');

    } else {

    }
}

$uploadCrop = $("#imgpreviewcrop").croppie({
    viewport: {
        width: 100,
        height: 100,
        type: "circle"
    },
    enableExif: true
});

$("#imageUpload").on("change", function() {
    readFile(this);
});
$(".vanilla-result").on("click", function(ev) {
    $uploadCrop
        .croppie("result", {
            type: "canvas",
            size: "viewport",
            format:'png'
        })
        .then(function(resp) {
            $(".avatar-preview").css("background-image", "url(" + resp + ")");
            $("#imgpreviewcrop").css("display", "none");
            console.log(resp)
            $("imageUpload").val(resp);
        });
});

/* Eliminar foto */

$("#DeleteImgBtn").on("click", function(ev) {
    $("#UserImgBox").css(
        "background-image",
        'url("/imagenes_usuarios/usuario.png")'
    );

    $("#imageUpload").html("/imagenes_usuarios/usuario.png");

});


/*Botones melos*/

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



