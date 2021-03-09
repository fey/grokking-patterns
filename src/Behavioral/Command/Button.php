<?php

namespace Fey\Patterns\Behavioral\Command;

class Button
{
    /**
     * @var CommandInterface
     */
    private CommandInterface $command;

    public function __construct(CommandInterface $command)
    {
        $this->command = $command;
    }

    public function press()
    {
        $this->command->execute();
    }
}