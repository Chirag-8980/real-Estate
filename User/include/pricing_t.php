<?php
$amt = 100;
$plan = 'Pro';
include('./config/config.php');
$query = mysqli_query($con, "select * from tblplan");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <title>Document</title>
</head>

<body>
    <div class="container w-75">
        <div class="container mt-5">
            <div class="text-center mx-auto mb-5 text-black" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-3 text-black pb-2" style="border-bottom: 2px solid var(--tan);">Plan Pricing</h1>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fuga quae sint asperiores architecto
                    quisquam exercitationem rerum facere in iste nisi!</p>
            </div>
        </div>
        <div class="container">
            <div class="text-center">

                <div class="d-flex justify-content-around">
                    <?php while ($data = mysqli_fetch_array($query)) { ?>
                    <div class="card mb-4  rounded-3 shadow-sm">
                            <div class="card-header py-3">
                                <h4 class="my-0 fw-normal"><?php echo $data['p_name'] ?></h4>
                            </div>
                            <div class="card-body">
                                <h1 class="card-title pricing-card-title">₹ <?php echo $data['p_price'] ?><small class="text-body-secondary fw-light">/<?php echo $data['p_credit'] ?> Credit</small></h1>
                                <ul class="list-unstyled mt-3 mb-4">
                                    <?php echo $data['p_description'] ?>
                                </ul>
                                <button type="button" class="w-100 btn btn-lg btn-primary" id="<?php echo $data['p_id'] ?>" onclick="pay_now()">Get started</button>
                            </div>
                        </div>
                        <script>
                            function pay_now() {
                                var options = {
                                    "key": "rzp_test_WVSwVyjTamNVvO", // Enter the Key ID generated from the Dashboard
                                    "amount": <?php echo $data['p_price']; ?> * 100, // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
                                    "currency": "INR",
                                    "name": "Locus",
                                    "description": "Test Transaction",
                                    "image": "https://example.com/your_logo",
                                    // "order_id": "order_IluGWxBm9U8zJ8", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
                                    "handler": function(response) {
                                        console.log(response);
                                        $.ajax({
                                            url: "process_payment.php?p_id=<?php echo $data['p_id']; ?>",
                                            'type': 'POST',
                                            'data': {
                                                'pmtid': response.razorpay_payment_id,
                                                'amt': <?php echo $data['p_price'];; ?>
                                            },

                                            success: function(data) {
                                                console.log(data);
                                                window.location.href = 'addhouse.php';
                                            }
                                        });
                                    },
                                }
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
                                document.getElementById('<?php echo $data['p_id'] ?>').onclick = function(e) {
                                    rzp1.open();
                                    e.preventDefault();
                                }
                                // document.getElementById('rzp-button2').onclick = function(e) {
                                //     rzp1.open();
                                //     e.preventDefault();
                                // }
                            };
                        </script>
                    <?php } ?>
                </div>
                <!-- <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm border-primary">
                    <div class="card-header py-3 text-bg-primary border-primary">
                        <h4 class="my-0 fw-normal">Enterprise</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">$29<small
                                class="text-body-secondary fw-light">/mo</small></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>30 users included</li>
                            <li>15 GB of storage</li>
                            <li>Phone and email support</li>
                            <li>Help center access</li>
                        </ul>
                        <button type="button" class="w-100 btn btn-lg btn-primary" id="rzp-button2" onclick="pay_now()">Contact us</button>
                    </div>
                </div>
            </div> -->
            </div>
        </div>
    </div>

    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script type="text/javascript">
        //  function pay_now() {
        //     var options = {
        //         "key": "rzp_test_WVSwVyjTamNVvO", // Enter the Key ID generated from the Dashboard
        //         "amount": <?php echo $amt; ?> * 100, // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
        //         "currency": "INR",
        //         "name": "Locus",
        //         "description": "Test Transaction",
        //         "image": "https://example.com/your_logo",
        //         // "order_id": "order_IluGWxBm9U8zJ8", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
        //         "handler": function(response) {
        //             console.log(response);
        //             $.ajax({
        //                 url: 'process_payment.php?plan=<?php echo $plan; ?>',
        //                 'type': 'POST',
        //                 'data': {
        //                     'pmtid': response.razorpay_payment_id, 'amt':<?php echo $amt; ?>
        //                 },

        //                 success: function(data) {
        //                     console.log(data);
        //                     window.location.href = 'addhouse.php';
        //                 }
        //             });
        //         },
        //     }
        //     var rzp1 = new Razorpay(options);
        //     rzp1.on('payment.failed', function(response) {
        //         alert(response.error.code);
        //         alert(response.error.description);
        //         alert(response.error.source);
        //         alert(response.error.step);
        //         alert(response.error.reason);
        //         alert(response.error.metadata.order_id);
        //         alert(response.error.metadata.payment_id);
        //     });
        //     document.getElementById('rzp-button1').onclick = function(e) {
        //         rzp1.open();
        //         e.preventDefault();
        //     }
        //     document.getElementById('rzp-button2').onclick = function(e) {
        //         rzp1.open();
        //         e.preventDefault();
        //     }
        //     };
        //  function pay_now() {

        // var options = {
        //     "key": "rzp_test_WVSwVyjTamNVvO", // Enter the Key ID generated from the Dashboard
        //     "amount": '<?php echo $amt; ?>' * 100, // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
        //     "currency": "INR",
        //     "name": "Locus",
        //     "description": "Test Transaction",
        //     "image": "https://example.com/your_logo",
        //     // "order_id": "order_IluGWxBm9U8zJ8", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
        //     "handler": function(response) {
        //         console.log(response);
        //         $.ajax({
        //             url: "process_payment.php?plan=<?php echo $plan; ?>",
        //             'type': 'POST',
        //             'data': {
        //                 'pmtid': response.razorpay_payment_id, 'amt':'<?php echo $amt; ?>'
        //             },

        //             success: function(data) {
        //                 console.log(data);
        //                 window.location.href = 'addhouse.php';
        //             }
        //         });
        //     },
        // }
        // var rzp1 = new Razorpay(options);
        // rzp1.on('payment.failed', function(response) {
        //     alert(response.error.code);
        //     alert(response.error.description);
        //     alert(response.error.source);
        //     alert(response.error.step);
        //     alert(response.error.reason);
        //     alert(response.error.metadata.order_id);
        //     alert(response.error.metadata.payment_id);
        // });
        // document.getElementById('rzp-button2').onclick = function(e) {
        //     rzp1.open();
        //     e.preventDefault();
        // }
        // };

        // alert(response.razorpay_payment_id);
        //     alert(response.razorpay_order_id);
        //     alert(response.razorpay_signature)
    </script>
</body>

</html>