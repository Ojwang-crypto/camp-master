<?php 

    if(!isset($_SESSION['email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php 

    if(isset($_GET['edit_event'])){
        
        $edit_id = $_GET['edit_event'];
        
        $get_event = "select * from events where id='$edit_id'";
        
        $run_edit = mysqli_query($con,$get_event);
        
        $row_edit = mysqli_fetch_array($run_edit);
        
        $id = $row_edit['id'];
        
        $event = $row_edit['event'];
        
        $venue = $row_edit['venue'];
        
        $details = $row_edit['details'];
        
        $date = $row_edit['date'];
        
        
    }
        
        
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Edit Event </title>
</head>
<body>
    
<div class="row"><!-- row Begin -->
    
    <div class="col-lg-12"><!-- col-lg-12 Begin -->
        
        <ol class="breadcrumb"><!-- breadcrumb Begin -->
            
            <li class="active"><!-- active Begin -->
                
                <i class="fa fa-dashboard"></i> Dashboard / Edit Event
                
            </li><!-- active Finish -->
            
        </ol><!-- breadcrumb Finish -->
        
    </div><!-- col-lg-12 Finish -->
    
</div><!-- row Finish -->
       
<div class="row"><!-- row Begin -->
    
    <div class="col-lg-12"><!-- col-lg-12 Begin -->
        
        <div class="panel panel-default"><!-- panel panel-default Begin -->
            
           <div class="panel-heading"><!-- panel-heading Begin -->
               
               <h3 class="panel-title"><!-- panel-title Begin -->
                   
                   <i class="fa fa-money fa-fw"></i> Edit Event
                   
               </h3><!-- panel-title Finish -->
               
           </div> <!-- panel-heading Finish -->
           
           <div class="panel-body"><!-- panel-body Begin -->
               
               <form method="post" class="form-horizontal" enctype="multipart/form-data"><!-- form-horizontal Begin -->
                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Event </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input name="event" type="text" class="form-control" required value="<?php echo $event; ?>">
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
    
                   
                  <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> venue </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input name="venue" type="text" class="form-control" required value="<?php echo $venue; ?>">
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   
                  <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Details </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input name="details" type="text" class="form-control" required value="<?php echo $details; ?>">
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   
                  <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Date </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input name="event" type="date" class="form-control" required value="<?php echo $date; ?>">
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"></label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input name="update" value="Update" type="submit" class="btn btn-primary form-control">
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   
               </form><!-- form-horizontal Finish -->
               
           </div><!-- panel-body Finish -->
            
        </div><!-- canel panel-default Finish -->
        
    </div><!-- col-lg-12 Finish -->
    
</div><!-- row Finish -->
   
    <script src="js/tinymce/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea'});</script>
</body>
</html>


<?php 

if(isset($_POST['update'])){
    
    $event = $_POST['event'];
    $venue = $_POST['venue'];
    $details = $_POST['details'];
    //$date = $_POST['date'];
    
    
    $update_event = "update events set id='$id',event='$event',venue='$venue',details='$details',date='$date'";
    
    $run_event = mysqli_query($con,$update_event);
    
    if($run_event){
        
       echo "<script>alert('Your Event has been updated Successfully')</script>"; 
        
       echo "<script>window.open('index.php?view_events','_self')</script>"; 
        
    }
    
}

?>


<?php } ?>