<?php 
    
    if(!isset($_SESSION['email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php 

    if(isset($_GET['delete_event'])){
        
        $id = $_GET['delete_event'];
        
        $delete_event = "delete from events where id='$id'";
        
        $run_delete = mysqli_query($con,$delete_event);
        
        if($run_delete){
            
            echo "<script>alert('Event Deleted Succesfully')</script>";
            
            echo "<script>window.open('index.php?view_events','_self')</script>";
            
        }
        
    }

?>

<?php } ?>