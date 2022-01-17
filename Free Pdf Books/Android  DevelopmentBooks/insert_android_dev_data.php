<?php


    $connection = mysqli_connect("localhost:3312", "root", "");
    $db = mysqli_select_db($connection, 'elearning_system');

    if(isset($_POST['insert_books']))
    {
        $android_pack_name = $_POST['android_pack_name'];
        $android_user_id   = $_POST['android_user_id'];
        $android_user_name = $_POST['android_user_name'];


        $query = "INSERT INTO `android_development` (`android_pack_name`, `android_user_id`, `android_user_name`) 
        VALUES ('$android_pack_name', '$android_user_id', '$android_user_name' )";

        $query_conn = mysqli_query ($connection, $query);

        if($query_conn)
        {
            echo '<script> alert("Data Saved"); </script>';
            header('Location :Android_books_data.php ');

        }

        else
        {
            echo '<script> alert("Data  Not Saved"); </script>';
        }

    }




?>