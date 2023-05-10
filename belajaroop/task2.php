<?php

class Pakaian{
         public $merk     ,
                $nama     ,
                $warna    ,
                $kecepatan;


        public function  __construct($merk = "merk", $nama= "nama", $warna= "warna", $harga= 0 ){
                $this->merk  = $merk; 
                $this->nama  = $nama;
                $this->warna = $warna;
                $this->harga = $harga;
        }

        public function getLabel() {                            
                return "merk  : $this->merk <br>
                        nama  : $this->nama <br>
                        harga : $this->harga";
        }

}

//baju
$produk1 = new Pakaian ("Toyota", "Fortuner", "hitam", "250");

//celana
$produk2 = new Pakaian ("Honda", "Brio", "biru", "100");


echo "Mobil 1 <br> " . $produk1->getLabel();
echo "<br>";
echo "<br>";
echo "Mobil 2 <br> " . $produk2->getLabel();

