<?php

namespace Fey\Patterns\Behavioral\Strategy;

use Fey\Patterns\Behavioral\Strategy\Strategies\AdultEmployeeCalculator;
use Fey\Patterns\Behavioral\Strategy\Strategies\LessThan18Calculator;
use Fey\Patterns\Behavioral\Strategy\Strategies\ExperiencedEmployeeCalculator;

class SalaryCalculator implements SalaryCalculatorInterface
{
    private const YEARS_OF_EXPERIENCED = 10;
    private const RETIREMENT_AGE_YEARS = 65;

    private SalaryCalculatorInterface $adultEmployeeStrategy;
    private SalaryCalculatorInterface $lessThan18Strategy;
    private SalaryCalculatorInterface $experiencedEmployeeStrategy;

    public function __construct(
        SalaryCalculatorInterface $adultEmployeeStrategy,
        SalaryCalculatorInterface $lessThan18Strategy,
        SalaryCalculatorInterface $experiencedEmployeeStrategy,
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