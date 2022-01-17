<?php


    $connection = mysqli_connect("localhost:3312", "root", "");
    $db = mysqli_select_db($connection, 'elearning_system');

    if(isset($_POST['update_books']))
    {
        $books_id = $_POST['update_android_pack_id'];
        $android_pack_name = $_POST['android_pack_name'];
        $android_user_id   = $_POST['android_user_id'];
        $android_user_name= $_POST['android_user_name'];


        $query = "UPDATE android_development SET 
                 android_pack_name = '$android_pack_name', 
                 android_user_id = '$android_user_id' , 
                 android_user_name = '$android_user_name '
                 WHERE 	android_pack_id = '$books_id' ";

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