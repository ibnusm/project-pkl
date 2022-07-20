<?php
header('Location: ../../403.html')
/*
$errorMSG = "";

// NAME
if (empty($_POST["name"])) {
    $errorMSG .= "Nama Harus Di isi";
} else {
    $name = $_POST["name"];
}

// EMAIL
if (empty($_POST["email"])) {
    $errorMSG .= "Email Harus Di isi";
} else {
    $email = $_POST["email"];
}

// ALAMAT
if (empty($_POST["alamat"])) {
    $errorMSG .= "Alamat Harus Di isi";
} else {
    $email = $_POST["alamat"];
}


// MESSAGE
if (empty($_POST["message"])) {
    $errorMSG .= "Ucapan Harus Di isi";
} else {
    $message = $_POST["message"];
}


$EmailTo = "nulz404@proton.me";
$Subject = "Pesan Baru";

// Menyiapkan isi email
$Body = "";
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Alamat: ";
$Body .= $alamat;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $message;
$Body .= "\n";

// Mengirim Email
$success = mail($EmailTo, $Subject, $Body, "Dari:".$email);

// redirect to success page
if ($success && $errorMSG == ""){
   echo "Berhasil";
}else{
    if($errorMSG == ""){
        echo "Maaf terjadi kesalahan :(";
    } else {
        echo $errorMSG;
    }
}
*/
?>