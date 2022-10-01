<?php
include('../../includes/config.php');
error_reporting(0);

?>
<?php
$userid =  $_POST['pay_uid'];
$amount = $_POST['Pay_Amt'];
$MERCHANT_KEY = "Your Marchant Key Here ";
$SALT = "Marchant Salt Here ";
//$txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
$txnid = "TXNCRS".rand(0,1000)."_".$userid; 
 
$productInfo = "Txn For Product #1122";
$firstname = "User_".uniqid();
$email = "no-reply@raj";
$phone = "0000000000";
    $res = mysqli_query($conn,"INSERT INTO `qrtxn`(`userid`, `amount`, `txnid`,  `status`) VALUES ('$userid','$amount','$txnid','pending')");
    

$posted = array();
$hash_string = $MERCHANT_KEY."|".$txnid."|".$amount."|".$productInfo."|".$firstname."|".$email."|".$userid."||||||||||".$SALT;
echo '<h1 style="color:red;text-align:center;">Please Wait We are redirecting you on Payment Page</h1>';

$hash = strtolower(hash('sha512', $hash_string));


?>

<body>
<form action="https://secure.payu.in/_payment" method="post" name="payuForm">
      <input type="hidden" name="key" value="<?php echo $MERCHANT_KEY ?>" />
     <input type="hidden" name="hash" value="<?php echo $hash; ?>"/>
     <input type="hidden" name="txnid" value="<?php echo $txnid; ?>" />
    <input type="hidden" name="amount" value="<?php echo $amount; ?>">
    <input type="hidden" name="productinfo" value="<?php echo $productInfo; ?>">
    
    <input type="hidden" name="firstname" value="<?php echo $firstname; ?>">
    <input type="hidden" name="email" value="<?php echo $email; ?>">
    <input type="hidden" name="phone" value="<?php echo $phone; ?>">
    <input type="hidden" name="mobile" value="<?php echo $phone; ?>">
    <input type="hidden" name="surl" value="https://domain.com/admin/payu/pgResponse.php">
    <input type="hidden" name="furl" value="https://domain.com/admin/wallet.php">
    <input type="hidden" name="udf1" value="<?php echo $userid ; ?>">
     
 
    <input type="hidden" name="service_provider" value="payu_paisa" size="64" />
    <script>
document.body.onload = function(ev){
     document.payuForm.submit();
}

    </script>
</body>
