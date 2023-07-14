<?php
// Creating instances of Movie class and assigning them to variables $classicMovie and $modernMovie
$classicMovie = new Movie(
    'The Godfather',
    1972,
    ['Crime'],
    'Francis Ford Coppola',
    'R',
    ['Marlon Brando', 'Al Pacino', 'James Caan', 'Robert Duvall'],
    'The aging patriarch of an organized crime dynasty transfers control of his clandestine empire to his reluctant son.',
    'Paramount Pictures',
    'Paramount Pictures'
);

$modernMovie = new Movie(
    'The Dark Knight',
    2008,
    ['Action', 'Crime', 'Drama'],
    'Christopher Nolan',
    'PG-13',
    ['Christian Bale', 'Heath Ledger', 'Aaron Eckhart', 'Michael Caine'],
    'When the menace known as the Joker wreaks havoc and chaos on the people of Gotham, Batman must accept one of the greatest psychological and physical tests of his ability to fight injustice.',
    'Warner Bros. Pictures',
    'Warner Bros. Pictures'
);

?>