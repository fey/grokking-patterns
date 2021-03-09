<?php

namespace Fey\Patterns\Behavioral\Strategy\Strategies;

use Fey\Patterns\Behavioral\Strategy\SalaryCalculatorInterface;
use Fey\Patterns\Behavioral\Strategy\Employee;

class AdultEmployeeCalculator implements SalaryCalculatorInterface
{
    private const BONUS_PAY = 1000;

    public function calculate(Employee $employee): int
    {
        return $employee->getHourlyRate() * $employee->getWorkedHours() + self::BONUS_PAY;
    }
}