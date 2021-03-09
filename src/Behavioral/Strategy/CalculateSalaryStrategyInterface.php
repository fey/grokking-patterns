<?php

namespace Fey\Patterns\Behavioral\Strategy;

interface CalculateSalaryStrategyInterface
{
    public function calculate(Employee $employee): int;
}