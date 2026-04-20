<?php
require_once('Movie.php');
require_once('Cinema.php');
class CinemaChain {
    // Properties
    private array $movies = [];
    private array $cinemas = [];
    // Constructor
    function __construct(array $parMovies, array $parCinemas, array $parRelationships) {
        if (count($parMovies) == 0) throw new InvalidArgumentException ('$parMovies is empty');
        if (count($parCinemas) == 0) throw new InvalidArgumentException ('$parCinemas is empty');
        if (count($parRelationships) == 0) throw new InvalidArgumentException ('$parRelationships is empty');
        foreach($parMovies as $m) {
            $this->movies[$m["id"]] = new Movie(
                $m["title"],
                $m["duration"],
                $m["director"]
            );
        };
        foreach($parCinemas as $c) {
            $this->cinemas[$c["id"]] = new Cinema(
                $c["name"],
                $c["city"]
            );
        };
        foreach($parRelationships as $r) {
            $cinema = $this->cinemas[$r["c_id"]];
            $movie = $this->movies[$r["m_id"]];
            $cinema->addMovie($r["m_id"], $movie);
            $movie->addCinema($r["c_id"], $cinema);
        }
    }
    // Getters
    public function getMovies(): array {
        return $this->movies;
    }
    public function getCinemas(): array {
        return $this->cinemas;
    }
    // Methods
    public function getMoviesBy(string $property, string|int $value): array {
        $movies = [];
        foreach($this->movies as $m) {
            if ($m->getProperty($property) === $value) array_push($movies, $m);
        }
        return $movies;
    }
    public function getLongestMovie(string $cinemaName): ?Movie {
        foreach ($this->cinemas as $c) {
            if ($c->getName() === $cinemaName) {
                $movies = $c->getMovies();
                if (count($movies) === 0) return null;
                $longestMovie;
                $longestDuration = -1;
                foreach ($movies as $m) {
                    if ($m->getDuration() > $longestDuration) {
                        $longestMovie = $m;
                        $longestDuration = $longestMovie->getDuration();
                    }
                }
                return $longestMovie;
            }
        }
        return null;
    }
}