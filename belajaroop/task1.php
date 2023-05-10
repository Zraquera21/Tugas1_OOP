<?php
class Mobil{
    public $merk        = "merk",
           $nama        = "nama",
           $warna       = "warna",
           $kecepatan   = "0",
           $getkondisi  = "kondisi";
        
    public function inputMobil() {
        return "$this->merk, $this->nama, $this->warna";
    }

    public function getCetak() {
        echo "kondisi   " .$this->getkondisi;
        echo "<br>";
        echo "merk:     " .$this->merk;
        echo "<br>";
        echo "nama:     " .$this->nama;
        echo "<br>";
        echo "warna:    " .$this->warna;
        echo "<br>";
        echo "kecepatan:" .$this->kecepatan;
        echo "<br> ===================== <br>";
    }
    public function getKondisi($getKondisi){
        $this->getkondisi=$getkondisi;
    }
}
$mobilA             = new Mobil();
$mobilA->getkondisi = "maju";
$mobilA->merk       = "Toyota";
$mobilA->nama       = "Fortuner";
$mobilA->warna      = "hitam";
$mobilA->kecepatan  = "250";
$mobilA->getCetak();

$mobilB             = new Mobil();
$mobilB->getkondisi = "mundur";
$mobilB->merk       = "honda";
$mobilB->nama       = "brio";
$mobilB->warna      = "hijau";
$mobilB->kecepatan  = "100";
$mobilB ->getCetak();