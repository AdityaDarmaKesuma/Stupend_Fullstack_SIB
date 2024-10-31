<?php
function sapaan($nama = null, $waktu = null) {
    if (empty($nama)) {
        $nama = "Tamu";
    }

    if (empty($waktu)) {
        echo "Halo, $nama! Selamat datang!";
        return;
    }

    if (strtolower($waktu) === "pagi") {
        $salam = "Selamat pagi, $nama!";
        $pesanBebas = "<br/>Ayoooo pagi ini mari join zoom dan belajar lagi!";
    } elseif (strtolower($waktu) === "siang") {
        $salam = "Selamat siang, $nama!";
        $pesanBebas = "<br/>Semangat siang ini ada mentoring yaaa!";
    } elseif (strtolower($waktu) === "sore") {
        $salam = "Selamat sore, $nama!";
        $pesanBebas = "<br/>Semngat lagi lanjut kerja!";
    } elseif (strtolower($waktu) === "malam") {
        $salam = "Selamat malam, $nama!";
        $pesanBebas = "<br/>Okeee udah mulai ngantuk yaaa!";
    } else {
        $salam = "Halo, $nama!";
        $pesanBebas = "<br/>Sehat-sehat selalu yaaa amiiiin!";
    }

    echo "$salam $pesanBebas";
}

sapaan("", "pagi");

?>
