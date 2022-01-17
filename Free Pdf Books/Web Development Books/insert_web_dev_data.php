<?php


    $connection = mysqli_connect("localhost:3312", "root", "");
    $db = mysqli_select_db($connection, 'elearning_system');

    if(isset($_POST['insert_books']))
    {
        $web_pack_name = $_POST['web_pack_name'];
        $web_user_id   = $_POST['web_user_id'];
        $web_user_name = $_POST['web_user_name'];


        $query = "INSERT INTO `web_development` (`web_pack_name`, `web_user_id`, `web_user_name`) 
        VALUES ('$web_pack_name', '  $web_user_id ', '$web_user_name' )";

        $query_conn = mysqli_query ($connection, $query);

        if($query_conn)
        {
            echo '<script> alert("Data Saved"); </script>';
            header('Location :web_development_books.php ');

        }

        else
        {
            echo '<script> alert("Data  Not Saved"); </script>';
        }

    }




?>