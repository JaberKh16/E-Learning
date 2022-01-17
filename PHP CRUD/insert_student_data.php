<?php


        $connection = mysqli_connect("localhost:3312", "root", "");
        $db = mysqli_select_db($connection, 'elearning_system');
        

        if(isset($_POST['insert']))
        {
            
            
            $reg_stu_first_name = $_POST['user_first_name'];
            $reg_stu_last_name 	= $_POST['user_last_name'];
            $reg_stu_username	= $_POST['user_name'];
            $reg_stu_user_course = $_POST['course_name'];
            $reg_stu_user_email = $_POST['user_email'];
				
				
            $query = "INSERT INTO student(`user_first_name`, `user_last_name`, `user_name`, `course_name`, `user_email`)
            VALUES('$reg_stu_first_name ', '$reg_stu_last_name', '$reg_stu_username', '$reg_stu_user_course', '$reg_stu_user_email')";
            $query_conn = mysqli_query($connection, $query);
            
            if($query_conn)
            {
                echo '<script> alert("Data Saved"); </script>';
                header('Location : students_data.php');
            }
            
            else
            {
                 echo '<script> alert("Data Not Saved"); </script>';
            }
            
        }


?>