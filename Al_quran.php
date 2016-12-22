 <?php
 class Al_quran
{
    var $beli;
    var $jual;

    function __construct($b,$j) {
    $this->beli =$b;
    $this->jual =$j;
    }
    function pembagian()
    {
        return $this->beli * $this->jual;
    }
}

$mau_beli = new Al_quran(20,5);
$mau_jual = clone $mau_beli;

echo "Hasil sebelum properti beli: <br/><br/>";
echo "Harga beli dari <i><b>AL-QUR'AN</i></b> = ".$mau_beli->pembagian()."<br/>";
echo "Harga jual dari <i><b>AL-QUR'AN</i></b> = ".$mau_jual->pembagian()."<br/>
<br/>";

$mau_jual->beli=10;

echo "Hasil setelah properti beli pada mau_jual diganti 10 : <br/><br/>";
echo "Harga beli dari <i><b>AL-QUR'AN</i></b> = ".$mau_beli->pembagian()."<br/>";
echo "Harga jual dari <i><b>AL-QUR'AN</i></b> = ".$mau_jual->pembagian()."<br/>";

// NOTE : Hasil yang diperoleh dari mau_beli dan mau_jual setelah mengganti
//properti terlihat berbeda. Hal ini karena mau_jual merupakan object baru hasil
//dari cloning mau_beli. Dengan begitu mau_jual mempunyai penyimpanan untuk
//menyimpan properti dan method nya.
