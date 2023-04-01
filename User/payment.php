<?
    session_start()
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    
    <button type="button" class="btn btn-primary" id="rzp-button1" onclick="pay_now()">Pay Now</button>
    <?PHP
     $amt=1000;
     $pid=10;
    ?>
</body>

<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script type="text/javascript">
function pay_now() {
    var options = {
        "key": "rzp_test_WVSwVyjTamNVvO", // Enter the Key ID generated from the Dashboard
        "amount": '<?php echo $amt ;?>' *
            100, // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
        "currency": "INR",
        "name": "Locus",
        "description": "Test Transaction",
        "image": "https://example.com/your_logo",
        // "order_id": "order_IluGWxBm9U8zJ8", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
        "handler": function(response) {
            console.log(response);
            $.ajax({
                url: "process_payment.php?pid=<?php echo $pid;?>",
                'type': 'POST',
                'data': {
                    'pmtid': response.razorpay_payment_id,
                    'amt': '<?php echo $amt ;?>'
                },
                success: function(data) {
                    console.log(data);
                    window.location.href ='thanks.php';
                }
            });
        },
    };
    var rzp1 = new Razorpay(options);
    rzp1.on('payment.failed', function(response) {
        alert(response.error.code);
        alert(response.error.description);
        alert(response.error.source);
        alert(response.error.step);
        alert(response.error.reason);
        alert(response.error.metadata.order_id);
        alert(response.error.metadata.payment_id);
    });
    document.getElementById('rzp-button1').onclick = function(e) {
        rzp1.open();
        e.preventDefault();
    }
};


// alert(response.razorpay_payment_id);
//     alert(response.razorpay_order_id);
//     alert(response.razorpay_signature)
</script>

</html>