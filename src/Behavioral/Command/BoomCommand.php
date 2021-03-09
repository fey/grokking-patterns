<?php

namespace Fey\Patterns\Behavioral\Command;

class BoomCommand implements CommandInterface
{

    public function execute(): void
    {
        // Boom!
    }
}