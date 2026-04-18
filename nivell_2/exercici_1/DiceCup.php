<?php
declare(strict_types=1);
class DiceCup {
    // Attributes
    private array $dice = [];
    // Method
    public function rollHand() {
        foreach($this->dice as $d) {
            $d->roll();
        }
    }
    public function getHand(): string{
        $hand = '';
        foreach($this->dice as $d) {
            $hand .= $d->getFigure() . ' ';
        }
        return $hand;
    }
    public function addDie(PokerDie $die): void {
        if (count($this->dice) > 4) return;
        foreach ($this->dice as $d) {
            if ($d === $die) return;
        }
        array_push($this->dice, $die);
    }
    public function removeDie(PokerDie $die): void {
        for ($i = 0; $i < count($this->dice); $i++) {
            if ($this->dice[$i] === $die) {
                unset($this->dice[$i]);
                $this->dice = array_values($this->dice);
                return;
            }
        }
    }
}