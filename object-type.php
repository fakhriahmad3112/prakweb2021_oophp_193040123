<?php 
 //jualan produk
 //komik
 //game

 class Produk {
    public $judul, 
           $penulis,
           $penerbit,
           $harga; 
    
    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0 ){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel() {
      return "$this->penulis, $this->penerbit";
    }
 }

class CetakInfoProduk {
  public function cetak( Produk $produk ){
    $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
    return $str;
  }
}



//  $produk1 = new Produk();
//  $produk1->judul = "Naruto";
//  var_dump($produk1);

//  $produk2 = new Produk();
//  $produk2->judul = "Uncharted";
//  $produk2->tambahProperty = "Naruto";
//  var_dump($produk2);

$produk1 = new Produk("Naruto", "Masachi kishimoto", "Shonen jump", 30000);
$produk2 = new Produk("Uncharted", "Neil Druckman", "Sony Computer", 250000);


echo "Komik : " . $produk2->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
echo "<br>";

$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);
