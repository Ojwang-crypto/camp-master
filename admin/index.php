<?php 

    session_start();
    include("includes/db.php");
    
    if(!isset($_SESSION['email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{
        
        $admin_session = $_SESSION['email'];
        
        $get_admin = "select * from admin where email='$admin_session'";
        
        $run_admin = mysqli_query($con,$get_admin);
        
        $row_admin = mysqli_fetch_array($run_admin);
        
        $admin_id = $row_admin['id'];
        
        $admin_name = $row_admin['fname'];
        
        $admin_email = $row_admin['email'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Camp Admin Area</title>
    <link rel="stylesheet" href="css/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div id="wrapper"><!-- #wrapper begin -->
       
       <?php include("includes/sidebar.php"); ?>
       
        <div id="page-wrapper"><!-- #page-wrapper begin -->
            <div class="container-fluid"><!-- container-fluid begin -->
                
                <?php


                
                    if(isset($_GET['dashboard'])){
                        
                        include("dashboard.php");
                        
                }   
                if(isset($_GET['view_events'])){//edited
                        
                        include("view_events.php");
                        
                }   if(isset($_GET['add_events'])){
                        
                        include("add_events.php");
                        
                }   if(isset($_GET["add_newsletter"])){
                        
                        include("add_newsletter.php");
                        
                }    if(isset($_GET['view_newsletter'])){
                        
                        include("view_newsletter.php");
                        
                }   if(isset($_GET['delete_newsletter'])){
                        
                        include("delete_newsletter.php");
                        
                }   if(isset($_GET['delete_event'])){
                        
                        include("delete_event.php");
                        
                }   if(isset($_GET['edit_event'])){
                        
                        include("edit_event.php");
                        
                }   if(isset($_GET['manage_admin'])){
                        
                        include('manage_admin.php');
                        
                }  if(isset($_GET['view_admin'])){
                        
                        include('view_admin.php');
                        
                }  if(isset($_GET['delete_admin'])){
                        
                        include('delete_admin.php');
                
                }
               
        
                ?>
                
            </div><!-- container-fluid finish -->
        </div><!-- #page-wrapper finish -->
    </div><!-- wrapper finish -->

<script src="js/jquery-331.min.js"></script>     
<script src="js/bootstrap-337.min.js"></script>       
</body>
</html>


<?php } ?>