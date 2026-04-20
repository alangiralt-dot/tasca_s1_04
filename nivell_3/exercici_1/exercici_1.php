<?php
declare(strict_types=1);
require_once('cinesa_data.php');
require_once('CinemaChain.php');
$cinesa = new CinemaChain(
    $movies_ordered_by_id,
    $cinemas_ordered_by_id,
    $cinema_movie_mapping
);
foreach ($cinesa->getCinemas() as $c) {
echo '----------------------------' . PHP_EOL;
    $longestMovie = $cinesa->getLongestMovie($c->getName());
    printf("%s\n", $c->getName());
    printf("%s\n", $c->getCity());
    printf("%-50s%-30s%10s\n", 'TITLE', 'DIRECTOR', 'DURATION');
    foreach ($c->getMovies() as $m) {
        $title = $m->getTitle();
        $director = $m->getDirector();
        echo $title . str_repeat(' ', 50 - mb_strlen($title));
        echo $director . str_repeat(' ', 30 - mb_strlen($director));
        if ($m === $longestMovie) {
            printf("%3s%7d\n", '-->', $m->getDuration());
        } else {
            printf("%10d\n", $m->getDuration());
        }
    }
}
echo '----------------------------' . PHP_EOL;
foreach ($cinesa->getMoviesBy("director", "Pedro Almodóvar") as $m) {
    echo $m->getTitle() . PHP_EOL;
};
echo '----------------------------' . PHP_EOL;
foreach ($cinesa->getMoviesBy("duration", 102) as $m) {
    echo $m->getTitle() . PHP_EOL;
};echo '----------------------------' . PHP_EOL;