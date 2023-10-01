<?php
require 'Checking_account.php';


class PrimiumAccount extends CheckingAccount{
    public $minimumBlance = 1000;
}
$premiumAccount = new PrimiumAccount();
echo $premiumAccount->minimumBlance;