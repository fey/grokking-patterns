<?php

namespace Fey\Patterns\Creational\AbstractFactory;

class Bootstrap5FormFactory extends FormFactory
{
    public static function textarea($label, $name, $value): string
    {
        $label = "<label class=\"form-control\" for=\"$name\">{$label}</label>";
        $input = "<textarea id=\"{$name}\" name=\"$name\">{$value}</textarea>";

        $wrapperOpen = '<div class="mb-3">';
        $wrapperClose = '</div>';

        return implode("\n", [$wrapperOpen, $label, $input, $wrapperClose]);
    }
}