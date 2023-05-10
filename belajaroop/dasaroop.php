<?php

class Pakaian{
         public $merk      = "Matahari",
                $bahan     = "denim",
                $warna     = "merah",
                $harga     = 100000;

        public function getLabel() {
                return "$this->merk, $this->bahan, $this->harga";
        }

}

//baju
$produk1 = new Pakaian ();
$produk1 ->merk     = " HnM ";
$produk1 ->bahan    = " sutra ";
$produk1 ->warna    = " biru ";
$produk1 ->harga    =  210000 ;

//celana
$produk2 = new Pakaian ();
$produk1 ->merk     = " levi's ";
$produk1 ->bahan    = " katun ";
$produk1 ->warna    = " sutra ";
$produk1 ->harga    =  250000 ;

echo "baju: " . $produk1->getLabel();
echo "<br>";
echo "celana: " . $produk2->getLabel();

