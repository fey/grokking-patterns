<?php

namespace Fey\Patterns\Behavioral\Strategy\Strategies;

use Fey\Patterns\Behavioral\Strategy\CalculateSalaryStrategyInterface;
use Fey\Patterns\Behavioral\Strategy\Employee;

class AdultEmployeeStrategy implements CalculateSalaryStrategyInterface
{
    private const BONUS_PAY = 1000;

    public function calculate(Employee $employee): int
    {
        return $employee->getHourlyRate() * $employee->getWorkedHours() + self::BONUS_PAY;
    }
}