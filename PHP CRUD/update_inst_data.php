<?php


        $connection = mysqli_connect("localhost:3312", "root", "");
        $db = mysqli_select_db($connection, 'elearning_system');
        

        if(isset($_POST['update_data']))
        {
            
            $id = $_POST['update_id'];
            $reg_stu_first_name = $_POST['user_first_name'];
            $reg_stu_last_name 	= $_POST['user_last_name'];
            $reg_stu_username	= $_POST['user_name'];
            $reg_stu_user_course = $_POST['course_name'];
            $reg_stu_user_email = $_POST['user_email'];
				
				
            $query = "UPDATE instructor SET
              user_first_name  = '$reg_stu_first_name', 
              user_last_name   = '$reg_stu_last_name',
              user_name        = '$reg_stu_username',
              course_name      = '$reg_stu_user_course', 
              user_email       = '$reg_stu_user_email' 
              WHERE user_user_id = '$id'  ";
            $query_conn = mysqli_query($connection, $query);
            
            if($query_conn)
            {
                echo '<script> alert("Data Saved"); </script>';
                header('Location : instructor_data.php');
            }
            
            else
            {
                 echo '<script> alert("Data Not Saved"); </script>';
            }
            
        }


?>