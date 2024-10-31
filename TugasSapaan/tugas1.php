<?php
function sapaan($nama, $waktu) {

    switch(strtolower($waktu)) {
        case "pagi":
            $salam = "Selamat Pagi";
            break;
        case "siang":
            $salam = "Selamat Siang";
            break;
        case "sore":
            $salam = "Selamat Sore";
            break;
        case "malam":
            $salam = "Selamat Malam";
            break;
        default:
            $salam = "Halo";
    }
    // Tampilkan sapaan
    echo "$salam, $nama!";
    echo "<br> Mari kita belajar php lagi";
}

// Contoh pemanggilan fungsi
sapaan("Aditya Darma Kesuma", "pagi");
?>
