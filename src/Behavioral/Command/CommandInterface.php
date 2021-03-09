<?php

namespace Fey\Patterns\Behavioral\Command;

interface CommandInterface
{
    public function execute(): void;
}