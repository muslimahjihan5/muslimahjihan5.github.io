$(document).ready(function(){
    $("#inputEmail").change(function(){
        var email = $("#inputEmail").val();

        if (email == "jihanm5403@gmail.com"){
            $("#inputNama").val("Jihan Muslimah A");
            $("#inputIpk").val("3.4");
            $("#tombolDaftar").prop('disabled', false);
        } else if(email == "mjey1310@gmail.com"){
            $("#inputNama").val("Jey Mandali");
            $("#inputIpk").val("2.9");
            $("#tombolDaftar").prop('disabled', true);
        }else{
            $('#warningModal').modal('show');
            $("#tombolDaftar").prop('disabled', true);
        }
    });

});