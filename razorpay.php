<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment-Razorpay</title>
</head>
<body>

<?php
$key = "rzp_test_IqO3ZzO04ZztbU";
?>
<form action="success.html" method="GET">
<script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key= "rzp_test_IqO3ZzO04ZztbU"
    data-amount="29935" 
    data-currency="INR"
    data-order_id= "sdlfkjhjaK1234343"
    data-buttontext="Pay with Razorpay"
    data-name="Jewellary Shop"
    data-description="A jewellary shop e-commerce site mini project"
    data-image="https://www.tanishq.co.in/wps/wcm/connect/tanishq/cb53f671-01d0-449e-b18d-a4e61e6ffa0b/TanishqLogo.png?MOD=AJPERES&CACHEID=ROOTWORKSPACE.Z18_90IA1H80O0RT10QIMVSTFU3006-cb53f671-01d0-449e-b18d-a4e61e6ffa0b-mC036IT"
    data-prefill.name = <?php echo $_POST['name']; ?>
    data-prefill.email=<?php echo $_POST['email']; ?>
    data-theme.color="#F37254"
></script>
<input type="hidden" custom="Hidden Element" name="hidden">
</form>
</body>
</html>