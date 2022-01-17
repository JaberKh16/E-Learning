<?php


        $connection = mysqli_connect("localhost:3312", "root", "");
        $db = mysqli_select_db($connection, 'elearning_system');
        

        if(isset($_POST['delete_course_data']))
        {
            
            $id = $_POST['delete_course_id'];
				
				
            $query = "DELETE FROM math_courses
                      WHERE course_pack_id = '$id'  ";
            $query_conn = mysqli_query($connection, $query);
            
            if($query_conn)
            {
                echo '<script> alert("Data Saved"); </script>';
                header('Location : math_courses.php');
            }
            
            else
            {
                 echo '<script> alert("Data Not Saved"); </script>';
            }
            
        }


?>