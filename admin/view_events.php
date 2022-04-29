<?php 
    
    if(!isset($_SESSION['email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<div class="row"><!-- row 1 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <ol class="breadcrumb"><!-- breadcrumb begin -->
            <li class="active"><!-- active begin -->
                
                <i class="fa fa-dashboard"></i> Dashboard / View events
                
            </li><!-- active finish -->
        </ol><!-- breadcrumb finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 1 finish -->

<div class="row"><!-- row 2 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <div class="panel panel-default"><!-- panel panel-default begin -->
            <div class="panel-heading"><!-- panel-heading begin -->
               <h3 class="panel-title"><!-- panel-title begin -->
               
                   <i class="fa fa-tags"></i>  View events
                
               </h3><!-- panel-title finish --> 
            </div><!-- panel-heading finish -->
            
            <div class="panel-body"><!-- panel-body begin -->
                <div class="table-responsive"><!-- table-responsive begin -->
                    <table class="table table-striped table-bordered table-hover"><!-- table table-striped table-bordered table-hover begin -->
                        
                        <thead><!-- thead begin -->
                            <tr><!-- tr begin -->
                                <th> ID</th>
                                <th> Event Name</th>
                                <th> Venue </th>
                                <th> Details </th>
                                <th>NewsLetter</th>
                                <th> Date </th>
                                
                                <th colspan="2">  Action </th>
                            </tr><!-- tr finish -->
                        </thead><!-- thead finish -->
                        
                        <tbody><!-- tbody begin -->
                            
                            <?php 
          
                                $i=0;
                            
                                $get_event = "select * from events";
                                
                                $run_event = mysqli_query($con,$get_event);
          
                                while($row_event=mysqli_fetch_array($run_event)){
                                    
                                    $event_id = $row_event['id'];
                                    
                                    $event = $row_event['event'];
                                    
                                    $venue = $row_event['venue'];
                                    
                                    $details = $row_event['details'];
                                    
                                    $date = $row_event['date'];
                                    $newsletter = $row_event['newsletter'];
                                    
                                    $i++;
                            
                            ?>
                            
                            <tr><!-- tr begin -->
                                <td> <?php echo $i; ?> </td>
                                <td> <?php echo $event; ?> </td>
                                <td> <?php echo $venue; ?> </td>
                                <td> <?php echo $details; ?> </td>
                                <td> <?php echo $newsletter; ?> </td>
                                <td> <?php echo $date; ?> </td>
                                
                                
                                
                                <td> 
                                     
                                     <a href="index.php?delete_event=<?php echo $event_id; ?>">
                                     
                                        <i class="fa fa-trash-o"></i> Delete
                                    
                                     </a> 
                                     
                                </td>
                                <td> 
                                     
                                     <a href="index.php?edit_event=<?php echo $event_id; ?>">
                                     
                                        <i class="fa fa-pencil"></i> Edit
                                    
                                     </a> 
                                    
                                </td>
                            </tr><!-- tr finish -->
                            
                            <?php } ?>
                            
                        </tbody><!-- tbody finish -->
                        
                    </table><!-- table table-striped table-bordered table-hover finish -->
                </div><!-- table-responsive finish -->
            </div><!-- panel-body finish -->
            
        </div><!-- panel panel-default finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 2 finish -->
<button class="btn btn-sm btn-success" onclick="window.print();">PRINT!</button>

<?php } ?>