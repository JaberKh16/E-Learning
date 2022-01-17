<?php


    $connection = mysqli_connect("localhost:3312", "root", "");
    $db = mysqli_select_db($connection, 'elearning_system');

    if(isset($_POST['payment_submit']))
    {
        $course_id = $_POST['course_id'];
        $course_title  = $_POST['course_title'];
        $user_name = $_POST['user_name'];
        $user_email = $_POST['user_email'];
        $pay_user_card_type =$_POST['user_card'];
        $pay_user_card_no = $_POST['cardnumber'];
        $pay_user_exp_date = $_POST['expiration_date'];


        $query = "INSERT INTO payment (`course_id`, `course_title`, `user_name`, `user_email`, `user_card`, `cardnumber`, `expiration_date`) 
        VALUES ('$course_id', '$course_title', '$user_name', '$user_email', '$pay_user_card_type' ' $pay_user_card_no', ' $pay_user_exp_date' )";

        $query_conn = mysqli_query ($connection, $query);

        if($query_conn)
        {
            echo '<script> alert("Payment Succesful"); </script>';
            header('Location :payment_page.php');

        }

        else
        {
            echo '<script> alert("Payment  Not Succesful"); </script>';
        }

    }




?>