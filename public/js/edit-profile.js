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
    } else {
        swal("Sorry - you're browser doesn't support the FileReader API");
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
            size: "viewport"
        })
        .then(function(resp) {
            $(".avatar-preview").css("background-image", "url(" + resp + ")");
            $("#imgpreviewcrop").css("display", "none");
        });
});

/* Eliminar foto */

$("#DeleteImgBtn").on("click", function(ev) {
    $("#UserImgBox").css(
        "background-image",
        'url("/imagenes_usuarios/usuario.png")'
    );
    var UploadDeleteImg = document.getElementById("imageUpload");
    UploadDeleteImg.value = "/imagenes_usuarios/usuario.png";
});