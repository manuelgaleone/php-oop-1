<?php

/*
Definita una classe ‘Movie’

    all'interno della classe sono dichiarate delle variabili d'istanza
    all'interno della classe è definito un costruttore
    all'interno della classe è definito almeno un metodo
    
    vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
*/
require __DIR__ . '/db.php';

$genres = [
    new Genre('Fantascientifico', 'Fantascienza pura!'),
    new Genre('Super Fantascientifico', 'Fantascienza proprio pura!'),
];

//Creazione oggetti Movie con relative caratteristiche
$movieFirst = new Movie('Ritorno al Futuro', $genres, '1990', 'Primo Autore');

var_dump($movieFirst);

$movieSecond = new Movie('Matrix', 'Fantascienza', '1998', 'Secondo Autore');

var_dump($movieSecond);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>List Movies</title>
</head>

<body>
    <div class="container my-2">
        <div class="movies_contents">
            <h1 class="text-center py-3">
                Tabellone del Cinema:
            </h1>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nome del Film</th>
                        <th scope="col">Genere</th>
                        <th scope="col">Pubblicazione</th>
                        <th scope="col">Autore</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>