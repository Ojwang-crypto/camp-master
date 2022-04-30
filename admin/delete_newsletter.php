<?php 
    
    if(!isset($_SESSION['email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php 

    if(isset($_GET['delete_newsletter'])){
        
        $id = $_GET['delete_newsletter'];
        
        $delete_event = "delete from newsletter where id='$id'";
        
        $run_delete = mysqli_query($con,$delete_event);
        
        if($run_delete){
            
            echo "<script>alert('Newsletter Deleted Succesfully')</script>";
            
            echo "<script>window.open('index.php?view_newsletter','_self')</script>";
            
        }
        
    }

?>

<?php } ?>