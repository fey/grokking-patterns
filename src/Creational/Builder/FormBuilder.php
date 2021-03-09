<?php

namespace Fey\Patterns\Creational\Builder;

class FormBuilder
{
    protected array $formParts = [];

    public function open($url): self
    {
        $this->formParts[] = "<form action=\"{$url}\">";

        return $this;
    }

    public function text($name, $value, $label): self
    {
        $this->formParts[] = "<label>{$label}<input type='text' value='{$value}' name=\"{$name}\"></label>";

        return $this;
    }

    public function password($name, $value, $label): self
    {
        $this->formParts[] = "<label>{$label}<input type='password' value='{$value}' name=\"{$name}\"></label>";

        return $this;
    }

    public function email($name, $value, $label): self
    {
        $this->formParts[] = "<label>{$label}<input type='email' value='{$value}' name=\"{$name}\"></label>";

        return $this;
    }

    public function close(): string
    {
        $this->formParts[] = '</form>';

        return implode('\n', $this->formParts);
    }
}