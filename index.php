<!--
è definita una classe ‘Movie’ :
 => all'interno della classe sono dichiarate delle variabili d'istanza
 => all'interno della classe è definito un costruttore
 => all'interno della classe è definito almeno un metodo
vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
-->

<?php
    class Movie{
        //qui vanno le caratteristiche
        public $movieName;
        public $movieMainActor;
        public $movieYear;
        public $movieDirector;


        //qui vanno i metodi
        function __construct($movieName, $movieMainActor, $movieYear, $movieDirector){
            $this->movieName =$movieName;
            $this->movieMainActor=$movieMainActor;
            $this->movieYear=$movieYear;
            $this->movieDirector=$movieDirector;
        }

        function name(){
            return $this->movieName;
        }
        function attore(){
            return $this->movieMainActor;
        }
        function anno(){
            return $this->movieYear;
        }
        function regista(){
            return $this->movieDirector;
        }
    }
    $HarryPotter = new Movie("Harry Potter e la pietra filosofale", "Daniel Radcliff", "2001", "Chris Columbus");
    $HarryPotter2 = new Movie("Harry Potter e la camera dei segreti", "Daniel Radcliff", "2002", "Chris Columbus");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>
<body>
    <h1>
        Lista dei film più belli di sempre
    </h1>
    <h2>
        Titolo: 
        <?php
        echo $HarryPotter->name();
        ?>
    </h2>
    <h2>
        Attore protagonista: 
        <?php
        echo $HarryPotter->attore();
        ?>
    </h2>
    <h2>
        Anno di uscita: 
        <?php
        echo $HarryPotter->anno();
        ?>
    </h2>
    <h2>
        Diretto da: 
        <?php
        echo $HarryPotter->regista();
        ?>
    </h2>

    <h2>
        Titolo: 
        <?php
        echo $HarryPotter2->name();
        ?>
    </h2>
    <h2>
        Attore protagonista: 
        <?php
        echo $HarryPotter2->attore();
        ?>
    </h2>
    <h2>
        Anno di uscita: 
        <?php
        echo $HarryPotter2->anno();
        ?>
    </h2>
    <h2>
        Diretto da: 
        <?php
        echo $HarryPotter2->regista();
        ?>
    </h2>
</body>
</html>