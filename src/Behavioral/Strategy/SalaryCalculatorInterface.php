<?php

namespace Fey\Patterns\Behavioral\Strategy;

interface SalaryCalculatorInterface
{
    public function calculate(Employee $employee): int;
}