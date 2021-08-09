<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php   
    // Klases ir objektai
    
    //Kad php sukutume objekta, visu pirma objektas turi tureti sablona
    //Klase - yra objekto sablonas, pagal kurio duomenis yra kuriamas objektas
    //Objektas - tai yra tam tikras kintamuju ir metodu(vidiniu objekto funkciju rinkinys)

    //Zmogus; arba automobilis

    //Automobilio objektas
    //Klases pavadinimas visada yra is didziosios raides, tai yra priimta.

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
        function nustatome_kintamuosius($a, $b , $c) {
            $this -> modelis = $a;
            $this -> marke = $b;
            $this -> gamybosMetai = $c;
            $this -> spalva = "Raudona";
            $this -> duruSkaicius = "Penki";
        }

    }
    
    // $automobilis - yra objektas. Objekto sukurimas zemiau.
    $automobilis = new Automobilis();

    //Objekta galime issivesti su var_dump komanda
    var_dump($automobilis);
    echo "<br>";

    $automobilis->nustatome_kintamuosius("VW", "Passat", "2010");

    //Kaip issivesti tik automobilio modeli?
    echo $automobilis->marke;
    echo "<br>";
    echo $automobilis->modelis;
    echo "<br>";
    echo $automobilis->gamybosMetai;
    echo "<br>";
    var_dump($automobilis);
    echo "<br>";
    // echo $automobilis->spalva;
    // echo "<br>";                      //Private taip negalima isvesti





    //Objekto kintamaji galime prisiskriti naujam kintamajam
    $naujasKintamasis = $automobilis->modelis;
    echo $naujasKintamasis;
    echo "<br>";


    $automobilis->modelis="BMW";
    echo $automobilis->modelis;
    echo "<br>";
    var_dump($automobilis);
    
    ?>



</body>
</html>