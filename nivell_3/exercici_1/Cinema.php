<?php
declare(strict_types=1);
class Cinema {
    // Properties
    private array $movies = [];
    // Constructor
    function __construct (
        private string $name,
        private string $city
    ){}
    // Getters
    public function getName(): string {
        return $this->name;
    }
    public function getCity(): string {
        return $this->city;
    }
    public function getMovies(): array {
        return $this->movies;
    }
    public function getProperty(string $property): string {
        return match ($property) {
            "name" => $this->name,
            "city" => $this->city,
            default => throw new InvalidArgumentException("$property is not a valid argument")
        };
    }
    // Methods
    public function addMovie(int $id, Movie $m): void {
        $this->movies[$id] = $m;
    }
}