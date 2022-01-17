<?php


        $connection = mysqli_connect("localhost:3312", "root", "");
        $db = mysqli_select_db($connection, 'elearning_system');
        

        if(isset($_POST['delete_books_data']))
        {
            
            $id = $_POST['delete_books_id'];
				
				
            $query = "DELETE FROM web_development
                      WHERE web_pack_id = '$id'  ";
            $query_conn = mysqli_query($connection, $query);
            
            if($query_conn)
            {
                echo '<script> alert("Data Saved"); </script>';
                header('Location : web_development_books.php');
            }
            
            else
            {
                 echo '<script> alert("Data Not Saved"); </script>';
            }
            
        }


?>