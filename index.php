<?php

  session_start();
    include("admin/includes/db.php");
    

?>
<!DOCTYPE html>
<html lang="en">
  


<!-- Mirrored from campdraftingtasmania.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Apr 2022 07:20:37 GMT -->
<head>
  <!-- basic -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- mobile metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="initial-scale=1, maximum-scale=1">
  <!-- site metas -->
  <title>Campdrafting Tasmania</title>
  <meta name="keywords" content="Campdrafting, Tasmania, Rodeo, Hosrses, Horseriding, riding">
  <meta name="description" content="Campdrafting Tamsmania">
  <meta name="author" content="">
  <!-- fevicon -->
  <link rel="icon" href="images/fevicon.html" type="image/gif" />
  <!-- bootstrap css -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- style css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- Responsive-->
  <link rel="stylesheet" href="css/responsive.css">  
  <!-- Scrollbar Custom CSS -->
  <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
  <!-- Tweaks for older IEs-->
  <link rel="stylesheet" href="../netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
  <link rel="stylesheet" href="../cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">
  <!-- loader  -->
  <div class="loader_bg">
    <div class="loader"><img src="images/loading.gif" alt="#" /></div>
  </div>
  <!-- end loader -->
  <!-- header -->
  <header>
    <!-- header inner -->
    <div class="header-top">
      <div class="header">
        <div class="container-fluid">
          <div class="row">
            <div class="col-xl-2 col-lg-4 col-md-4 col-sm-3 col logo_section">
              <div class="full">
                <div class="center-desk">
                  <div class="logo">
                    <a href="index-2.html"><img src="images/logo.png" alt="#" /></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-10 col-lg-8 col-md-8 col-sm-9">
              <div class="header_information">
               <div class="menu-area">
                <div class="limit-box">
                  <nav class="main-menu ">
                    <ul class="menu-area-main">
                      <li class="active"> <a href="index-2.html">Home</a> </li>
                      <li> <a href="#about">Events</a> </li>
                     <!-- <li> <a href="#important">News & Downloads</a> </li>-->
                      <li> <a href="#courses">Valued Sponsors </a> </li>
                     <!-- <li> <a href="#learn">Downloads</a> </li>-->
                      <li> <a href="#contact">Contact</a> </li>
                     </ul>
                   </nav>
                 </div>
               </div>             
             </div>
           </div>
         </div>
       </div>
     </div>
     <!-- end header inner -->

     <!-- end header -->
     <section class="slider_section">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">

            <div class="container-fluid padding_dd">
              <div class="carousel-caption">
                <div class="row">
                  <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                    <div class="text-bg">
                      <h1>Welcome to Campdrafting Tasmania Inc</h1>
                      <p>CAMPDRAFTING IS A UNIQUE AND VERY POPULAR SPORT INVOLVING A HORSE AND A RIDER WORKING A CATTLE.</p>
                    </div>
                  </div>
                  <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
                    <div class="images_box">
                      <figure><img src="images/Ebony3.jpg">
                      <figcaption style="color:Tomato;">
                          Photocredits: Ebony Rundle
                      </figcaption>
                      </figure>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">

            <div class="container-fluid padding_dd">
              <div class="carousel-caption">
                <div class="row">
                  <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                    <div class="text-bg">
                      <!--<h1>Events are</h1>
                      <p>Juniors (Riders 8yrs - u 13)</p>
                      <p>Juveniles (Riders 13yrs - u 17)</p>
                      <p>Futurity, Novice, Ladies, Mens & Open classes for adults</p>   -->
                       <h1>Finals Qualifications</h1>
                      <p>You need to have enetered the event you wish to qualify in both Hamilton and Powranna. All challengesare qualifiers for the Maiden Draft. Open Draft is free to enter if you have competed at each venue. Only one hamilton event remaining, so dont miss out!</p>
                     
                    </div>
                  </div>
                  <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
                    <div class="images_box">
                      <figure><img src="images/Ebony3.jpg">
                      <figcaption style="color:Tomato;">
                          Photocredits: Ebony Rundle
                      </figcaption>
                      </figure>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

</section>
</div>
</header>



<!-- about  -->
<div id="about" class="about">
  <div class="container">
    <div class="row">
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
        <div class="about-box">
          <h2>EVENTS<strong class="yellow">2022</strong></h2>
          <style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;}
.tg td{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
  overflow:hidden;padding:10px 5px;word-break:normal;}
.tg th{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
  font-weight:normal;overflow:hidden;padding:10px 5px;word-break:normal;}
.tg .tg-0lax{text-align:left;vertical-align:top}
</style>
<table class="table">
  <thead>
    <tr>
      <th>#</th>
      <th>Date</th>
      <th>Event</th>
      <th>Venue</th>
      <th>Details</th>
    </tr>
  </thead>
  <tbody><!-- tbody begin -->
                            
                            <?php 
          
                                $i=0;
                            
                                $get_event = "select * from events order by 1 DESC LIMIT 0,3";
                                
                                $run_event = mysqli_query($con,$get_event);
          
                                while($row_event=mysqli_fetch_array($run_event)){
                                    
                                    $event_id = $row_event['id'];
                                    
                                    $event = $row_event['event'];
                                    
                                    $venue = $row_event['venue'];
                                    
                                    $details = $row_event['details'];
                                    
                                    $date = $row_event['date'];
                                    
                                    
                                    
                                    $i++;
                            
                            ?>
                            
                            <tr><!-- tr begin -->
                                <td> <?php echo $i; ?> </td>
                                <td> <?php echo $date; ?> </td>
                                <td> <?php echo $event; ?> </td>
                                <td> <?php echo $venue; ?> </td>
                                <td> <?php echo $details; ?> </td>
                               
                                
                            </tr><!-- tr finish -->
                            
                            <?php } ?>
                            
                        </tbody><!-- tbody finish -->
</table>
        
        </div>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
        <div class="about-box">
          <figure><img src="images/about.jpg" alt="#" />
          <figcaption style="color:#000;">
                          Photocredits: Ebony Rundle
                      </figcaption>
          </figure>
        </div>
      </div>
    </div>

  </div>
</div>
<!-- end abouts -->


<!-- our -->


<div id="important" class="important">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="titlepage">
          <h2>Newsletters <strong class="yellow"></strong></h2>
          <span>Download Latest Newsletter Here</span>

              

            <table class ="table">
                <thead>

                  <tr>
                    <th>#</th>
                    <th>File</th>
                    <th>Action</th>
                  </tr>

                </thead>

                <tbody>
              <?php
                 $db = new PDO("mysql:host=localhost;dbname=camp", "root", "");

                  $stmt = $db -> prepare("SELECT * FROM newsletter order by 1 DESC LIMIT 0,1");
                  $stmt->execute();
                 while($row = $stmt->fetch()){
             ?>

              <tr>
                <td> <?php echo $row["id"]?></td>
                <td> <?php echo $row["name"]?></td>
                <td><a href="download.php?id=<?php echo $row["id"]?>" class="btn btn-primary">Download</a></td>
             </tr>

             <?php
                }
              ?>

           </tbody>

       </table>


         
          
        </div>
      </div>
    </div>
  </div>
  <div class="important_bg">
    <div class="container">
      <div class="row">
        <div class="col col-xs-12">
          <div class="important_box">
            <span>Entry Form</span>
          </div>
        </div>
        <div class="col col-xs-12">
          <div class="important_box">
            <span>Registration Form</span>
          </div>
        </div>
        <div class="col col-xs-12">
          <div class="important_box">
            <span>Other Form</span>
          </div>
        </div>
        <div class="col col-xs-12">
          <div class="important_box">
            <span>Other Form</span>
          </div>
        </div>
        <div class="col col-xs-12">
          <div class="important_box">
            <h3>10+</h3>
            <span>countries</span>
          </div>
        </div>
      </div>
      
    </div>
  </div>
</div>


<!-- end our -->
<!-- Courses -->
<div id="courses" class="Courses">
  <div class="container-fluid">
  	<div class="col-md-12">
        <div class="titlepage">
          <h2>SPONSORS </h2>
        </div>
      </div>
    <div class="row">


         
              
              <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                <div class="box_my">
                  <figure><img src="logos/Agspand%20Feedchar%20Combined%203%20cm.jpg"></figure>
                
                </div>
              </div>

              <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                <div class="box_my">
                  <figure><img src="logos/ALLGOODS.jpg"></figure>
                
                </div>
              </div>
              <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                <div class="box_my">
                  <figure><img src="logos/Animal%20Tucker%20Box.jpg"></figure>
                 <!-- <div class="overlay">
                    <h3>Data Structures</h3>
                    <p>It is a long established fact that a reader will be distracted by the readable content o</p>
                  </div>-->
                </div>
              </div>


              <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                <div class="box_my">
                  <figure><img src="logos/AQHA_motherbrand%20700dpi.jpg"></figure>
                 
                </div>
              </div>
              
              <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                <div class="box_my">
                  <figure><img src="logos/ashs.gif"></figure>
                 
                </div>
              </div>
              <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                <div class="box_my">
                  <figure><img src="logos/BG%20Firearms.jpg"></figure>
                 
                </div>
              </div>

              <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                <div class="box_my">
                  <figure><img src="logos/blundstone.png"></figure>
                
                </div>
              </div>

              <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                <div class="box_my">
                  <figure><img src="logos/Bothwell%20Garage.jpg"></figure>              
                </div>
              </div>

              <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                <div class="box_my">
                  <figure><img src="logos/Bradleys%20Arena.jpg"></figure>              
                </div>
              </div>

              <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                <div class="box_my">
                  <figure><img src="logos/Central%20Highland%20Pharmacy.jpg"></figure>              
                </div>
              </div>

              <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                <div class="box_my">
                  <figure><img src="logos/CH%20Council.png"></figure>              
                </div>
              </div>

              <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                <div class="box_my">
                  <figure><img src="logos/cmw.jpg"></figure>              
                </div>
              </div>

              <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                <div class="box_my">
                  <figure><img src="logos/CPE%20LOGO%20new.jpg"></figure>              
                </div>
              </div>

              <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                <div class="box_my">
                  <figure><img src="logos/Cressy%20Chaff.jpg"></figure>              
                </div>
              </div>

              <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                <div class="box_my">
                  <figure><img src="logos/Curringa%20Farm.jpg"></figure>              
                </div>
              </div>

              <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                <div class="box_my">
                  <figure><img src="logos/Elders%20Logo%204%20colour%20stand%20alone-cmyk.jpg"></figure>              
                </div>
              </div>

              <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                <div class="box_my">
                  <figure><img src="logos/Feedlot%20Tasmania.jpg"></figure>              
                </div>
              </div>

              <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                <div class="box_my">
                  <figure><img src="logos/Fehlbergs%20Produce.jpg"></figure>              
                </div>
              </div>

              <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                <div class="box_my">
                  <figure><img src="logos/GA%20%26%20AT%20Woolbuyers.jpg"></figure>              
                </div>
              </div>

              <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                <div class="box_my">
                  <figure><img src="logos/gift_voucher%20SADDLEWORLD.jpg"></figure>              
                </div>
              </div>

              <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                <div class="box_my">
                  <figure><img src="logos/JGM%20Metal%20Art.png"></figure>              
                </div>
              </div>

              <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                <div class="box_my">
                  <figure><img src="logos/Ken%20Green.jpg"></figure>              
                </div>
              </div>

              <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                <div class="box_my">
                  <figure><img src="logos/Latrobe%20Saddlery.jpg"></figure>              
                </div>
              </div>

              <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                <div class="box_my">
                  <figure><img src="logos/Macs_Equine_logo_gold.jpg"></figure>              
                </div>
              </div>

              <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                <div class="box_my">
                  <figure><img src="logos/McShane%27s%20Chaff.jpg"></figure>              
                </div>
              </div>

              <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                <div class="box_my">
                  <figure><img src="logos/MidlandsTractorsLogo-Small.png"></figure>              
                </div>
              </div>


     <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                <div class="box_my">
                  <figure><img src="logos/NEW%20CPE%20logo.pdf"></figure>              
                </div>
              </div>

              <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                <div class="box_my">
                  <figure><img src="logos/Rachael%20Treasure.jpg"></figure>              
                </div>
              </div>

              <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                <div class="box_my">
                  <figure><img src="logos/Rainbirds%20Transport.jpg"></figure>              
                </div>
              </div>

              <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                <div class="box_my">
                  <figure><img src="logos/roberts.gif"></figure>              
                </div>
              </div>

              <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                <div class="box_my">
                  <figure><img src="logos/Roderick%20Le%20Fevre.jpg"></figure>              
                </div>
              </div>

              <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                <div class="box_my">
                  <figure><img src="logos/Ryan%20Contracting%20Logo.bmp"></figure>              
                </div>
              </div>

              <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                <div class="box_my">
                  <figure><img src="logos/SADDLEWORLD%20LOGO.jpg"></figure>              
                </div>
              </div>

              <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                <div class="box_my">
                  <figure><img src="logos/Saddleworld.jpg"></figure>              
                </div>
              </div>

              <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                <div class="box_my">
                  <figure><img src="logos/Scoot%20Boot.jpg"></figure>              
                </div>
              </div>

              <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                <div class="box_my">
                  <figure><img src="logos/seedhouse_master_pantone-476-Converted-300x192.png"></figure>              
                </div>
              </div>

              <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                <div class="box_my">
                  <figure><img src="logos/Simon%20Martin%20-%20Sticker%2080mm%20circle.jpg"></figure>              
                </div>
              </div>

              <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                <div class="box_my">
                  <figure><img src="logos/SportnRecLOGO.jpg"></figure>              
                </div>
              </div>

              <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                <div class="box_my">
                  <figure><img src="logos/Sports%20Hut.jpg"></figure>              
                </div>
              </div>

              <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                <div class="box_my">
                  <figure><img src="logos/Spreyton%20Cider%20Co.jpg"></figure>              
                </div>
              </div>

              <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                <div class="box_my">
                  <figure><img src="logos/spreyton%20cider.jpg"></figure>              
                </div>
              </div>

              <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                <div class="box_my">
                  <figure><img src="logos/St%20Johns%20Ambulance%20logo.gif"></figure>              
                </div>
              </div>

              <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                <div class="box_my">
                  <figure><img src="logos/stqhalogo.bmp"></figure>              
                </div>
              </div>

              <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                <div class="box_my">
                  <figure><img src="logos/Strathroy%20Pastoral.png"></figure>              
                </div>
              </div>

              <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                <div class="box_my">
                  <figure><img src="logos/Tania%20Burbury%20Leather.jpg"></figure>              
                </div>
              </div>

              <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                <div class="box_my">
                  <figure><img src="logos/Tasmania%20Feedlot.jpg"></figure>              
                </div>
              </div>

              <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                <div class="box_my">
                  <figure><img src="logos/tasracing.jpg"></figure>              
                </div>
              </div>

              <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                <div class="box_my">
                  <figure><img src="logos/The%20Sausage%20Shop.jpg"></figure>              
                </div>
              </div>

              <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                <div class="box_my">
                  <figure><img src="logos/Thorndene%20Saddlery.jpg"></figure>              
                </div>
              </div>

              <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                <div class="box_my">
                  <figure><img src="logos/TP%20JONES%26CO.jpg"></figure>              
                </div>
              </div>

              <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                <div class="box_my">
                  <figure><img src="logos/Website%20new%20Logo.png"></figure>              
                </div>
              </div>

              <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                <div class="box_my">
                  <figure><img src="logos/Wings.jpg"></figure>              
                </div>
              </div>

               <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                <div class="box_my">
                  <figure><img src="logos/WINGUL.jpg"></figure>              
                </div>
              </div>
              
                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                 <div class="box_my">
                  <figure><img src="logos/additions/1.jpg"></figure>              
                </div>
              </div>              
                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                 <div class="box_my">
                  <figure><img src="logos/additions/2.jpg"></figure>              
                </div>
              </div>
                            
                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                 <div class="box_my">
                  <figure><img src="logos/additions/3.jpg"></figure>              
                </div>
              </div>
                            
                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                 <div class="box_my">
                  <figure><img src="logos/additions/4.jpg"></figure>              
                </div>
              </div>
                            
                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                 <div class="box_my">
                  <figure><img src="logos/additions/5.jpg"></figure>              
                </div>
              </div>
                            
                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                 <div class="box_my">
                  <figure><img src="logos/additions/6.jpg"></figure>              
                </div>
              </div>
                            
                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                 <div class="box_my">
                  <figure><img src="logos/additions/7.png"></figure>              
                </div>
              </div>
                            
                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                 <div class="box_my">
                  <figure><img src="logos/additions/8.jpg"></figure>              
                </div>
              </div>
                            
                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                 <div class="box_my">
                  <figure><img src="logos/additions/9.jpg"></figure>              
                </div>
              </div>
                            
                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                 <div class="box_my">
                  <figure><img src="logos/additions/10.jpg"></figure>              
                </div>
              </div>
                            
                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                 <div class="box_my">
                  <figure><img src="logos/additions/11.jpg"></figure>              
                </div>
              </div>
                            
                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                 <div class="box_my">
                  <figure><img src="logos/additions/12.jpg"></figure>              
                </div>
              </div>
                            
                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                 <div class="box_my">
                  <figure><img src="logos/additions/13.jpg"></figure>              
                </div>
              </div>              
                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                 <div class="box_my">
                  <figure><img src="logos/additions/14.jpg"></figure>              
                </div>
              </div>
              

              
            
    
  </div>

<!-- end Courses -->

<!-- contact -->
<!--
<div id="contact" class="contact">
  <div class="container-fluid padding_left2">
    <div class="white_color">
      <div class="row">

        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
          <div id="map">
          </div>

        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">

          <form class="contact_bg">
            <div class="row">
              <div class="col-md-12">
                <div class="titlepage">
                  <h2>Contact <strong class="yellow">us</strong></h2>
                </div>
                <div class="col-md-12">
                  <input class="contactus" placeholder="Your Name" type="text" name="Your Name">
                </div>
                <div class="col-md-12">
                  <input class="contactus" placeholder="Your Email" type="text" name="Your Email">
                </div>
                <div class="col-md-12">
                  <input class="contactus" placeholder="Your Phone" type="text" name="Your Phone">
                </div>
                <div class="col-md-12">
                  <textarea class="textarea" placeholder="Message" type="text" name="Message"></textarea>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                  <button class="send">Send</button>
                </div>
              </div>
            </form>
          </div>
        </div>

      </div>
    </div>-->

    <!-- end contact -->

    <!--  footer -->
    <footr>
      <div class="footer " id="contact">
        <div class="container">
          <div class="row">
<!--
            <div class="col-md-12">
              <form class="news">
                <input class="newslatter" placeholder="Email" type="text" name=" Email">
                <button class="submit">Subscribe</button>
              </form>
            </div>
            <div class="col-md-12">
              <h2>Newsletter</h2>
              <span>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in  </span>
            </div>-->
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 ">
              <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 ">
                  <div class="address">
                    <h3>Contact us </h3>
                    <ul class="loca">
                        <!--
                      <li>
                        <a href="#"><img src="icon/loc.png" alt="#" /></a>Hobart 7000
                        <br>Australia </li>
                        -->
                        <li>
                          <a href="#"><img src="icon/email.png" alt="#" /></a>glklucas@netspace.net.au </li>
                          <!--
                          <li>
                            <a href="#"><img src="icon/call.png" alt="#" /></a>0458 </li>
                            -->
                          </ul>
                          <ul class="social_link">
                            <li><a href="https://www.facebook.com/groups/361502033979551/"><img src="icon/fb.png"></a></li>
                           <!-- <li><a href="#"><img src="icon/tw.png"></a></li>
                            <li><a href="#"><img src="icon/lin(2).png"></a></li>
                            <li><a href="#"><img src="icon/instagram.png"></a></li>-->
                          </ul>

                        </div>
                      </div><!--
                      <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="address">
                          <h3>Courses</h3>
                          <ul class="Menu_footer">
                            <li class="active"> <a href="#">Masters Degree</a> </li>
                            <li><a href="#">Post GraduateU</a> </li>
                            <li><a href="#">Ndergraduate</a> </li>
                            <li><a href="#">Engineering</a> </li>
                            <li><a href="#">Ph.D Degree</a> </li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="address">
                          <h3>Information</h3>
                          <ul class="Links_footer">
                            <li class="active"><a href="#">Campus Tour</a> </li>
                            <li><a href="#">Student Lifes</a> </li>
                            <li><a href="#">Cholarship</a> </li>
                            <li><a href="#"> Admission</a> </li>
                            <li><a href="#">Leadership</a> </li>
                          </ul>
                        </div>
                      </div>-->

                      <div class="col-lg-3 col-md-6 col-sm-6 ">
                        <div class="address">
                          <a href="index-2.html"> <img src="images/logo.jpg" alt="logo"></a>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>

              </div>
            <!--  <div class="copyright">
                <div class="container">
                  <p>Copyright © 2019 Design by <a href="https://html.design/">F </a></p>
                </div>
              </div>-->
            </div>
          </footr>
          <!-- end footer -->
          <!-- Javascript files-->
          <script src="js/jquery.min.js"></script>
          <script src="js/popper.min.js"></script>
          <script src="js/bootstrap.bundle.min.js"></script>
          <script src="js/jquery-3.0.0.min.js"></script>
          <script src="js/plugin.js"></script>
          <!-- sidebar -->
          <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
          <script src="js/custom.js"></script>
          <script src="cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.html"></script>


          <script>
// This example adds a marker to indicate the position of Bondi Beach in Sydney,
// Australia.
function initMap() {
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 11,
    center: {
      lat: 40.645037,
      lng: -73.880224
    },
  });

  var image = 'images/maps-and-flags.html';
  var beachMarker = new google.maps.Marker({
    position: {
      lat: 40.645037,
      lng: -73.880224
    },
    map: map,
    icon: image
  });
}
</script>
<!-- google map js -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&amp;callback=initMap"></script>
<!-- end google map js -->



</body>


<!-- Mirrored from campdraftingtasmania.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Apr 2022 07:35:25 GMT -->
</html>