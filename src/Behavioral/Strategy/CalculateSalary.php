<?php

namespace Fey\Patterns\Behavioral\Strategy;

use Fey\Patterns\Behavioral\Strategy\Strategies\AdultEmployeeStrategy;
use Fey\Patterns\Behavioral\Strategy\Strategies\LessThan18Strategy;
use Fey\Patterns\Behavioral\Strategy\Strategies\ExperiencedEmployeeStrategy;

class CalculateSalary implements CalculateSalaryStrategyInterface
{
    private const YEARS_OF_EXPERIENCED = 10;
    private const RETIREMENT_AGE_YEARS = 65;

    private AdultEmployeeStrategy $adultEmployeeStrategy;
    private LessThan18Strategy $lessThan18Strategy;
    private ExperiencedEmployeeStrategy $experiencedEmployeeStrategy;

    public function __construct(
        AdultEmployeeStrategy $adultEmployeeStrategy,
        LessThan18Strategy $lessThan18Strategy,
        ExperiencedEmployeeStrategy $experiencedEmployeeStrategy,
    )
    {
        $this->adultEmployeeStrategy = $adultEmployeeStrategy;
        $this->lessThan18Strategy = $lessThan18Strategy;
        $this->experiencedEmployeeStrategy = $experiencedEmployeeStrategy;
    }

    public function calculate(Employee $employee): int
    {
        if ($employee->getAge() < 18) {
            return $this->lessThan18Strategy->calculate($employee);
        }
        if ($employee->getExperience() > self::YEARS_OF_EXPERIENCED) {
            return $this->experiencedEmployeeStrategy->calculate($employee);
        }
        if ($employee->getAge() >= 18 && $employee < self::RETIREMENT_AGE_YEARS) {
            return $this->adultEmployeeStrategy->calculate($employee);
        }
    }
}