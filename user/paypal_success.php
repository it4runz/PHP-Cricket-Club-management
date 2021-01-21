<?php

//Get payment information from PayPal
$item_number = $_GET['item_number']; 
$txn_id = $_GET['tx'];
$payment_gross = $_GET['amount'];
$currency_code = $_GET['currency_code'];
$payment_status = $_GET['st'];
?>
<h1>Your payment has been successful.</h1>
<h1>Your Payment ID - <?php echo $txn_id; ?></h1>
