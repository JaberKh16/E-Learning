<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Student Data </title>
    <!-- CSS File -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    
    
    
    
</head>

<body>

 

<!-- Modal -->
<div class="modal fade" id="instructor_add_data" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  
  <div class="modal-dialog" role="document">
      
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Instructor Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        
  
<form action="insert_inst_data.php" method = "POST">     
 <div class="modal-body">
       
   
    <div class="form-group">
        
    <label>First Name</label>
    <input type="text" class="form-control"  name="user_first_name" >
        
    </div>  
      
      
    <div class="form-group">
        
    <label>Last Name</label>
    <input type="text" class="form-control"  name="user_last_name" >
        
    </div>  
      
      
      
    <div class="form-group">
        
    <label>User Name</label>
    <input type="text" class="form-control"  name="user_name" >
        
    </div>
   
    <div class="form-group">
        
    <label>Course Name</label>
    <input type="text" class="form-control"  name="course_name" >
        
    </div>  
      
      
      
      
  <div class="form-group">
    <label>Email address</label>
    <input type="email" class="form-control" placeholder="email@address"   name="user_email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
      
      
 <!-- <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control"  name="user_pass" >
  </div>
  -->
  
        
</div>    
        
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="insert" >Save it</button>
          
      </div>
      
  </form>
        
        
    </div>
      
      
  </div>
    
</div>
    
    
    
<!--####################################################################-->
<!-- Edit Pop Up Form -->    
    
<div class="modal fade" id="edit_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  
  <div class="modal-dialog" role="document">
      
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Instructor Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        
  
<form action="update_inst_data.php" method = "POST">     
 <div class="modal-body">
       
   
    <input type="hidden" name="update_id" id="update_id">
     
    <div class="form-group">
        
    <label>First Name</label>
    <input type="text" class="form-control"  name="user_first_name" id="update_first_name" >
        
    </div>  
      
      
    <div class="form-group">
        
    <label>Last Name</label>
    <input type="text" class="form-control"  name="user_last_name" id="update_last_name" >
        
    </div>  
      
      
      
    <div class="form-group">
        
    <label>User Name</label>
    <input type="text" class="form-control"  name="user_name" id="update_user_name" >
        
    </div>
   
    <div class="form-group">
        
    <label>Course Name</label>
    <input type="text" class="form-control"  name="course_name" id="update_course_name" >
        
    </div>  
      
      
      
      
  <div class="form-group">
    <label>Email address</label>
    <input type="email" class="form-control" placeholder="email@address"   name="user_email" id="update_email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
      
      
 <!-- <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control"  name="user_pass" >
  </div>
  -->
  
        
</div>    
        
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="update_data" >Update</button>
          
      </div>
      
  </form>
        
        
    </div>
      
      
  </div>
    
</div>
        
    
    
    
    
<!--####################################################################--> 
    
<!--####################################################################-->
<!-- Delete Pop Up Form -->    
    
<div class="modal fade" id="delete_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  
  <div class="modal-dialog" role="document">
      
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Instructor Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        
  
<form action="delete_inst_data.php" method = "POST">     
 <div class="modal-body">
       
   
    <input type="hidden" name="delete_id" id="delete_id"> 
     <h4> Do you want to delete?? </h4>
        
</div>    
        
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
        <button type="submit" class="btn btn-primary" name="delete_data" >Yes</button>
          
      </div>
      
  </form>
        
        
    </div>
      
      
  </div>
    
</div>
        

    

    
    
<!--####################################################################-->    
    
    
    

 <div class = "container">
     <div class="jumbotron ">
         <div class="card">
             <h2> Instructor Data </h2>
         </div>
         
         <div class="card">
             <div class="card-body">
                 <!-- Button trigger modal -->
                 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#instructor_add_data">
                     ADD DATA
                 </button>
                 
             </div>
         </div>
         
         
          <div class="card">
             <div class="card-body">                 
                 
                 
          <?php 
                 
             $connection = mysqli_connect("localhost:3312", "root", "");
                    
             $db = mysqli_select_db($connection, 'elearning_system');
                 
                   
             $query = "SELECT * FROM instructor";
             $query_conn = mysqli_query($connection, $query);
                 
           ?> 
                 
                <table class="table table-hover table-dark">
                  <thead>
                    
                      <tr>
                       <th scope="col">ID</th>
                       <th scope="col">First Name</th>
                       <th scope="col">Last Name</th>
                       <th scope="col">User Name</th>
                       <th scope="col">Course Name</th>
                       <th scope="col">Email</th>
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
                          
                          <td><?php echo $row['user_user_id'];  ?></td>
                          <td><?php echo $row['user_first_name'];   ?></td>
                          <td><?php echo $row['user_last_name'];  ?></td>
                          <td><?php echo $row['user_name']; ?></td>
                          <td><?php echo $row['course_name'];  ?></td>
                          <td><?php echo $row['user_email'];  ?></td>
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
    

    
    
<!-- Work With Delete Button For Editing(Deleting Data) -->        

<script>
    
    $(document).ready(function() {
        
        // on edit on click pop up the menu
        $('.deletebtn').on('click',function() {
            
            $('#delete_modal').modal('show');
           
            $tr =$(this).closest('tr');
            var data = $tr.children("td").map(function() {
                
                return $(this).text();
            }).get();
            
            console.log(data);
            
            $('#delete_id').val(data[0]);
            
         /* $('#update_first_name').val(data[1]);
            $('#update_last_name').val(data[2]);
            $('#update_user_name').val(data[3]);
            $('#update_course_name').val(data[4]);
            $('#update_email').val(data[5]);

          */



        });
        
        
    });
    
    
    
</script>    
    
    
    
    
<!-- Work With Edit Button For Editing(Updating Data) -->    
<script>
    
    $(document).ready(function() {
        
        // on edit on click pop up the menu
        $('.editbtn').on('click',function() {
            
            $('#edit_modal').modal('show');
            $tr =$(this).closest('tr');
            var data = $tr.children("td").map(function() {
                
                return $(this).text();
            }).get();
            
            console.log(data);
            
            $('#update_id').val(data[0]);
            $('#update_first_name').val(data[1]);
            $('#update_last_name').val(data[2]);
            $('#update_user_name').val(data[3]);
            $('#update_course_name').val(data[4]);
            $('#update_email').val(data[5]);





        });
        
        
    });
    
    
    
</script>
    
   
</body>
</html>
