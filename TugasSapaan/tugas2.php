<?php
function sapaan($nama, $waktu) {
    switch(strtolower($waktu)) {
        case "pagi":
            $salam = "Selamat pagi, $nama!";
            $pesanBebas = "<br/>Ayoooo pagi ini mari join zoom dan belajar lagi!";
            break;
        case "siang":
            $salam = "Selamat siang, $nama!";
            $pesanBebas = "<br/>Semangat siang ini ada mentoring yaaa!";
            break;
        case "sore":
            $salam = "Selamat sore, $nama!";
            $pesanBebas = "<br/>Semngat lagi lanjut kerja!";
            break;
        case "malam":
            $salam = "Selamat malam, $nama!";
            $pesanBebas = "<br/>Okeee udah mulai ngantuk yaaa!";
            break;
        default:
            $salam = "Halo, $nama!";
            $pesanBebas = "<br/>Haiiiiii sehat-sehat selalu yaaa amiiiin!";
    }
    echo "$salam $pesanBebas";
}

// Contoh pemanggilan fungsi
sapaan("Aditya Darma Kesuma", "pagi");
?>
