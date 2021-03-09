<?php

namespace Fey\Patterns\Structural\Decorator;

class TransactionLogger implements BankTransactionsInterface
{
    private BankTransactionsInterface $bankTransactions;
    private $logger;

    public function __construct(BankTransactionsInterface $bankTransactions, $logger)
    {
        $this->bankTransactions = $bankTransactions;
        $this->logger = $logger;
    }

    public function deposit($account, $amount): void
    {
        $this->logger->log(
            sprintf('deposit to account %s with amount %s', $account, $account)
        );

        $this->bankTransactions->deposit($account, $amount);
    }

    public function withdraw($account, $amount): void
    {
        $this->logger->log(
            sprintf('withdraw from account %s with amount %s', $account, $account)
        );

        $this->bankTransactions->withdraw($account, $amount);
    }
}