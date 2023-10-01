<?php

class Account
{
    public $accountNumber;
    public $blance;

    public function Diposite($ammount)
    {
        echo "Diposite = $ammount";
    }

    public function Withdraw($ammount)
    {
        echo "Withdraw = $ammount";
    }

    public function getblance($ammount)
    {
        return $this->blance;
    }
}
