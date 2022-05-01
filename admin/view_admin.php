<?php 
    
    if(!isset($_SESSION['email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<div class="row"><!-- row 1 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <ol class="breadcrumb"><!-- breadcrumb begin -->
            <li class="active"><!-- active begin -->
                
                <i class="fa fa-dashboard"></i> Dashboard / View Admin
                
            </li><!-- active finish -->
        </ol><!-- breadcrumb finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 1 finish -->

<div class="row"><!-- row 2 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <div class="panel panel-default"><!-- panel panel-default begin -->
            <div class="panel-heading"><!-- panel-heading begin -->
               <h3 class="panel-title"><!-- panel-title begin -->
               
                   <i class="fa fa-tags"></i>  View Admin
                
               </h3><!-- panel-title finish --> 
            </div><!-- panel-heading finish -->
            
            <div class="panel-body"><!-- panel-body begin -->
                <div class="table-responsive"><!-- table-responsive begin -->
                    <table class="table table-striped table-bordered table-hover"><!-- table table-striped table-bordered table-hover begin -->
                        
                        <thead><!-- thead begin -->
                            <tr><!-- tr begin -->
                                <th> ID</th>
                                <th> First Name</th>
                                <th> Last Name </th>
                                <th> Email </th>
                                <th> password </th>
                                
                                <th colspan="2">  Action </th>
                            </tr><!-- tr finish -->
                        </thead><!-- thead finish -->
                        
                        <tbody><!-- tbody begin -->
                            
                            <?php 
          
                                $i=0;
                            
                                $get_admin = "select * from admin";
                                
                                $run_admin = mysqli_query($con,$get_admin);
          
                                while($row_event=mysqli_fetch_array($run_admin)){
                                    
                                    $admin_id = $row_event['id'];
                                    
                                    $fname = $row_event['fname'];
                                    
                                    $lname = $row_event['lname'];
                                    
                                    $email = $row_event['email'];
                                    
                                    $password = $row_event['password'];
                                    
                                    
                                    $i++;
                            
                            ?>
                            
                            <tr><!-- tr begin -->
                                <td> <?php echo $i; ?> </td>
                                <td> <?php echo $fname; ?> </td>
                                <td> <?php echo $lname; ?> </td>
                                <td> <?php echo $email; ?> </td>
                                <td> <?php echo $password; ?> </td>
                                
                                
                                
                                <td> 
                                     
                                     <a href="index.php?delete_admin=<?php echo $admin_id; ?>">
                                     
                                        <i class="fa fa-trash-o"></i> Delete
                                    
                                     </a> 
                                     
                                </td>
                                <!-- <td> 
                                     
                                     <a href="index.php?edit_event=<//?php echo $event_id; ?>">
                                     
                                        <i class="fa fa-pencil"></i> Edit
                                    
                                     </a> 
                                    
                                </td> -->
                            </tr><!-- tr finish -->
                            
                            <?php } ?>
                            
                        </tbody><!-- tbody finish -->
                        
                    </table><!-- table table-striped table-bordered table-hover finish -->
                </div><!-- table-responsive finish -->
            </div><!-- panel-body finish -->
            
        </div><!-- panel panel-default finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 2 finish -->


<?php } ?>