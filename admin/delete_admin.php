<?php 
    
    if(!isset($_SESSION['email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php 

    if(isset($_GET['delete_admin'])){
        
        $id = $_GET['delete_admin'];
        
        $delete_event = "delete from admin where id='$id'";
        
        $run_delete = mysqli_query($con,$delete_event);
        
        if($run_delete){
            
            echo "<script>alert('Admin Deleted Succesfully')</script>";
            
            echo "<script>window.open('index.php?view_admin','_self')</script>";
            
        }
        
    }

?>

<?php } ?>