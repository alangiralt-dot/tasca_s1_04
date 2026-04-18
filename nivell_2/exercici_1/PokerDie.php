<?php
declare(strict_types=1);
class PokerDie {
    // Attributes
    private string $figure;
    private const FIGURES = ['A', 'K', 'Q', 'J', '8', '7'];
    private static int $totalRolls = 0;
    // Methods
    public function roll(): void {
        self::$totalRolls++;
        $this->figure = self::FIGURES[array_rand(self::FIGURES)];
    }
    // Getters
    public function getFigure(): string {
        return $this->figure;
    }
    public static function getTotalRolls(): int {
        return self::$totalRolls;
    }
}