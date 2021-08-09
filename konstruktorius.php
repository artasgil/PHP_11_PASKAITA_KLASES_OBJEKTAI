<?php  

//Funkcija(metodas) kuri pasileidzia objekto sukurimo metu

    class Automobilis {

        //Apsirasom kintamuosius - Modelis, marke, gamybos metai

        //Public reiskia Access modifier (prieinamumas)

        //Public - reiskia, kai bus sukurtas objektas, tas kintamasis arba metodas bus pasiekiamas uz
        //objekto klases ribu
        //protected - kintamasis arba metodas gali buti naudojamas tik pacioje klaseje ir jos vaiknese klasese
        //Private - kintamasis arba metodas gali buti naudojamas tik pacioe klaseje
        protected $duruSkaicius;
        private $spalva;
        public $modelis;
        public $marke;
        public $gamybosMetai;

        //Metodai(vidines funkcijos)
        function __construct($a, $b , $c) {
            $this -> modelis = $a;
            $this -> marke = $b;
            $this -> gamybosMetai = $c;
            $this -> spalva = "Raudona";
            $this -> duruSkaicius = "Penki";
        }

    }

    //Objektas
    $automobilis = new Automobilis("VW", "Passat", "2010");
    $automobilis1 = new Automobilis("BMW", "320", 2003);

    //Objekta galime issivesti su var_dump komanda
    var_dump($automobilis);
    echo "<br>";
    var_dump($automobilis1);
    echo "<br>";


    $automobilius_masyvas = array($automobilis, $automobilis1);

    var_dump($automobilius_masyvas);


    // echo "<br>";
    // $automobilis->nustatome_kintamuosius("VW", "Passat", "2010");






?>