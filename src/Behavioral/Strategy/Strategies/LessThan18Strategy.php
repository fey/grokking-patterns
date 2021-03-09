<?php

namespace Fey\Patterns\Behavioral\Strategy\Strategies;

use Fey\Patterns\Behavioral\Strategy\CalculateSalaryStrategyInterface;

class LessThan18Strategy implements CalculateSalaryStrategyInterface
{
    private const WORKER_LESS18_YEARS_RATE = 0.75;

    public function calculate($employee): int
    {
        $hourlyRate = $employee->getHourlyRate();
        $workedHours = $employee->getWorkedHours();

        return ($hourlyRate * $workedHours) * self::WORKER_LESS18_YEARS_RATE;
    }
}