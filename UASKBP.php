<?php

class Buah {
    private $nama;
    private $rasa;

    // Constructor
    public function __construct($nama, $rasa) {
        $this->nama = $nama;
        $this->rasa = $rasa;
    }

    // Getter
    public function getNama() {
        return $this->nama;
    }

    public function getRasa() {
        return $this->rasa;
    }

    // Method
    public function tampilInfo() {
        echo "Nama Buah : " . $this->nama . "<br>";
        echo "Rasa Buah : " . $this->rasa . "<br>";
    }
}

// Inheritance
class Mangga extends Buah {
    private $jenis;

    public function __construct($nama, $rasa, $jenis) {
        parent::__construct($nama, $rasa);
        $this->jenis = $jenis;
    }

    public function tampilMangga() {
        $this->tampilInfo();
        echo "Jenis Mangga : " . $this->jenis . "<br><br>";
    }
}

class Anggur extends Buah {
    private $warna;

    public function __construct($nama, $rasa, $warna) {
        parent::__construct($nama, $rasa);
        $this->warna = $warna;
    }

    public function tampilAnggur() {
        $this->tampilInfo();
        echo "Warna Anggur : " . $this->warna . "<br><br>";
    }
}

// Membuat objek
$mangga = new Mangga("Mangga", "Manis", "Arumanis");
$anggur = new Anggur("Anggur", "Manis-Asam", "Ungu");

?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Buah</title>
</head>
<body>

    <h2>Data Buah</h2>

    <h3>Mangga</h3>
    <?php $mangga->tampilMangga(); ?>

    <h3>Anggur</h3>
    <?php $anggur->tampilAnggur(); ?>

</body>
</html>