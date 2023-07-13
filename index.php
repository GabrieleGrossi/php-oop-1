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


        //qui vanno i metodi
        function __construct(string $movieName,string $movieMainActor,int $movieYear,string $movieDirector){
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
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&display=swap" rel="stylesheet">
    <!-- MyStyle -->
    <link rel="stylesheet" href="style.css">
    <title>Movies</title>
</head>
<body>
    <h1 class="text-center">
        Lista dei film più belli di sempre
    </h1>
    <div class="container-fluid">
        <div class="row ">
            <div class="col-6">
                <div class="card mt-5" style="width: 18rem;">
                    <div class="card-header">
                        Titolo: 
                        <?php
                        echo $HarryPotter->name();
                        ?>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            Attore protagonista: 
                            <?php
                            echo $HarryPotter->attore();
                            ?>
                        </li>
                        <li class="list-group-item">
                            Anno di uscita: 
                            <?php
                            echo $HarryPotter->anno();
                            ?>
                        </li>
                        <li class="list-group-item">
                            Diretto da: 
                            <?php
                            echo $HarryPotter->regista();
                            ?>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-6">
            <div class="card mt-5" style="width: 18rem;">
                    <div class="card-header">
                        Titolo: 
                        <?php
                        echo $HarryPotter2->name();
                        ?>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            Attore protagonista: 
                            <?php
                            echo $HarryPotter2->attore();
                            ?>
                        </li>
                        <li class="list-group-item">
                            Anno di uscita: 
                            <?php
                            echo $HarryPotter2->anno();
                            ?>
                        </li>
                        <li class="list-group-item">
                            Diretto da: 
                            <?php
                            echo $HarryPotter2->regista();
                            ?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>
</html>