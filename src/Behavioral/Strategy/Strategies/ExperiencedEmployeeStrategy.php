<?php

namespace Fey\Patterns\Behavioral\Strategy\Strategies;

use Fey\Patterns\Behavioral\Strategy\CalculateSalaryStrategyInterface;
use Fey\Patterns\Behavioral\Strategy\Employee;

class ExperiencedEmployeeStrategy implements CalculateSalaryStrategyInterface
{
    private const EXPERIENCED_WORK_TIME_RATE = 1.25;

    public function calculate(Employee $employee): int
    {
        return self::EXPERIENCED_WORK_TIME_RATE * $employee->getHourlyRate() * $employee->getWorkedHours();
    }
}