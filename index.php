<?php
$con = mysqli_connect("localhost", "root", "mysql", "data_store");
$msg = '';
if(!$con){
	$msg .= '<h3 style="color:#ff0000;">Error # Unable to Connect</h3>';
}

if(isset($_POST['name'])){
	if($_POST['edit_sno']==''){
	$sql = 'insert into data (name, mobnum, address,des) values ("'.$_POST['name'].'", "'.$_POST['mobnum'].'","'.$_POST['address'].'","'.$_POST['des'].'")';
	}
	else{
		$sql = 'update data set name="'.$_POST['name'].'", mobnum="'.$_POST['mobnum'].'", address="'.$_POST['address'].'",des="'.$_POST['des'].'" where name="'.$_POST['edit_sno'].'"';
	}
	mysqli_query($con, $sql);
	if(mysqli_error($con)){
		$msg .= '<h3 style="color:#ff0000;">Error # 1 : '.mysqli_error($con).' >> '.$sql;
	}
	else{
		$msg .= '<h3 style="color:#00FF00;">Data Inserted</h3>';
	}
	
}

if(isset($_GET['del'])){
	$sql = 'delete from data where name="'.$_GET['del'].'"';
	mysqli_query($con, $sql);
	if(mysqli_error($con)){
		$msg .= '<h3 style="color:#ff0000;">Error in deleting . '.mysqli_error($con).' >> '.$sql.'</h3>';
	}
	else{
		$msg .= '<h3 style="color:#00ff00;">Deleted</h3>';
	}
}
if(isset($_GET['edit'])){
	$sql = 'select * from data where name="'.$_GET['edit'].'"';
	
	$row = mysqli_fetch_assoc(mysqli_query($con, $sql));
}

?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title> College Camp Donation </title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- owl carousel style -->
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.2.4/assets/owl.carousel.min.css" />
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- fonts -->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,700&display=swap" rel="stylesheet">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    
   </head>
   <body>
      <div class="nikhil"> 
      <!--header section start -->
      <div class="header_section">
         <div class="header_bg">
            <div class="container">
               <nav class="navbar navbar-expand-lg navbar-light bg-light">
                  <a class="logo" href="index.html"><img src="images/1.png" height="110px" width="110px"></a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                           <a class="nav-link" href="index.html"><b> Home </b> </a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="about.html"><b>About </b></a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="services.html"> <b> Gallery </b> </a>
                        </li>
                                   <li class="nav-item">
                           <a class="nav-link" href="contact.html"> <b> Contact Us </b></a>
                        </li>
                     </ul>
                     <div class="call_section">
                        
                     </div>
                  </div>
               </nav>
            </div>
         </div>
      <!--banner section start -->
      <div class="banner_section layout_padding">
         <div id="my_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <div class="banner_taital_main">
                        <div class="row">
                           <div class="col-md-6">
                              <h1 class="banner_taital">DONATIONS NEEDED</h1>
                              <p class="banner_text"> <br> Share Your Kindness (Become a Contributor)<br> “When one gives, two get happy.” <br> <br> A donation is a gift for charity, humanitarian aid, or to benefit a cause. A donation may take various forms, including money, alms, services, or goods such as clothing, toys, food, or vehicles. A donation may satisfy medical needs such as blood or organs for transplant.
                                 ― Amit Kalantri,</p>
                              <div class="btn_main">
                                 <div class="about_bt active"><a href="#">About Us</a></div>
                                 <div class="quote_bt"><a href="#">Get A Quote</a></div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="image_1"><img src="images/6.png"></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="banner_taital_main">
                        <div class="row">
                           <div class="col-md-6">
                              <h1 class="banner_taital">CLOTH DONATION CAMP</h1>
                              <p class="banner_text"><br> Share Your Kindness (Become a Contributor) <br> <br> “Love can be a natural endowment, a present, or a gift. If it is not just a donation, it can be a divine talent. Since love is a silver bullet, it can make the unimaginable possible through the power of its inspiration. </p> <br> <br>
                              <div class="btn_main">
                                 <div class="about_bt active"><a href="#">About Us</a></div>
                                 <div class="quote_bt"><a href="#">Get A Quote</a></div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="image_1"><img src="images/2.png"></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="banner_taital_main">
                        <div class="row">
                           <div class="col-md-6">
                              <h1 class="banner_taital">Your Donations Help those in Need</h1>
                              <p class="banner_text">  Share Your Kindness (Become a Contributor)  <br> <br> The best thing about giving of ourselves is that what we get is always better than what we give. The reaction is greater than the action. The feeling of giving can be better than the actual action of doing so. Being able to see the impact you have made is something that will lift you up. </p>
                              <div class="btn_main">
                                 <div class="about_bt active"><a href="#">About Us</a></div>
                                 <div class="quote_bt"><a href="#">Get A Quote</a></div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="image_1"><img src="images/4.png"></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
            <i class="fa fa-arrow-left" style="font-size:24px"></i>
            </a>
            <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
            <i class="fa fa-arrow-right" style="font-size:24px"></i>
            </a>
         </div>
      </div>
      <!--banner section end -->
      </div>
      <!--header section end -->
      <!-- services section start -->
      <div class="services_section layout_padding">
         <div class="container">
            <h1 class="services_taital"><span style="color: #fcce2d">Our</span> Locations </h1>
            <div class="services_section_2"> <div class="map-heading"> You can donate the Clothes in to Two Ways :- </div> <br> <div class="map-heading"> a) In first case you have to Choose the Nearest Place from your home on the given Map Location. We have pinned the Donation Place. </div>   <br>
            <div class="map">
               <div class="row">
                  <div class="col-md-6">
                     <div class="map">
                        <pre>                               IET AYODHYA </pre>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3562.5569289939685!2d82.1540515148208!3d26.758511673153652!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399a089a43cde94f%3A0xcf0c1e4bad6c5e42!2sInstitute%20of%20Engineering%20and%20Technology%2C%20Faizabad!5e0!3m2!1sen!2sin!4v1672030522741!5m2!1sen!2sin" width="500" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">  </iframe>   
                     </div>
                    
                  </div>
                  <div class="col-md-6">
                     <div class="map">
                        <pre>                           DR. RML Awadh University </pre>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3562.7128880471414!2d82.13830343488769!3d26.75353680000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399a088e6c361081%3A0x672bbfb301e6a2eb!2sDr.%20Ram%20Manohar%20Lohia%20Avadh%20University!5e0!3m2!1sen!2sin!4v1672030746812!5m2!1sen!2sin" width="500" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> </div>   
                     </div>
                     </div>
                  </div>
               </div>
              
      </div>


      <img class="bg" src="iet.jpg" alt="IET AYODHYA">
      
    <div class="container">  
        <div class="IET">Welcome from IET Ayodhya(Dr.RMLAU) </div>
        <div class="form-iet"> a) In first case you have to Choose the Nearest Place from your home on the given Map Location. We have pinned the Donation Place. </div> <br> </brb>
        
        <h2>Enter your details and submit this form for donate clothes </h2>
      
        
        
    
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" value="<?php if(isset($row['name'])){echo $row['name'];}?>" placeholder="Enter your name">
            <input type="number" name="mobnum" id="mobnum" value="<?php if(isset($row['mobnum'])){echo $row['mobnum'];}?>" placeholder="Enter your Mobile Number">
            <input type="text" name="address" id="address" placeholder="Enter your address" value="<?php if(isset($row['address'])){echo $row['address'];}?>">
           
            <textarea name="des" id="desc" cols="30" value="<?php if(isset($row['des'])){echo $row['des'];}?>" rows="10" placeholder="Enter any other information here"></textarea>
            <button class="btn">Submit</button> 
			 <input type="hidden" name="edit_sno" value="<?php if(isset($row['name'])){echo $row['name'];}?>">
        </form>
    </div>
    <script src="index.js"></script>
    
      <!-- services section end -->
      <!-- about section start -->
      <div class="news_section layout_padding">
         <div class="container">
            <h1 class="news_taital"> Be someone’s reason to smile </h1>
            <p class="news_text">Charity is Investments, helps you to earn Smiles</p>
            
                  </div>
               </div>
            </div>
         
      
      <!-- about section end -->
      <!-- blog section start -->
      
                  </div>
               </div>
            </div>
           
      </div>


      <div class="graphic-portfolio">
         <div class="eff"> 
         <a href="#" ass="hovers-link">  
         <img src="images/15.jpg" height="230px" width="230px" alt="graphic"> </a> </div>
         <div class="eff"> 
         <a href="#">
         <img src="images/16.jpg" height="230px" width="230px" alt="graphic"> </a></div>
         <div class="eff">
         <a href="#">          <img src="images/17.jpg" height="230px" width="230px" alt="graphic"> </a> </div>
         <div class="eff">
         <a href="#">     <img src="images/18.jpg" height="230px" width="230px" alt="graphic"> </a> </div>
         <div class="eff">
         <a href="#">
        
         <a href="#">
         <img src="images/20.jpg" height="230px" width="230px" alt="graphic"> </a> </div>
     </div>
     <br>
     <br>




      <!-- blog section end -->
      <!-- client section start -->
      <div class="client_section layout_padding">
         <div id="main_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <h1 class="client_taital">Patron </h1>
                     <div class="client_section_2">
                        <div class="client_left">
                           <div><img src="images/vc.jpeg" class="client_img"></div>
                        </div>
                        <div class="client_right">
                           <h3 class="client_name">Prof. Pratibha Goyal <br> (VICE-CHANCELLOR) </h3>
                           <p class="client_text">Vice Chancellor, Dr. Rammanohar Lohia Avadh University, Ayodhya, Took Charge as the Vice-Chancellor, Dr.Rammanohar Lohia Avadh University on 22nd November 2022 </p>
                        </div>
                     </div>
                  </div>
               </div>
               
               
               <div class="carousel-item">
                  <div class="container">

                     <h1 class="client_taital">Co-Patron</h1>
                     <div class="client_section_2">
                        <div class="client_left">
                           <div><img src="images/prof.jfif" class="client_img"></div>
                        </div>
                        <div class="client_right">
                           <h3 class="client_name">Prof. Rama Pati Mishra <br> (Director IET Ayodhya)</h3>
                           <p class="client_text">Institute Is Achieving New Heights And Expanding Horizons In Every New Domain. Now Encompasses Seven Departments In Accordance With AICTE Guidelines. It Has An Intake Of 60 And 30 At UG And PG Level Respectively. Admissions To The Courses Are Being Made Through Uttar Pradesh State Engineering Entrance Examination. </p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <h1 class="client_taital">Our Team Heads</h1>
                     <div class="client_section_2">
                        <div class="client_left">
                           <div><img src="images/vandita.jpg" class="client_img" height = "200px" width ="250px"></div>
                        </div>
                        <div class="client_right">
                           <h3 class="client_name">Dr. Vandita Pandey </h3>
                          
                           <p class="client_text"><br> President Alumnai Association IET  <br> <br> The Greatest GOOD is what we do for the others. </p>
                           
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <br>
            <br>
      
            <br>
            <br>
      <div class="faculty"> OUR TEAM HEAD </div>
      <br>
      <br> <br>
      <br>
            
            <div class="graphic-portfolio">
               <div class="eff"> 
               <a href="#" ass="hovers-link">  
               <img src="images/brijesh.jpg" height="230px" width="230px" alt="graphic"> </a> </div>
               <div class="eff"> 
               <a href="#">
               <img src="images/vijayendu.jpg" height="230px" width="230px" alt="graphic"> </a></div>
               <div class="eff">
               <a href="#">          <img src="images/vineet.jpg" height="230px" width="230px" alt="graphic"> </a> </div>
               <div class="eff">
               <a href="#">     <img src="images/paritosh.jpg" height="230px" width="230px" alt="graphic"> </a> </div>
               <div class="eff">
               <a href="#">
              
               <a href="#">
               <img src="images/parimal.jpg" height="230px" width="230px" alt="graphic"> </a> </div>
                  <!-- dkjfkdf -->
                  
                     <div class="eff">
                     <a href="#">
                    
                     <a href="#">
                     <img src="images/shambhavi.jpg" height="230px" width="230px" alt="graphic"> </a> </div>
                     <a href="#">

                        <div class="eff">
                           <a href="#">     <img src="images/ramesh.jpg" height="230px" width="230px" alt="graphic"> </a> </div>
                           <div class="eff">
                           <a href="#">
                          
                           <a href="#">
                           <img src="images/sanjeet.jpg" height="230px" width="230px" alt="graphic"> </a> </div>
                           <a href="#">
                       
      
           </div>
           <br>
           <br>
      
           


            <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
             <i class="fa fa-angle-left"></i>
            </a>
            <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
             <i class="fa fa-angle-right" style="font-size:24px"></i>
            </a>
         </div>
      </div>
      <!-- client section end -->
      <!-- newsletter section start -->
      <div class="newsletter_section layout_padding">
         <div class="container">
            <div class="newsletter_main">
               <h1 class="newsletter_taital">Thanks<br> for Visiting Our Website </h1>
               <div class="get_quote_bt"><a href="#">Rate Us</a></div>
            </div>
            <p class="dolor_text">Thank you very much for your visit. I am grateful for your gesture, and I would like to express my gratitude to you for such a sweet visit to my place. Come again. I feel so honored to get such a surprise visit from you and would love to see you again. </p>
         </div>
      </div>
      <!-- newsletter section end -->

      <!-- contact section start -->
      
      <!-- contact section end -->
      <!-- footer section start -->
      <div class="footer_section layout_padding">
         <div class="container">
            <div class="subscribe_bt"><a href="#">Feedback</a></div>
            <input type="text" class="email_text" placeholder="Write your Feedback" name="Write your Feedback">
            <div class="footer_section_2">
               <div class="row">
                  <div class="col-lg-3 margin_top">
                     <div class="call_text"><a href="#"><img src="images/call-icon1.png"><span class="padding_left_15">Call Now : +91 8545906155</span></a></div>
                     <div class="call_text"><a href="#"><img src="images/mail-icon1.png"><span class="padding_left_15">clothdonation2023@gmail.com</span></a></div>
                  </div>
                  <div class="col-lg-3">
                     <div class="information_main">
                        <h4 class="information_text">Information</h4>
                        <p class="many_text">This Website is Designed by : <br> Nikhil Agnihotri (3rd Yr) IT Branch</p>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6">
                     <div class="information_main">
                        <h4 class="information_text">Helpful Links</h4>
                        <div class="footer_menu">
                           <ul>
                              <li><a href="index.html">Home</a></li>
                              <li><a href="about.html">About</a></li>
                              <li><a href="services.html">Gallery</a></li>
                           
                             
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3">
                     <div class="information_main">
                        <div class="footer_logo"><a href="index.html"><img src="images/1.png"></a></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">© 2022 All Rights Reserved. </p>
         </div>
      </div>

      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
   </div>
   
   
   
   
   
   
   
   
   <!--------------------------------------------------------------------------------------------->

   </body>
</html>

