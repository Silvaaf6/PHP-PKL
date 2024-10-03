<?php 
//buat class
class manusia {
    //buat property / atribut
    public $nama = "silva";

    //buat method / function
    public function makan (){
        echo $this->nama."<br>";
        echo "surya suka makan ayam";
    }
    public function minum (){
        echo "surya suka minum powerf";
    }
}

//buat object
$cetak = new manusia();

echo $cetak->makan();
echo "<br>";
echo $cetak->minum();
echo "<br>";
echo $cetak->nama;

?>