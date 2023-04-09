<?php
class Balok
{
    public $panjang, $lebar, $tinggi;

    public function __construct($p, $l, $t)
    {
        $this->panjang = $p;
        $this->lebar = $l;
        $this->tinggi = $t;
    }

    public function getLuas()
    {
        $z = (($this->panjang * $this->lebar) + 2 * ($this->lebar * $this->tinggi) + 2 * ($this->panjang * $this->tinggi));
        $y = $this->panjang * $this->lebar;
        $x = 2 * ($this->lebar * $this->tinggi);
        $o = 2 * ($this->panjang * $this->tinggi);

    echo "1. Hitunglah volume dan luas sebuah balok dengan panjang $this->panjang lebar $this->lebar dan tinggi $this->tinggi? <br><br>
    Dik ! <br>:panjang = $this->panjang<br>
        :lebar = $this->lebar<br>
        :tinggi = $this->tinggi<br><BR>
    
    MENCARI LUAS BALOK <BR>
    =PL X 2(LT) X 2(PT) <br>
    =(($this->panjang * $this->lebar) + 2 *($this->lebar * $this->tinggi) + 2 *($this->panjang * $this->tinggi)) <br>
    =$y + $x + $o <br>
    = $z <br>
    jadi luas balok diatas yaitu = $z";

    echo "<br><br><br>";
    }

    public function getVolume(){
        $aa = $this->panjang * $this->lebar * $this->tinggi;

        echo"MENCARI VOLUME BALOK<br>
        = P X L X T <br>
        = $this->panjang * $this->lebar * $this->tinggi<br>
        =$aa<br>
        jadi volume balok adalah $aa";
        }
}

//contoh penggunaan
$objekBalok = new Balok(10, 7, 11);
$objekBalok->getLuas();
$objekBalok->getVolume();