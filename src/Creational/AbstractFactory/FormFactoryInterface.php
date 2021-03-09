<?php

namespace Fey\Patterns\Creational\AbstractFactory;

interface FormFactoryInterface
{
    public static function open(string $action): string;
    public static function close(): string;
    public static function text($label, $name, $value): string;
    public static function select($label, $options): string;
    public static function radio($label, $name, $value): string;
    public static function checkbox($label, $name, $value): string;
    public static function submit(): string;
    public static function button($label, $name, $value): string;
    public static function textarea($label, $name, $value): string;
}