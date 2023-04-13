<?php
    
    include('./config/config.php');
    session_start();
    print_r($_SESSION);
    include('./config/config.php');
    include('./config/config.php');


    $isRent = mysqli_fetch_array(mysqli_query($con, "Select * from tblpbooking where pid=145 "));
    $cur_date = date("d/m/Y");
    // $date = date_create($isRent['coutdate']);
    $date = date_format(date_create($isRent['coutdate']) , "d/m/Y") ;


    echo $cur_date;
    echo "</br>";
    echo $date;
    if($cur_date < $date){
        echo "12";
    }else{
        echo "34";
    }

?>