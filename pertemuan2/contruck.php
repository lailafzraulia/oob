<?php
class kendaraan {
    public $mesin;
    public $jml_produk;

    function _construct()
    {
        echo "ini adalah method konstrak";
    }


//method
public function nyalakanMesin (){
    echo "mesin menyala menggunakan".$this->mesin;
}
}
//object
$politron = new kendaraan();
echo "<br>";
$politron->nyalakanMesin();

?>

    