$(document).ready(function(){
//$(document).on('change','.js-activar-usuario', function (e){
    $('.js-activar').on('click', function(){
    var token = $(this).data("token");
    //var nombre = $(this).data("text");

    $.ajax({
        url: baseUrl+"usuarios/activarusuario?token="+token,
        success: function(r){
            toastr.success('Se activo correctamente al usuario');
        },
        error: function () {
            toastr.error('Ocurrio un error al activar al usuario');
        }
    })
},'.js-activar');

//$(document).on('change','.js-bloquear-usuario', function (e){
    $('.js-bloquear').on('click', function(){
    var token = $(this).data("token");
    //var nombre = $(this).data("text");

    $.ajax({
        url: baseUrl+"usuarios/bloquearusuario?token="+token,
        success:function(r){
            toastr.success('Se inavilito correctamente al usuario');
        },
        error: function () {
            toastr.error('Ocurrio un error al inavilidar al usuario');
        }
    })

},'.js-bloquear');
});

