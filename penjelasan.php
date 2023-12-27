<?php
class produk{
    protected $judul,
                $pengarang,
                $harga;

    public function __construct($judul,$pengarang,$harga){
        $this->judul=$judul;
        $this->pengarang=$pengarang;
        $this->harga=$harga;
    }
    public function setHarga($harga){
        return  $this->judul=$judul;
    }
    public function getJudul(){
        return $this->judul;
    }
    protected function getLabel(){
        return "$this->judul,$this->pengarang,$this->harga";
    }

}
class komik extends produk{
    public function getLabel(){
         $str=parent::getLabel()."halaman-1000";
         return $str;
    }
}
$produk1=new komik("naruto","ade syifa",50000);
echo $produk1->getLabel();
echo "<br>";
$produk1->setJudul("one piece");
echo $produk1->getJudul();