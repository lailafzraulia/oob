<?php
    class motor 
    {
        // property
        public $kenalpot = 1;
        public $sepion = 2;
        public $velg = 'palang';
        public $ban = 'betlax'; 

        // method 
        public function Jalan()
        {
            echo "motor sudah berjalan yang memiliki kenalpot sebanyak ".$this->kenalpot.
            "<br>";


        }
    }

    // instansiasi 
    $rxking = new Motor();
    $rxking->Jalan();
    $rxking->Rem();
    $rxking->Mogok();

    $vario = new Motor();
    $vario->Jalan();