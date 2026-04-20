<?php
/*
SELECT movies.id, movies.title, movies.duration, movies.director
FROM movies 
ORDER BY movies.id ASC;
*/
$movies_ordered_by_id = [
    ["id" => 1, "title" => "Super Mario Galaxy: La película", "duration" => 98, "director" => "Aaron Horvath"],
    ["id" => 2, "title" => "Proyecto Salvación", "duration" => 156, "director" => "Phil Lord"],
    ["id" => 3, "title" => "La momia de Lee Cronin", "duration" => 134, "director" => "Lee Cronin"],
    ["id" => 4, "title" => "Amarga Navidad", "duration" => 111, "director" => "Pedro Almodóvar"],
    ["id" => 5, "title" => "Iron Lung: Océano de sangre", "duration" => 86, "director" => "Mark Fischbach"],
    ["id" => 6, "title" => "Mortal Kombat II", "duration" => 116, "director" => "Simon McQuoid"],
    ["id" => 7, "title" => "El diablo viste de Prada 2", "duration" => 120, "director" => "David Frankel"],
    ["id" => 8, "title" => "Hanna i els Nadals oblidats", "duration" => 88, "director" => "Elena Ruiz"],
    ["id" => 9, "title" => "La familia Benetón +2", "duration" => 87, "director" => "Joaquín Mazón"],
    ["id" => 10, "title" => "Kill Bill: The Whole Bloody Affair", "duration" => 275, "director" => "Quentin Tarantino"],
    ["id" => 11, "title" => "ONE OK ROCK DETOX JAPAN TOUR", "duration" => 118, "director" => "Naoto Amazutsumi"],
    ["id" => 12, "title" => "Boulevard", "duration" => 113, "director" => "Sonia Méndez"],
    ["id" => 13, "title" => "Noche de bodas 2", "duration" => 108, "director" => "Matt Bettinelli-Olpin"],
    ["id" => 14, "title" => "Shelter: El protector", "duration" => 107, "director" => "Alexis Morante"],
    ["id" => 15, "title" => "La mujer más rica del mundo", "duration" => 122, "director" => "Thierry Klifa"],
    ["id" => 16, "title" => "El chico de los pantalones rosas", "duration" => 115, "director" => "Margherita Ferri"],
    ["id" => 17, "title" => "A una isla de ti", "duration" => 102, "director" => "Simón Mesa Soto"],
    ["id" => 18, "title" => "Torrente Presidente", "duration" => 102, "director" => "Santiago Segura"],
    ["id" => 19, "title" => "Hoppers", "duration" => 104, "director" => "Daniel Chong"],
    ["id" => 20, "title" => "BTS WORLD TOUR 'ARIRANG'", "duration" => 115, "director" => "Simon Hilton"],
    ["id" => 21, "title" => "Five Nights at Freddy's 2", "duration" => 104, "director" => "Emma Tammi"],
    ["id" => 22, "title" => "Golpes", "duration" => 102, "director" => "Rafael Cobos"],
    ["id" => 23, "title" => "Dune: Parte tres", "duration" => 165, "director" => "Denis Villeneuve"],
    ["id" => 24, "title" => "Me has robado el corazón", "duration" => 98, "director" => "Chus Gutiérrez"],
    ["id" => 25, "title" => "Michael", "duration" => 150, "director" => "Antoine Fuqua"]
];
/*
SELECT cinemas.id, cinemas.name, cinemas.city
FROM cinemas
ORDER BY cinemas.id ASC;
*/
$cinemas_ordered_by_id = [
    ["id" => 1, "name" => "Cinesa Diagonal", "city" => "Barcelona"],
    ["id" => 2, "name" => "Cinesa Diagonal Mar", "city" => "Barcelona"],
    ["id" => 3, "name" => "Cinesa SOM Multiespai", "city" => "Barcelona"],
    ["id" => 4, "name" => "Cinesa LUXE La Farga", "city" => "L'Hospitalet"],
    ["id" => 5, "name" => "Cinesa Parc Vallès", "city" => "Terrassa"],
    ["id" => 6, "name" => "Cinesa LUXE Barnasud", "city" => "Gavà"]
];
/*
SELECT cinemas.id AS c_id, movies.id AS m_id
FROM cinemas
JOIN movies ON cinemas.id = movies.cinema_id
WHERE cinemas.region = 'Catalonia'
ORDER BY cinemas.id ASC;
*/
$cinema_movie_mapping = [
    ["c_id" => 1, "m_id" => 1],
    ["c_id" => 1, "m_id" => 2],
    ["c_id" => 1, "m_id" => 3],
    ["c_id" => 1, "m_id" => 4],
    ["c_id" => 1, "m_id" => 5],
    ["c_id" => 1, "m_id" => 6],
    ["c_id" => 1, "m_id" => 7],
    ["c_id" => 1, "m_id" => 8],
    ["c_id" => 2, "m_id" => 1],
    ["c_id" => 2, "m_id" => 9],
    ["c_id" => 2, "m_id" => 10],
    ["c_id" => 2, "m_id" => 11],
    ["c_id" => 2, "m_id" => 12],
    ["c_id" => 2, "m_id" => 3],
    ["c_id" => 2, "m_id" => 13],
    ["c_id" => 2, "m_id" => 14],
    ["c_id" => 3, "m_id" => 1],
    ["c_id" => 3, "m_id" => 15],
    ["c_id" => 3, "m_id" => 16],
    ["c_id" => 3, "m_id" => 17],
    ["c_id" => 3, "m_id" => 18],
    ["c_id" => 3, "m_id" => 4],
    ["c_id" => 3, "m_id" => 2],
    ["c_id" => 3, "m_id" => 19],
    ["c_id" => 4, "m_id" => 1],
    ["c_id" => 4, "m_id" => 3],
    ["c_id" => 4, "m_id" => 9],
    ["c_id" => 4, "m_id" => 20],
    ["c_id" => 4, "m_id" => 2],
    ["c_id" => 4, "m_id" => 18],
    ["c_id" => 4, "m_id" => 19],
    ["c_id" => 4, "m_id" => 5],
    ["c_id" => 5, "m_id" => 1],
    ["c_id" => 5, "m_id" => 10],
    ["c_id" => 5, "m_id" => 21],
    ["c_id" => 5, "m_id" => 22],
    ["c_id" => 5, "m_id" => 2],
    ["c_id" => 5, "m_id" => 3],
    ["c_id" => 5, "m_id" => 18],
    ["c_id" => 5, "m_id" => 23],
    ["c_id" => 6, "m_id" => 24],
    ["c_id" => 6, "m_id" => 1],
    ["c_id" => 6, "m_id" => 9],
    ["c_id" => 6, "m_id" => 4],
    ["c_id" => 6, "m_id" => 19],
    ["c_id" => 6, "m_id" => 18],
    ["c_id" => 6, "m_id" => 2],
    ["c_id" => 6, "m_id" => 25]
];
