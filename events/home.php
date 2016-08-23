<?php include'connection.php';
$aCategory_list[] ='';
$sql = "SELECT headers FROM advisoriesheader";
		
$result = mysqli_query($link,$sql);
if(!$result)
{
    echo mysqli_error($link);
    exit();
}

while($rows = mysqli_fetch_array($result))
{

    $aCategory_list[]= array('category' => $rows['headers']);
}
//echo $category_list[0]['category'];
$advisoriesVal= count($aCategory_list);
$nCategory_list[] ='';
$sql = "SELECT headers FROM newsandeventsitemsheaders";
		
$result = mysqli_query($link,$sql);
if(!$result)
{
    echo mysqli_error($link);
    exit();
}

while($rows = mysqli_fetch_array($result))
{

    $nCategory_list[]= array('category' => $rows['headers']);
}
//echo $category_list[0]['category'];
$newsVal= count($nCategory_list);
//echo $val;
?>

<!DOCTYPE html>
<html>
<body>
<div id="box_wrapper">
 <section id="topline" class="light_section table_section">
         <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <a href="index.html" class="navbar-brand"><img src="images/logo.jpg" alt=""> </a>
                    
                </div>
               
                
            </div>
        </div>
    </section>
	
	
	<header id="header">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div>
                        <span id="toggle_mobile_menu"></span>
                        <span id="toggle_search"></span>
                        <div class="widget widget_search">
                            <form role="search" method="get" id="searchform" class="searchform form-inline" action="/">
                                <div class="form-group">
                                    <label class="screen-reader-text" for="search">Search for:</label>
                                    <input type="text" value="" name="search" id="search" class="form-control" placeholder="Search...">
                                </div>
                                <button type="submit" id="searchsubmit" class="theme_button">Search</button>
                            </form>
                        </div>
                        <nav id="mainmenu_wrapper">
                            <ul id="mainmenu" class="nav sf-menu">
                                <li class="active">
                                    <a href="index.html">Home</a>
                                </li>
                                <li>
                                    <a href="about.html">About</a>
                                </li>
                                <li>
                                   <a href="services.html">Services</a>
                                </li>
                                <li>
                                    <a href="products.html">Products</a>
                                </li>
								<li >
                                    <a href="form.html">Training</a>
                                </li>								
								<li >
                                    <a href="viewAdvisories.php">Advisories</a>
                                </li>
								<li  >
                                    <a href="newsAndEvents.php">News & Events</a>
                                </li>
                                
                                <li>
                                    <a href="contact.html">Contact</a>
                                </li>
                            </ul>  
                        </nav>
                    </div>
                
                </div>
            </div>
        </div>
    </header>
	<section id="info" class="grey_section">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2 class="section_header to_animate">Our <span class="highlight">Ideas</span></h2>
                <p class="to_animate">Check our Ideas for <strong>software life cycle management</strong> cost</p>
            </div>
        </div>
        <div class="row">

            <div class="col-sm-4 to_animate" data-animation="fadeInLeft">

                <div class="teaser">
                    <div class="teaser_icon">
                        <i class="rt-icon-banknote"></i>
                    </div>
                    <div class="teaser_description">
                        <h3>Cost <span class="highlight">Effective</span></h3>
                        <p>Effective Utilization of HR, services and Solutions.</p>
                        <p><a href="#" class="theme_button">Know More</a></p>
                    </div>
                </div>

            </div>
            
            <div class="col-sm-4 to_animate" data-animation="fadeInBottom">

                <div class="teaser">
                    <div class="teaser_icon">
                        <i class="rt-icon-sent"></i>
                    </div>
                    <div class="teaser_description">
                        <h3>Increase the <span class="highlight">Productivity</span></h3>
                        <p>Reduce the software life cycle management cost.</p>
                        <p><a href="service.html" class="theme_button">Know More</a></p>
                    </div>
                </div>

            </div>
            
            <div class="col-sm-4 to_animate" data-animation="fadeInRight">

                <div class="teaser">
                    <div class="teaser_icon">
                        <i class="rt-icon-paperplane"></i>
                    </div>
                    <div class="teaser_description">
                        <h3>Continuous <span class="highlight">Improvement</span></h3>
                        <p>Suggest and implement automation wherever possible.. </p>
                        <p><a href="#" class="theme_button">Know More</a></p>
                    </div>
                </div>

            </div>
                

        </div> 
    </div>
</section>


 <section id="copyright" class="light_section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <p>&copy; Copyright 2015 - <strong> GURU Information Technology Services Pvt Ltd.</strong></p>
                </div>
                               
            </div>
        </div>
    </section>
 	
</div>
  <h1 style="text-align:center">ADVISORIES & NEWS AND EVENTS FEED</h1>
  <br>
   
 </h1><p><a href="advisories.php" class="link-btn"><h1 style="text-align:center">ADVISORIES</a> <p>
 
 </h1><p><a href="news.php" class="link-btn"><h1 style="text-align:center">NEWS AND EVENTS</a></p>
 
 <!-- libraries -->
        <script src="js/jquery-1.11.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.appear.js"></script>

        <!-- superfish menu  -->
        <script src="js/jquery.hoverIntent.js"></script>
        <script src="js/superfish.js"></script>
        


        <!-- sliders, filters, carousels -->
        <script src="js/jquery.isotope.min.js"></script>
        <script src='js/owl.carousel.min.js'></script>
        <script src='js/jquery.fractionslider.min.js'></script>
        <script src='js/jquery.flexslider-min.js'></script>
        <script src='js/jquery.bxslider.min.js'></script>

        <!-- custom scripts -->
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
 
</body>
</html>