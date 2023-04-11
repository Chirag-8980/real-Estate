<?php
    session_start();
    // $_SESSION['msg'] = "Alert";
    // $_SESSION['status'] = "error";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Document</title>
</head>

<body>
<?php if (isset($_SESSION['msg'])) { ?>
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Something went wrong!',
                footer: '<a href="">Why do I have this issue?</a>'
            })
        </script>
    <?php
        unset($_SESSION['msg']);
        unset($_SESSION['status']);
    } ?>
<!-- <?php if (isset($_SESSION['msg'])) { ?>
        <script>
            swal("<?php echo  $_SESSION['status'] ?>", "<?php echo $_SESSION['msg'] ?>",
                "<?php echo $_SESSION['status'] ?>");
        </script>
    <?php
        unset($_SESSION['msg']);
        unset($_SESSION['status']);
    } ?> -->
</body>

</html>