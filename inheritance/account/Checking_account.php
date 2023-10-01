<?php
 require 'Account.php';



class CheckingAccount extends Account
{

    public function TransferAmount($amount)
    {
        echo "Transfer $amount from account to account";
    }
}
$check = new CheckingAccount();
$check->Diposite(100);
$check->Withdraw(50);
$check->TransferAmount(50);
