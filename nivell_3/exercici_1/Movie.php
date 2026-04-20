<?php
declare(strict_types=1);
class Movie {
    // WARNING: circular references. 
    // Use a loop for display; avoid using print_r() to prevent recursion issues.
    // Properties
    private array $cinemas = [];
    // Constructor
    function __construct(
        private string $title,
        private int $duration,
        private string $director
    ){}
    // Getters
    public function getTitle(): string {
        return $this->title;
    }
    public function getDuration(): int {
        return $this->duration;
    }
    public function getDirector(): string {
        return $this->director;
    }
    public function getCinemas(): array {
        return $this->cinemas;
    }
    public function getProperty(string $property): int|string {
        return match ($property) {
            "title" => $this->title,
            "duration" => $this->duration,
            "director" => $this->director,
            default => throw new InvalidArgumentException("$property is not a valid argument")
        };
    }
    // Methods
    public function addCinema(int $id, Cinema $c): void {
        $this->cinemas[$id] = $c;
    }
}