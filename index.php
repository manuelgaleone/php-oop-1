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
