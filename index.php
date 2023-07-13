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
    }
    $HarryPotter = new Movie("Harry Potter e la pietra filosofale", "Daniel Radcliff", "2001", "Chris Columbus");
    echo $HarryPotter->movieName;
    echo $HarryPotter->movieMainActor;
    echo $HarryPotter->movieYear;
    echo $HarryPotter->movieDirector;
?>
