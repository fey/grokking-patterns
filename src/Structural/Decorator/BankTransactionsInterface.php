<?php


namespace Fey\Patterns\Structural\Decorator;


interface BankTransactionsInterface
{
    public function deposit($account, $amount): void;
    public function withdraw($account, $amount): void;
}