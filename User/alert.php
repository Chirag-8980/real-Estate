<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>Document</title>
</head>

<body>
<?php if (isset($_SESSION['msg'])) { ?>
        <script>
            swal("<?php echo  $_SESSION['status'] ?>", "<?php echo $_SESSION['msg'] ?>",
                "<?php echo $_SESSION['status'] ?>");
        </script>
    <?php
        unset($_SESSION['msg']);
        unset($_SESSION['status']);
    } ?>
</body>

</html>