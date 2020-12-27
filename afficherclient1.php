<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?PHP
	
	include_once '../Model/reservation.php';
    include_once '../Controller/evenementC.php';
    
	$evenementC=new evenementC();
	$listeUsers=$evenementC->afficherevenements();

?>
<!DOCTYPE HTML>
<html>
<head>
<title>Free Gym Website Template | Blog :: w3layouts</title>



 <!-- Styles pop up -->
 <link href="https://fonts.googleapis.com/css?family=Montserrat:500,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
	<link href="css/magnific-popup.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">





<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery.min.js"></script>
<!-- grid-slider -->
<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
<script type="text/javascript" src="js/jquery.contentcarousel.js"></script>
<!-- //grid-slider -->
<style>
         .button {
         background-color: #dac9c9;
         border: none;
         color: white;
         padding: 20px 34px;
         text-align: center;
         text-decoration: none;
         display: inline-block;
         font-size: 20px;
         margin: 4px 2px;
         cursor: pointer;
         }
		 body {
	margin:  0;
}
.page-content {
	width: 1000%;
	margin:  0 auto;
	background: #75e2e9;
	display: flex;
	display: -webkit-flex;
	justify-content: center;
	-o-justify-content: center;
	-ms-justify-content: center;
	-moz-justify-content: center;
	-webkit-justify-content: center;
	align-items: center;
	-o-align-items: center;
	-ms-align-items: center;
	-moz-align-items: center;
	-webkit-align-items: center;
}
.form-v4-content  {
	background: #fff;
	width: 1000px;
	border-radius: 10px;
	-o-border-radius: 10px;
	-ms-border-radius: 10px;
	-moz-border-radius: 10px;
	-webkit-border-radius: 10px;
	box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
	-o-box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
	-ms-box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
	-moz-box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
	-webkit-box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
	margin: 175px 0;
	position: relative;
	display: flex;
	display: -webkit-flex;
	font-family: 'Open Sans', sans-serif;
}
.form-v4-content h2 {
	font-weight: 700;
	font-size: 30px;
	padding: 6px 0 0;
	margin-bottom: 34px;
}
.form-v4-content .form-left {
	background: #3786bd;
	border-top-left-radius: 10px;
	border-bottom-left-radius: 10px;
	padding: 20px 40px;
	position: relative;
	width: 40%;
	color: #fff;
}
.form-v4-content .form-left p {
	font-size: 15px;
	font-weight: 800;
	line-height: 2;
}
.form-v4-content .form-left span {
	font-weight: 700;
}
.form-v4-content .form-left .text-2 {
	margin: 20px 0 25px;
}
.form-v4-content .form-left .account {
	background: #fff;
	border-top-left-radius: 5px;
	border-bottom-right-radius: 5px;
	width: 180px;
	border: none;
	margin: 15px 0 50px 0px;
	cursor: pointer;
	color: #333;
	font-weight: 700;
	font-size: 15px;
	font-family: 'Open Sans', sans-serif;
	appearance: unset;
    -moz-appearance: unset;
    -webkit-appearance: unset;
    -o-appearance: unset;
    -ms-appearance: unset;
    outline: none;
    -moz-outline: none;
    -webkit-outline: none;
    -o-outline: none;
    -ms-outline: none;
}
.form-v4-content .form-left .account:hover {
	background: #e5e5e5;
}
.form-v4-content .form-left .form-left-last input {
	padding: 15px;
}
.form-v4-content .form-detail {
    padding: 20px 40px;
	position: relative;
	width: 150%;
}
.form-v4-content .form-detail h2 {
	color: #3786bd;
}
.form-v4-content .form-detail .form-group {
	display: flex;
	display: -webkit-flex;
	margin:  0 -8px;
}
.form-v4-content .form-detail .form-row {
	width: 100%;
	position: relative;
}
.form-v4-content .form-detail .form-group .form-row.form-row-1 {
	width: 50%;
	padding: 0 8px;
}
.form-v4-content .form-detail label {
	font-weight: 600;
	font-size: 15px;
	color: #666;
	display: block;
	margin-bottom: 8px;
}
.form-v4-content .form-detail .form-row label#valid {
    position: absolute;
    right: 20px;
    top: 50%;
    transform: translateY(-50%);
    -o-transform: translateY(-50%);
    -moz-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    -webkit-transform: translateY(-50%);
    width: 14px;
    height: 14px;
    border-radius: 50%;
    -o-border-radius: 50%;
    -ms-border-radius: 50%;
    -moz-border-radius: 50%;
    -webkit-border-radius: 50%;
    background: #53c83c;
}
.form-v4-content .form-detail .form-row label#valid::after {
	content: "";
    position: absolute;
    left: 5px;
    top: 1px;
    width: 3px;
    height: 8px;
    border: 1px solid #fff;
    border-width: 0 2px 2px 0;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    -o-transform: rotate(45deg);
    -moz-transform: rotate(45deg);
    transform: rotate(45deg);
}
.form-v4-content .form-detail .form-row label.error {
	padding-left: 0;
	margin-left: 0;
    display: block;
    position: absolute;
    bottom: -5px;
    width: 100%;
    background: none;
    color: red;
}
.form-v4-content .form-detail .form-row label.error::after {
    content: "\f343";
    font-family: "LineAwesome";
    position: absolute;
    transform: translate(-50%, -50%);
    -webkit-transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    -o-transform: translate(-50%, -50%);
    -moz-transform: translate(-50%, -50%);
    right: 10px;
    top: -31px;
    color: red;
    font-size: 18px;
    font-weight: 900;
}
.form-v4-content .form-detail .input-text {
	margin-bottom: 27px;
}
.form-v4-content .form-detail input {
	width: 100%;
    padding: 11.5px 15px;
    border: 1px solid #e5e5e5;
    border-top-left-radius: 5px;
    border-bottom-right-radius: 5px;
    appearance: unset;
    -moz-appearance: unset;
    -webkit-appearance: unset;
    -o-appearance: unset;
    -ms-appearance: unset;
    outline: none;
    -moz-outline: none;
    -webkit-outline: none;
    -o-outline: none;
    -ms-outline: none;
    font-family: 'Open Sans', sans-serif;
    font-size: 15px;
    color: #333;
    box-sizing: border-box;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -o-box-sizing: border-box;
    -ms-box-sizing: border-box;
}
.form-v4-content .form-detail .form-row input:focus {
	border: 1px solid #53c83c;
}
.form-v4-content .form-detail .form-checkbox {
	margin-top: 1px;
	position: relative;
}
.form-v4-content .form-detail .form-checkbox input {
	position: absolute;
    opacity: 0;
}
.form-v4-content .form-detail .form-checkbox .checkmark {
	position: absolute;
    top: 13px;
    left: 0;
    height: 15px;
    width: 15px;
    border: 1px solid #ccc;
    cursor: pointer;
}
.form-v4-content .form-detail .form-checkbox .checkmark::after {
	content: "";
    position: absolute;
    left: 5px;
   	top: 1px;
    width: 3px;
    height: 8px;
    border: 1px solid #3786bd;
    border-width: 0 2px 2px 0;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    -o-transform: rotate(45deg);
    -moz-transform: rotate(45deg);
    transform: rotate(45deg);
    display: none;
}
.form-v4-content .form-detail .form-checkbox input:checked ~ .checkmark::after {
    display: block;
}
.form-v4-content .form-detail .form-checkbox p {
    margin-left: 34px;
    color: #333;
    font-size: 14px;
    font-weight: 600;
}
.form-v4-content .form-detail .form-checkbox .text {
	font-weight: 700;
	color: #3786bd;
	text-decoration: underline;
}
.form-v4-content .form-detail .register {
	background: #3786bd;
	border-top-left-radius: 5px;
	border-bottom-right-radius: 5px;
	width: 130px;
	border: none;
	margin: 6px 0 50px 0px;
	cursor: pointer;
	color: #fff;
	font-weight: 700;
	font-size: 15px;
}
.form-v4-content .form-detail .register:hover {
	background: #2f73a3;
}
.form-v4-content .form-detail .form-row-last input {
	padding: 12.5px;
}

/* Responsive */
@media screen and (max-width: 991px) {
	.form-v4-content {
		margin: 180px 20px;
		flex-direction:  column;
		-o-flex-direction:  column;
		-ms-flex-direction:  column;
		-moz-flex-direction:  column;
		-webkit-flex-direction:  column;
	}
	.form-v4-content .form-left {
		width: auto;
		border-top-right-radius: 10px;
		border-bottom-left-radius: 0;
	}
	.form-v4-content .form-detail {
		padding: 30px 20px 30px 20px;
	    width: auto;
	}
}
@media screen and (max-width: 575px) {
	.form-v4-content .form-detail .form-group {
		flex-direction: column;
		-o-flex-direction:  column;
		-ms-flex-direction:  column;
		-moz-flex-direction:  column;
		-webkit-flex-direction:  column;
		margin: 0;
	}
	.form-v4-content .form-detail .form-group .form-row.form-row-1 {
		width: 100%;
		padding:  0;
	}
}

	  </style>
	   <!--
    /   Multipurpose: Free Template by FreeHTML5.co
    /   Author: https://freehtml5.co
    /   Facebook: https://facebook.com/fh5co
    /   Twitter: https://twitter.com/fh5co
    -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Document title -->
    <title>Multipurpose</title>
    <!-- Stylesheets & Fonts -->
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i%7CRajdhani:400,600,700"
        rel="stylesheet">
    <!-- Plugins Stylesheets -->
    <link rel="stylesheet" href="assets/css/loader/loaders.css">
    <link rel="stylesheet" href="assets/css/font-awesome/font-awesome.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/aos/aos.css">
    <link rel="stylesheet" href="assets/css/swiper/swiper.css">
    <link rel="stylesheet" href="assets/css/lightgallery.min.css">
    <!-- Template Stylesheet -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Responsive Stylesheet -->
	<link rel="stylesheet" href="assets/css/responsive.css">
	


	<meta charset="utf-8">
	<title>Form-v4 by Colorlib</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css/opensans-font.css">
	<link rel="stylesheet" type="text/css" href="fonts/line-awesome/css/line-awesome.min.css">
	<!-- Jquery -->
	<link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">
	<!-- Main 
		 Css -->
	<link rel="stylesheet" href="css/style.css"/>
	

</head>
<body>
    <!-- start header_bottom -->
    <div class="header-bottom">
		 <div class="container">
			<div class="header-bottom_left">
				<i class="phone"> </i><span>+216.73.485.957</span>
			</div>
			<div class="social">	
			   <ul>	
				  <li class="facebook"><a href="#"><span> </span></a></li>
				  <li class="twitter"><a href="#"><span> </span></a></li>
				  <li class="pinterest"><a href="#"><span> </span></a></li>	
				  <li class="google"><a href="#"><span> </span></a></li>
				  <li class="tumblr"><a href="#"><span> </span></a></li>
				  <li class="instagram"><a href="#"><span> </span></a></li>	
				  <li class="rss"><a href="#"><span> </span></a></li>							
			   </ul>
		   </div>
		   <div class="clear"></div>
		</div>
    </div>
    <!-- start menu -->
    <div class="menu">
	  <div class="container">
		 <div class="logo">
			<a href="index.html"><img src="images/logo.png" alt=""/></a>
		 </div>
		 <div class="h_menu4"><!-- start h_menu4 -->
		   <a class="toggleMenu" href="#">Menu</a>
			 <ul class="nav">
			   <li><a href="index.html">Accueil</a></li>
			   <li><a href="trainers.html">Coach</a></li>
			   <li><a href="classes.html">Salle de sport</a></li>
			   <li class="active"><a href="afficherclient1.html">évenement</a></li>
			   <li><a href="pricing.html">Packer</a></li>
			   <li><a href="contact.html">Contact</a></li>
			   <li><a href="connexionutlis.php">authentification</a></li>
			 </ul>
			  <script type="text/javascript" src="js/nav.js"></script>
		  </div><!-- end h_menu4 -->
		 <div class="clear"></div>
	  </div>
	</div>
	<!-- end menu -->
     <div class="main">
       <div class="about_banner_img"><img src="images/blog_img1.jpg" class="img-responsive" alt=""/></div>
		 <div class="about_banner_wrap">
      	    <h1 class="m_11">Evenements</h1>
      	</div>
      	<div class="border"> </div>
      	<div class="container">
			  
		  
		<script type="text/javascript" src="js/jquery.flexisel.js"></script>
	   <!-- Recent Posts Start -->
	  




	   <section class="recent-posts">
				<?PHP
				foreach($listeUsers as $user){
			?>
				<tr>
				
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
				<div class="single-rpost d-sm-flex align-items-center" data-aos="fade-right"
                        data-aos-duration="800">
                        <div class="post-content text-sm-right">
                            <!--<time datetime="2019-04-06T13:53">15 Oct, 2019</time> -->
		
					<h3><a href="#"><?PHP echo $user['Nom']; ?></a></h3>
                            <p><a href="#"><?PHP echo $user['Description']; ?></a></p>
							<h3><a href="#"><?PHP echo $user['Prix']; ?></a></h3>
							<h3><a href="#"><?PHP echo $user['Date']; ?></a></h3>
							
						
							<div class="grid">
                                <div class="element-item development">
									<a class="popup-with-move-anim" value=<?PHP echo $user['id']; ?> name="id" href="#post1">
							
									<input type="hidden" >
                                    <div class="element-item-overlay"><span>Online Banking</span></div>
									<img class="img-fluid" src="assets/images/post1.jpg" alt="Post 1">
                               
                            <a class="post-btn" href="#post1"><i class="fa fa-arrow-right"></i></a>
						</div>
						
						<div class="post-thumb">
                        </div>
                    </div>
                </div>
				</div>
                <div class="col-lg-6">
                    <div class="single-rpost d-sm-flex align-items-center" data-aos="fade-left" data-aos-duration="800">
                        <div class="post-thumb">
                         
                           
                            <div id="post1" class="lightbox-basic zoom-anim-dialog mfp-hide">
                                <div class="row">
                                    <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
									<?php
 

    $error = "";

    // create user
    $user = null;

    // create an instance of the controller
    $userC = new evenementC();
    if (
        
        isset($_POST["Type_de_paiment"]) &&
        isset($_POST["Num_de_la_carte"]) && 
        isset($_POST["Code_de_la_carte"]) &&
        isset($_POST["Person"]) && 
        isset($_POST["Date_dexpiration"]) && 
        isset($_POST["Ticket"])
    ) {
        if (
            !empty($_POST["Type_de_paiment"]) && 
            !empty($_POST["Num_de_la_carte"]) && 
            !empty($_POST["Code_de_la_carte"]) && 
            !empty($_POST["Person"]) && 
            !empty($_POST["Date_dexpiration"]) && 
            !empty($_POST["Ticket"])
        ) {
            $user = new reservation(
                $_POST['Type_de_paiment'],
                $_POST['Num_de_la_carte'],
                $_POST['Code_de_la_carte'], 
                $_POST['Person'],
                $_POST['Date_dexpiration'],
                $_POST['Ticket']
			);
			
			$userC->ajouterreservation($user,$_POST["id"]);
			header('refresh:5;url=afficherclient1.php');
           // header('Location:afficherUtilisateurs.php');
        }
        else
            $error = "Missing information";
	}


    
?>


				  <div id="error">
			<?php echo $error; ?>
			
        </div>
       
                                    
		<div class="form-v4-content">
			<div class="form-left">
				<h2>INFOMATION</h2>
				<p class="text-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Et molestie ac feugiat sed. Diam volutpat commodo.</p>
				<p class="text-2"><span>Eu ultrices:</span> Vitae auctor eu augue ut. Malesuada nunc vel risus commodo viverra. Praesent elementum facilisis leo vel.</p>
				
			</div>
		
			<form action="" method="POST">
			
				<h2>Réservation</h2>
				
			
				<input type="text" name="id" id="id"  value ="<?php echo $user['id']; ?>" disabled>
			
				<h5>Type_de_paiment</h5>
				<div class="form-group">
					<div class="form-row form-row-1">
					<div class="form-checkbox">
						<label class="container"> <p><img src ="image/visa.png" height="30" width="40">
						<input type="checkbox" name="Type_de_paiment" value=visa/ visa></p>
						</label>
					</div>
					<div class="form-checkbox">
						<label class="container"> <p><img src ="image/carte-ing.png" height="30" width="40">
						<input type="checkbox" name="Type_de_paiment" value=manster/ master></p>
						</label>
					</div>
				</div></div>

			
				<div class="form-group">
					<div class="form-row form-row-1">
					<label for="'Num_de_la_carte'">Num_de_la_carte:</label>
						<input type="text" name="Num_de_la_carte" id="Num_de_la_carte" >
					</div>
					<br></br> 
					<div class="form-row form-row-1">
					<label for="Code_de_la_carte">Code_de_la_carte:</label>
					<input type="password" name="Code_de_la_carte" id="Code_de_la_carte" >
					</div>
				</div>

				
				<div class="form-row">
				<label for="Person"> Person:</label>
				<input type="number" name="Person" id="Person" >
				</div>


				<div class="form-group form-group-1">
					
					<p><div class="form-row form-row-3">
					<label for="Date_dexpiration">Date_dexpiration:</label>
					<input type="date" name="Date_dexpiration" id="Date_dexpiration" >
					</div> </p>
						
						<span class="select-btn">
						  	<i class="zmdi zmdi-chevron-down"></i>
						</span>
					</div>
					<div class="form-row">
				
				<center>
		<p> </p>
						
		             <label for="Ticket">Ticket </label>
						<select  name="Ticket" id="Ticket"> >
						    <option value="vip">VIP</option>
						    <option value="luxury">Luxury</option>
						    <option value="normal">Normal</option>
						</select>	</div> </center>
					<center>
					<input type="submit" value="Envoyer"> 
					<a href="connexionutlis.php?id=<?PHP echo $user['id']; ?>"> A </a>
					</center>
				</div>
			
			</form>
			
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
	<script>
		// just for the demos, avoids form submit
		jQuery.validator.setDefaults({
		  	debug: true,
		  	success:  function(label){
        		label.attr('id', 'valid');
   		 	},
		});
		$( "#myform" ).validate({
		  	rules: {
			    password: "required",
		    	comfirm_password: {
		      		equalTo: "#password"
		    	}
		  	},
		  	messages: {
		  		first_name: {
		  			required: "Please enter a firstname"
		  		},
		  		last_name: {
		  			required: "Please enter a lastname"
		  		},
		  		your_email: {
		  			required: "Please provide an email"
		  		},
		  		password: {
	  				required: "Please enter a password"
		  		},
		  		comfirm_password: {
		  			required: "Please enter a password",
		      		equalTo: "Wrong Password"
		    	}
		  	}
		});
	</script>
	<style>
	
select {
    width: 50%;
    padding: 3px 15px;
    border: 1px solid #333;
    
}
	</style>
										


                                </div> <!-- end of row -->
                            </div> <!-- end of lightbox-basic -->
                            <!-- end of lightbox -->
                       
                       
                       
                       
                       
				</div>
                        </div>
                        </tr>
						<?PHP
				}
			?> 
					</div>
			</div>
                </div>
			
				</div></div></div>
        </div>
	</section>
	
    <!-- Recent Posts End -->
	  
			   
			   <div class="container">
			   <div class= "container_inner clearfix">

			   <div class= "title_subtile_holder">
			   <h1> <span> </span> </h1>
			   <span class ="separator small left"></span>
			   </div>
			   
				
				 </div> 
				 
     <div class="footer-bottom">
		   <div class="container">
		 	 <div class="row section group">
				<div class="col-md-4">
				   <h4 class="m_7">Newsletter Signup</h4>
				   <p class="m_8">Ce n'est pas seulement mon corps qui changer MAIS SUR TOUS MA VIE</p>
				      <form class="subscribe">
			             <input type="text" value="Insert Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Insert Email';}">
					  </form>
			          <div class="subscribe1">
			            <a href="#">Submit Email<i class="but_arrow"> </i></a>
			          </div>
				</div>
				<div class="col-md-4">
					<div class="f-logo">
						<img src="images/logo.png" alt=""/>
					</div>
					<p class="m_9">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis</p>
					<p class="address">Phone : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="m_10">+216.73.485.957</span></p>
					<p class="address">Email : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="m_10">vita.style@gmail.com</span></p>
				</div>
				<div class="col-md-4">
					<ul class="list">
						<h4 class="m_7">Menu</h4>
						<li><a href="#">Accueil</a></li>
						<li><a href="#">coach </a></li>
						<li><a href="#">Salle de sport </a></li>
						<li><a href="#">Regime alimentaire</a></li>
						<li><a href="#">Pack</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
					<ul class="list1">
						<h4 class="m_7">Community</h4>
						<li><a href="#">évenement</a></li>
						<li><a href="#">Forum</a></li>
						<li><a href="#">Support</a></li>
						<li><a href="#">Newsletter</a></li>
					</ul>
				</div>
				<div class="clear"></div>
	  		  </div>
		 	</div>
		 </div>
		 <div class="copyright">
		  <div class="container">
		    <div class="copy">
		        <p>© 2020 Template by <a href= VITA STYLE target="_blank"> VITA STYLE</a></p>
		    </div>
		    <div class="social">	
			   <ul>	
				  <li class="facebook"><a href="#"><span> </span></a></li>
				  <li class="twitter"><a href="#"><span> </span></a></li>
				  <li class="pinterest"><a href="#"><span> </span></a></li>	
				  <li class="google"><a href="#"><span> </span></a></li>
				  <li class="tumblr"><a href="#"><span> </span></a></li>
				  <li class="instagram"><a href="#"><span> </span></a></li>	
				  <li class="rss"><a href="#"><span> </span></a></li>							
			   </ul>
		    </div>
		   <div class="clear"></div>
		  </div>
		 </div>
		  <!-- Recent Posts End -->
   
    <!-- Footer Endt -->
    <!--jQuery-->
    <script src="assets/js/jquery-3.3.1.js"></script>
    <!--Plugins-->
    <script src="assets/js/bootstrap.bundle.js"></script>
    <script src="assets/js/loaders.css.js"></script>
    <script src="assets/js/aos.js"></script>
    <script src="assets/js/swiper.min.js"></script>
	<script src="assets/js/lightgallery-all.min.js"></script>
	  <!-- Scripts pop-up -->

  
    <script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="js/morphext.min.js"></script> <!-- Morphtext rotating text in the header -->
    <script src="js/isotope.pkgd.min.js"></script> <!-- Isotope for filter -->
    <script src="js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="js/scripts.js"></script> <!-- Custom scripts -->
    <!--Template Script-->
    <script src="assets/js/main.js"></script>
</body>
</html>