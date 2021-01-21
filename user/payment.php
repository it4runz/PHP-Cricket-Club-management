<!DOCTYPE html> 

<html lang="en"> 

<head> 

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 

    <title>Cricket Management System| Paypal </title>

</head> 

<body> 
    <?php

//Set useful variables for paypal form
$paypal_link = 'https://www.sandbox.paypal.com/cgi-bin/webscr'; //Test PayPal API URL
$paypalID = 'mailuser0011@gmail.com'; //Business Email

?>

<form action="<?php echo $paypal_link; ?>" method="post"> 

    <input type="hidden" name="business" value="<?php echo $paypalID; ?>"> 

    <!-- Specify a Buy Now button. --> 

    <input type="hidden" name="cmd" value="_xclick"> 

    <!-- Specify details about the item that buyers will purchase. --> 

    <input type="hidden" name="item_name" value="product1"> 

    <input type="hidden" name="item_number" value="1"> 

    <input type="hidden" name="amount" value="100"> 

    <input type="hidden" name="currency_code" value="INR">



    <!-- Specify URLs --> 

    <input type='hidden' name='cancel_return' value='http://localhost//cricket club managment system/user/paypal_cancel.php'>

    <input type='hidden' name='return' value='http://localhost/cricket club management system/user/paypal_success.php'>



    <!-- Display the payment button. --> 

    <input type="image" name="submit" border="0" 

    src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif" alt="PayPal - The safer, easier way to pay online"> 

    <img alt="" border="0" width="1" height="1" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" > 



</form> 

</body> 

</html>
