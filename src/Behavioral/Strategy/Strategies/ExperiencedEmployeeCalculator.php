<?php

namespace Fey\Patterns\Behavioral\Strategy\Strategies;

use Fey\Patterns\Behavioral\Strategy\SalaryCalculatorInterface;
use Fey\Patterns\Behavioral\Strategy\Employee;

class ExperiencedEmployeeCalculator implements SalaryCalculatorInterface
{
    private const EXPERIENCED_WORK_TIME_RATE = 1.25;

    public function calculate(Employee $employee): int
    {
        return self::EXPERIENCED_WORK_TIME_RATE * $employee->getHourlyRate() * $employee->getWorkedHours();
    }
}