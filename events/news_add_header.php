<?php

/*

NEW.PHP

Allows user to create a new entry in the database

*/



// creates the new record form

// since this form is used multiple times in this file, I have made it a function that is easily reusable

function renderForm($first, $error)

{

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <title>Welcome to GITS !!!.</title>
    <meta charset="utf-8">
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->


<link rel="icon" href="favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css" id="color-switcher-link">
    <link rel="stylesheet" href="css/animations.css">
    <link rel="stylesheet" href="css/fonts.css">
	<link href="css/advisories_newsandevents.css"   rel="stylesheet" type="text/css" />
    <script src="js/modernizr-2.6.2.min.js"></script>

    <!--[if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->

</head>
<body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->


<div id="box_wrapper">


    

   
<html>

<head>

<title>Add News & Events Header</title>

</head>

<body>

<?php

// if there are any errors, display them

if ($error != '')

{

echo '<div style="padding:4px; border:1px solid red; color:red;">'.$error.'</div>';

}

?>





<body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->


<div id="box_wrapper">


    <section id="topline" class="light_section table_section">
         <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <a href="index.html" class="navbar-brand"><img src="images/logo.jpg" alt=""> </a>
                    
                </div>
                <div class="col-sm-9 text-right">
                    <span>
                        <i class="fa fa-envelope-o"></i> <a href="mailto:info@guruits.com">info@guruits.com</a>
                    </span>
                    <span>
                        <i class="fa fa-phone"></i> +91 (44) 226-80-627
                    </span>
                   
                </div>
                
            </div>
        </div>
    </section>


    <header id="header">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div>
                        
                        
                       
                        <nav id="mainmenu_wrapper">
                            <ul id="mainmenu" class="nav sf-menu">
                                
                               						
								<li class="active" >
                                    <a href="n.php">Home</a>
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
            
           
			
			<div class="col-sm-4 to_animate" data-animation="fadeInLeft">

                <form action="" method="post">

				<div>

				<strong>News & Events header: </strong> <input type="text" id="firstname"name="firstname" value="<?php echo $first; ?>" /><br/>
				</div>
				<input type="submit" id="news-save-header" name="submit" value="Submit">
			
			
			</div>	
	
					
			<div class="col-sm-4 to_animate" data-animation="fadeInLeft">
				
				<p class="news-add-header-message">                        
				<input type="hidden" >
				</p>	

			</div>
			
			</form>

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
 

</div><!-- eof #box_wrapper -->

<div class="preloader">
    <div class="preloader_image"></div>
</div>


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
		<script src="js/advisories_newsandevents_validator.js"></script>

    </body>
 

</body>


</html>

<?php

}









// connect to the database

include('connect-db.php');



// check if the form has been submitted. If it has, start to process the form and save it to the database

if (isset($_POST['submit']))

{

// get form data, making sure it is valid

$firstname = mysql_real_escape_string(htmlspecialchars($_POST['firstname']));





// check to make sure both fields are entered

if ($firstname == '')

{

// generate error message

$error = 'ERROR: Please fill in all required fields!';



// if either field is blank, display the form again

renderForm($firstname,  $error);

}

else

{

// save the data to the database

mysql_query("INSERT newsandeventsitemsheaders SET headers='$firstname'")

or die(mysql_error());



// once saved, redirect back to the view page

header("Location: news_view_headers.php");

}

}

else

// if the form hasn't been submitted, display the form

{

renderForm('','');

}

?>