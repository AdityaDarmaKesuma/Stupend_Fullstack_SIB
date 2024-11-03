<?php 

class Buku {
    public $judul;
    public $penulis;

    public function __construct($judul, $penulis) {
        $this->judul = $judul;
        $this->penulis = $penulis;
    }

    public function info_buku() {
        return "Judul: " . $this->judul . ", Penulis: " . $this->penulis;
    }
}

class BukuDigital extends Buku {
    public $ukuran_file;

    public function __construct($judul, $penulis, $ukuran_file) {
        parent::__construct($judul, $penulis);
        $this->ukuran_file = $ukuran_file;
    }

    public function info_buku() {
        return "<br/>Judul: " . $this->judul . ", Penulis: " . $this->penulis . ", Ukuran File: " . $this->ukuran_file . " MB";
    }
}

$buku1 = new Buku("Network Engineer", "Aditya Darma");
$buku_digital1 = new BukuDigital("Network Engineer", "Aditya Darma", 2.5);

# Menampilkan informasi buku
echo $buku1->info_buku() . "\n";
echo $buku_digital1->info_buku() . "\n";   

?>
