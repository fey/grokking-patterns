<?php

namespace Fey\Patterns\Creational\AbstractFactory;

class FormFactory extends Bootstrap5FormFactory implements FormFactoryInterface
{

    public static function open(string $action): string
    {
        return "<form action =\"{$action}\">";
    }

    public static function close(): string
    {
        return '</form>';
    }

    public static function text($label, $name, $value): string
    {
        return "<label>{$label}<input name=\"{$name}\" type=\"text\" value=\"${value}\"></label>";
    }

    public static function select($label, $options): string
    {
        $open = '<select>';
        $formOptions = array_map(function ($key, $value) {
            return "<options value='$key'>{$value}</options>";
        }, array_keys($options), $options);
        $close = '</select>';

        return implode('\n', [$open, $formOptions, $close]);
    }

    public static function radio($label, $name, $value): string
    {
        $label = "<label for=\"{$name}\">{$label}</label>";
        $input = "<input type=\"radio\" value=\"{$value}\">";

        return implode('\n', [$label, $input]);
    }

    public static function checkbox($label, $name, $value): string
    {
        $label = "<label for=\"{$name}\">{$label}</label>";
        $input = "<input type=\"checkbox\" value=\"{$value}\">";

        return implode('\n', [$label, $input]);
    }

    public static function submit(): string
    {
        return '<input type="submit">';
    }

    public static function button($label, $name, $value): string
    {
        $input = "<input type=\"button\" value=\"{$value}\">";

        return implode('\n', [$input]);
    }

    public static function textarea($label, $name, $value): string
    {
        $label = "<label for=\"{$name}\">{$label}</label>";
        $input = "<textarea name=\"{$name}\">${value}</textarea>";

        return implode('\n', [$label, $input]);
    }
}