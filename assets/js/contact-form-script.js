$("#contactForm").validator().on("submit", function (event) {
    /*if (event.isDefaultPrevented()) {
        formError();
        submitMSG(false, "Isi Form Dengan Benar");
    } else {
        event.preventDefault();
        submitForm();
    }*/
    alert('Comming Soon')
    alert('Ini Hanya Contoh')
    alert('Tidak Diisi Tidak Apa Apa')
});

/* Masih error
function submitForm(){
    var name = $("#name").val();
    var email = $("#email").val();
    var alamat = $("#alamat").val();
    var message = $("#message").val();


    $.ajax({
        type: "POST",
        url: "src/php/proses.php",
        data: "name=" + name + "&email=" + email + "&alamat" + alamat + "&message=" + message,
        success : function(text){
            if (text == "success"){
                formSuccess();
            } else {
                formError();
                submitMSG(false,text);
            }
        }
    });
}

function formSuccess(){
    $("#contactForm")[0].reset();
    submitMSG(true, "Berhasil Terkirim")
}

function formError(){
    $("#contactForm").removeClass().addClass('shake animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
        $(this).removeClass();
    });
}

function submitMSG(valid, msg){
    if(valid){
        var msgClasses = "h3 text-center tada animated text-success";
    } else {
        var msgClasses = "h3 text-center text-danger";
    }
    $("#msgSubmit").removeClass().addClass(msgClasses).text(msg);
}*/