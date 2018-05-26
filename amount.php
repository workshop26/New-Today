
<?php
class Account {
private $_totalBalance = 0;
public function makeDeposit($amount) {
$this->_totalBalance+= $amount;
}
public function makeWithdrawal($amount) {
if ($amount <$this->_totalBalance) {
$this->_totalBalance-= $amount;
} else {
die("Insufficient funds <br/>");
}
}
public function getTotalBalance() {
return $this->_totalBalance;
}
}
$a = new Account;
$a->makeDeposit(500);
$a->makeWithdrawal(100);
echo $a->getTotalBalance()."<br/>"; // Displays “400”;
$a->makeWithdrawal(1000);
?>
