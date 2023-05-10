<?php

class Pakaian{
         public $merk  ,
                $bahan ,
                $warna ,
                $harga ;


        public function  __construct($merk = "merk", $bahan= "bahan", $warna= "warna", $harga= 0 ){
                $this->merk  = $merk ; 
                $this->bahan = $bahan;
                $this->warna = $warna;
                $this->harga = $harga;
        }

        function __destruct(){
                echo "script sudah selesai";
        }

        public function getLabel() {
                return "<br> merk : $this->merk   <br>
                        bahan     : $this->bahan  <br>
                        warna     : $this->warna  <br>
                        harga     : $this->harga";
        } 

}

//baju
$produk1 = new Pakaian ("H&M", "sutra", "pink", "210000");

//celana
// $produk2 = new Pakaian ("levi's", "katun", "biru", "250000");


echo "Baju <br>  " . $produk1->getLabel();
// echo "celana: " . $produk2->getLabel();
echo "<br>";
echo "<br>";
echo "akhirnyaaaa";
echo "<br>";


