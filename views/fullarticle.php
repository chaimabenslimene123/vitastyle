<?php
	include "../controller/articleC.php";
	include_once '../model/article.php';
	include_once '../model/commentaire.php';
	$articleC = new articleC();
	$commentaireC = new articleC();
?>

<?php
	include_once '../model/article.php';
	include_once '../model/commentaire.php';
	$commentaireC = new articleC();

$error = "";

// create an instance of the controller
if (
    isset($_POST["nom"]) &&
    isset($_POST["prenom"]) &&
    isset($_POST["email"]) &&
    isset($_POST["IDarticle"])  
) {
    if (
        !empty($_POST["nom"]) &&
        !empty($_POST["prenom"]) &&
        !empty($_POST["email"]) &&
        !empty($_POST["IDarticle"])
    ) {
        $commentaire = new commentaire(
            $_POST['nom'],
            $_POST['prenom'],
            $_POST['email'],
            $_POST['IDarticle']
        );
        $commentaireC->ajoutercomment($commentaire);
        
    }
    else
        $error = "Missing information";
}
?>

<?php
			if (isset($_GET['id'])){
				$article = $articleC->recupererarticle($_GET['id']);
				$listeComments=$commentaireC->affichercomment($_GET['id']);
               // var_dump($article);
?>



		
<!DOCTYPE HTML>
<html>
 <head>
  <title><?PHP echo $article['titleA']; ?></title>
  <link href="../css/bootstrap.css" rel='stylesheet' type='text/css' />
  <link href="../css/style.css" rel='stylesheet' type='text/css' />
  <link href="../css/tes.css" rel='stylesheet' type='text/css' />
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
  <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
  <!--<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />-->
  <script src="js/jquery.min.js"></script>
  <script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
		});
	</script>
  <!-- grid-slider -->
  <script type="text/javascript" src="js/jquery.mousewheel.js"></script>
  <script type="text/javascript" src="js/jquery.contentcarousel.js"></script>
  <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
  <!-- //grid-slider -->
 </head>
 <body>
  <!-- start menu -->
  <div class="menu" id="menu">
	  <div class="container">
		 <div class="logo">
			<a href="index.html"><img src="../img/images/logo.png" alt=""/></a>
		 </div>
		 <div class="h_menu4"><!-- start h_menu4 -->
		   <a class="toggleMenu" href="#">Menu</a>
			 <ul class="nav">
			   <li class="active"><a href="index.html">Accueil</a></li>
			   <li><a href="about.html">Inscription</a></li>
			   <li><a href="trainers.html">coach</a></li>
			   <li><a href="classes.html">Salle de sport</a>
			   	
			   </li>
			   <li><a href="blog.html">regime alimentaire</a></li>
			   <li><a href="pricing.html">Pack</a></li>
			   <li><a href="contact.html">Contact</a></li>
			 </ul>
			  <script type="text/javascript" src="js/nav.js"></script>
		  </div><!-- end h_menu4 -->
		 <div class="clear"></div>
	  </div>
	</div>
    <!-- end menu -->

  
    
        <h1><strong><?PHP echo $article['titleA']; ?><strong></h1>
        <?PHP echo $article['dateA']; ?><br>
        <img src="../img/photosarticle/<?php echo $article['imageA'] ?>" width = "1100" height = "500" >	<br>	
		<?PHP echo $article['descreptionA']; ?>
		
		<hr>
		<form action="" method="POST">
            

               
            <input type="text" name="nom" id="nom" maxlength="20" required placeholder="Nom" >
                    
            <input type="text" name="prenom" id="prenom" maxlength="20" required placeholder="prenom" ><br>

                   
            <textarea name="commentaire"  class="test-area" required placeholder="commentaire..."></textarea><br>

			<input type="hidden" name="IDarticle" id="IDarticle"  value="<?php echo $article['Id']; ?>" >
                     
            <button type="submit" class="btn btn-primary" name="envoyer"> Envoyer </button>
                   
		</form>
		

		<?PHP
			foreach($listeComments as $commentaire){
		 ?>
		 
		<div class="comment-box" >
		  <h5><?PHP echo $commentaire['date']; ?></h5>
		  <?PHP echo $commentaire['Nom']; ?>
		  <?PHP echo $commentaire['Prenom']; ?>  : <br>
		  <h4><?PHP echo $commentaire['commentaire']; ?></h4><br>
		</div>

		<?PHP
		  }
	      ?>
           
            
		
    





    
		 
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
						<img src="../img/images/logo.png" alt=""/>
					</div>
					<p class="m_9">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis</p>
					<p class="address">Phone : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="m_10">+216.73.485.957</span></p>
					<p class="address">Email : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="m_10">vita.style@gmail.com </span></p>
				</div>
				<div class="col-md-4">
					<ul class="list">
						<h4 class="m_7">Accueil</h4>
						<li><a href="#">Inscription</a></li>
						<li><a href="#">Coach</a></li>
						<li><a href="#">Salle de sport</a></li>
						<li><a href="#">Regim alimentaire</a></li>
						<li><a href="#">Pack</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
					<ul class="list1">
						<h4 class="m_7">Community</h4>
						<li><a href="#">Blog</a></li>
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
		        <p>© 2020 Template by <a VITA STYLE target="_blank"> VITA STYLE </a></p>
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
  </body>
</html>
<?php
            }
        ?>