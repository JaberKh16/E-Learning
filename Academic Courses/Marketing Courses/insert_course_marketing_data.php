<?php


    $connection = mysqli_connect("localhost:3312", "root", "");
    $db = mysqli_select_db($connection, 'elearning_system');

    if(isset($_POST['insert_course']))
    {
        $course_pack_name = $_POST['course_pack_name'];
        $course_user_id   = $_POST['course_user_id'];
        $course_user_name = $_POST['course_user_name'];


        $query = "INSERT INTO `marketing_courses` (`course_pack_name`, `course_user_id`, `course_user_name`) 
        VALUES ('$course_pack_name','$course_user_id', '$course_user_name' )";

        $query_conn = mysqli_query ($connection, $query);

        if($query_conn)
        {
            echo '<script> alert("Data Saved"); </script>';
            header("Location :marketing_courses.php");

        }

        else
        {
            echo '<script> alert("Data  Not Saved"); </script>';
        }

    }




?>