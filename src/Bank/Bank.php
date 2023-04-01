<?php

namespace BankingApp\AppApi\Bank;

interface Bank
{
    public function deposit(int $amount): string;
    public function getName(): string;
}