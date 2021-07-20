<?php 
session_start();






header('location:login.php');
?>


<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php include 'css/style.php' ?>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />




</head>
<body>
<header>
	<nav class="navbar"> 
		<div class="logo"> 
			<a href="https://wwww.zeenatparween.com/" target="_blank">zeenatparween</a>
		</div>

		<div class="menu"> 
			<ul>
				<li><a href="#" class="active"> home </a></li>
				<li><a href="#" > gallery </a></li>
				<li><a href="#" > services </a></li>
				<li><a href="#" > portfolio </a></li>
				<li><a href="#" > about </a></li> 
			</ul>
		</div>

		<div class="contact_btn"> 
			<a href="logout.php">Logout</a> 
			</div> 
            </nav> 
            <div class="center_content"> 
            	<h1>Hello this is <?php echo $_SESSION['username']; ?></h1> 
            	<h2>full stack developer</h2> 
            </div> 
            <div class="social_network"> 
            	<div class="fa_icons">
            		<a href="#"> 
            			<i class="fa fa-facebook" aria-hidden="true"></i> 
            		</a> 
            	</div> 

                <div class="social_network"> 
            	<div class="fa_icons">
            		<a href="#"> 
            			<i class="fa fa-facebook" aria-hidden="true"></i> 
            		</a> 
            	</div>  

            	<div class="social_network"> 
            	<div class="fa_icons">
            		<a href="#"> 
            			<i class="fa fa-twitter" aria-hidden="true"></i> 
            		</a> 
            	</div>  

            	<div class="social_network"> 
            	<div class="fa_icons">
            		<a href="#"> 
            			<i class="fa fa-instagram" aria-hidden="true"></i> 
            		</a> 
            	</div> 

            	<div class="social_network"> 
            	<div class="fa_icons">
            		<a href="#"> 
            			<i class="fa fa-youtube" aria-hidden="true"></i> 
            		</a> 
            	</div>  


                   <div class="fa_icons">
            		<a href="https://zeenat-parween.github.io/mine.github.io/"> 
            			<i class="fa fa-user" aria-hidden="true"></i> 
            		</a> 
            	</div>  




                    </div> 

                     <div class="grid_sec">
                     	<img src="../images/grid.png"> 
                     </div> 
                 </header>
              </body>
               </html>