<?php
// Employee.php
declare(strict_types=1);
class Employee {
    // Attributes
    private string $firstName;
    private string $lastName;
    private float $salary;
    // Constructor
    function __construct(string $firstName, string $lastName, float $salary) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->salary = $salary;
    }
    // Methods
    public function hasToPayTaxes(): bool {
        if ($this->salary > 6000) return true;
        return false;
    }
    public function getCustomerInfo(): string {
        return
            $this->firstName . ' ' .
            $this->lastName .
            ($this->hasToPayTaxes() ? ' has' : ' does not have') .
            ' to pay taxes.';
    }
}