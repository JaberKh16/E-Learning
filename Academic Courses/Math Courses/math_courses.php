

<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Math  Course </title>
    <!-- CSS File -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    
    
    
    
</head>

<body>



<!-- Modal -->
<div class="modal fade" id="math_course_data" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Course Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>


 <form action = "insert_course_math_data.php" method = "POST">
      
    <div class="modal-body">
    
 
        <div class="form-group">

          <label> Course Name </label>
          <input type="text" class="form-control"  name="course_pack_name" placeholder = "Enter Course Name">
    
        </div>
        <div class="form-group">

          <label> User ID </label>
          <input type="text" class="form-control" name="course_user_id" placeholder = "User ID">

        </div>

        <div class="form-group">

          <label> User Name </label>
          <input type="text" class="form-control" name="course_user_name" placeholder = "User Name">

        </div>
  


         </div>
           
           <div class="modal-footer">

             <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
             <button type="submit" name = "insert_course" class="btn btn-primary">Save Data </button>

           </div>

 </form>


    </div>
  </div>
</div>


<!--####################################################################-->
<!-- Edit Pop Up Form -->    
    
<div class="modal fade" id="update_model" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  
  <div class="modal-dialog" role="document">
      
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Course Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        
  
<form action = "update_course_math_data.php" method = "POST">
      
      <div class="modal-body">
        
         <input type="hidden"  name="course_pack_id" id ="update_course_pack_id" > 
         <div class="form-group">
 
           <label> Course Name </label>
           <input type="text" class="form-control"  name="course_pack_name" id ="update_course_pack_name">
     
         </div>
         <div class="form-group">
 
           <label> User ID </label>
           <input type="text" class="form-control" name="course_user_id" id ="update_user_id" >
 
         </div>
 
         <div class="form-group">
 
           <label> User Name </label>
           <input type="text" class="form-control" name="course_user_name" id ="update_user_name">
 
         </div>
   
 
 
          </div>
            
            <div class="modal-footer">
 
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" name = "update_course" class="btn btn-primary">Update Data </button>
 
            </div>
 
</form>
 
        
        
    </div>
      
      
  </div>
    
</div>
        
    
  <!-- ##################################################################################################-->  


 <!--####################################################################-->
    <!-- Delete Pop Up Form -->

<div class="modal fade" id="delete_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

    <div class="modal-dialog" role="document">

        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Delete Course Data</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
          </div>


         <form action="delete_course_math_data.php" method="POST">
            <div class="modal-body">


                <input type="hidden" name="delete_course_id" id="delete_course_id">
                <h4> Do you want to delete?? </h4>

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                <button type="submit" class="btn btn-primary" name="delete_course_data">Yes</button>

            </div>

         </form>


        </div>


    </div>

</div>






<!--####################################################################-->






<div class="container">

    <div class="jumbotron">

       <div class="card">
       
             <h2> Programming  Language Course <h2>
       
       </div>

       <div class="card">
       
         <div class="card-body">

                <!-- Button trigger modal -->
                 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#math_course_data">
                     Add Course Data
                 </button>
                  
          </div>
       
       </div>

       <div class="card">
       
         <div class="card-body">
            
                    
          <?php 
                 
                 $connection = mysqli_connect("localhost:3312", "root", "");
                        
                 $db = mysqli_select_db($connection, 'elearning_system');
                     
                       
                 $query = "SELECT * FROM math_courses";
                 $query_conn = mysqli_query($connection, $query);
                     
               ?> 
                     
                    <table class="table table-hover table-dark">
                      <thead>
                        
                          <tr>
                           <th scope="col"> Course ID</th>
                           <th scope="col"> Course Name</th>
                           <th scope="col"> User ID</th>
                           <th scope="col"> User Name</th>
                           
                           <th scope="col">Edit Operation</th>
                           <th scope="col">Delete Operation</th>
    
                              
                          </tr>
                          
                      </thead>
                        
                <?php
                     
                    if($query_conn)
                    {
                            
                        foreach($query_conn as $row)
                       
                        {
                            
                ?>     
                        
                        
      
                      <tbody>
    
                          <tr>
                              
                              <td><?php echo $row['course_pack_id'];  ?></td>
                              <td><a href ="#"><?php echo $row['course_pack_name']; ?> </a></td>
                              <td><?php echo $row['course_user_id'];  ?></td>
                              <td><?php echo $row['course_user_name']; ?></td>
                              
                              <td>
                                  
                                  <button type="button" class="btn btn-success editbtn "> Edit </button>
                                  
                                  
                              </td>
                              
                              <td>
                                  
                                  <button type="button" class="btn btn-danger deletebtn "> Delete </button>
                                  
                                  
                              </td>
                                                
    
                              
                          </tr>
        
                          
                          
                     </tbody>
                        
            <?php
                     
                    }
                 }
                     
                 else
                 {
                    echo "No Record Found";
                 }
                              
                     
            ?>    
                        
                        
                        
                        
                 </table> 
                     
       
       
       
       
        </div>
       

       
       </div>



    </div>




</div>





<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


<!-- Work With Edit Button For Editing(Updating Data) -->    
<script>
    
    $(document).ready(function() {
        
        // on edit on click pop up the menu
        $('.editbtn').on('click',function() {
            
            $('#update_model').modal('show');
            $tr =$(this).closest('tr');
            var data = $tr.children("td").map(function() {
                
                return $(this).text();
            }).get();
            
            console.log(data);
            
            $('#update_course_pack_id').val(data[0]);
            $('#update_course_pack_name').val(data[1]);
            $('#update_user_id').val(data[2]);
            $('#update_user_name').val(data[3]);
           



        });
        
        
    });
    
    
    
</script>


   <!-- Work With Delete Button For Editing(Deleting Data) -->

    <script>
        $(document).ready(function() {

            // on edit on click pop up the menu
            $('.deletebtn').on('click', function() {

                $('#delete_modal').modal('show');

                $tr = $(this).closest('tr');
                var data = $tr.children("td").map(function() {

                    return $(this).text();
                }).get();

                console.log(data);

                $('#delete_course_id').val(data[0]);

                /* $('#update_first_name').val(data[1]);
                   $('#update_last_name').val(data[2]);
                   $('#update_user_name').val(data[3]);
                   $('#update_course_name').val(data[4]);
                   $('#update_email').val(data[5]);

                 */



            });


        });

    </script>




<body>
</html>
    
    