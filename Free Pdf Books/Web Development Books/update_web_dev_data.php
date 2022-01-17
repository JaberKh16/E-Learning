<?php


    $connection = mysqli_connect("localhost:3312", "root", "");
    $db = mysqli_select_db($connection, 'elearning_system');

    if(isset($_POST['update_books']))
    {
        $books_id = $_POST['update_web_pack_id'];
        $web_pack_name = $_POST['web_pack_name'];
        $web_user_id   = $_POST['web_user_id'];
        $web_user_name = $_POST['web_user_name'];


        $query = "UPDATE web_development SET 
                 web_pack_name = '$web_pack_name', 
                 web_user_id = '$web_user_id' , 
                 web_user_name = '$web_user_name'
                 WHERE 	web_pack_id = '$books_id' ";

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