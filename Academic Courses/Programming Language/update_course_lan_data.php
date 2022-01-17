<?php


    $connection = mysqli_connect("localhost:3312", "root", "");
    $db = mysqli_select_db($connection, 'elearning_system');

    if(isset($_POST['update_books']))
    {
        $books_id = $_POST['update_course_pack_id'];
        $course_pack_name  = $_POST['course_pack_name'];
        $course_user_id    = $_POST['course_user_id'];
        $course_user_name = $_POST['course_user_name'];


        $query = "UPDATE programming_language_course SET 
                 course_pack_name = '  $course_pack_name', 
                 course_user_id = ' $course_user_id  ' , 
                 course_user_name = '$course_user_name '
                 WHERE 	course_pack_id = '$books_id' ";

        $query_conn = mysqli_query ($connection, $query);

        if($query_conn)
        {
            echo '<script> alert("Data Saved"); </script>';
            header('Location :programming_language_course.php ');

        }

        else
        {
            echo '<script> alert("Data  Not Saved"); </script>';
        }

    }




?>