<?php 
include ('connection.php');

$keyword = $_GET['keyword'];
$query = mysqli_query($connect, "SELECT id, tittle, content, author, picture, cast(d_entry as date) as d_entry, cast(d_update as date) as d_update, deleted FROM t_article WHERE tittle like '%$keyword%' AND deleted = 0 ORDER BY 1");
// print_r($query); exit();
$results = mysqli_fetch_all($query, MYSQLI_ASSOC);


?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Blog</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="OneTech shop project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/blog_styles.css">
<link rel="stylesheet" type="text/css" href="styles/blog_responsive.css">

</head>

<body>

<div class="super_container">

	<!-- Home -->

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/banner.png"></div>
		<!-- <div class="home_overlay"></div> -->
		<div class="home_content d-flex flex-column align-items-center justify-content-center">
			<h2 class="home_title"><a href="blog.php" style="text-decoration:none; color: black">ahaTech Blog</a></h2>
		</div>
	</div>

	<!-- Blog -->

	<div class="blog">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="blog_posts d-flex flex-row align-items-start justify-content-between">
						
						<!-- Blog post -->
                <?php                       
                     foreach ($results as $result) : ?>
						<div class="blog_post">
							<div class="blog_image" style="background-image:url(images/<?php echo $result['picture'] ?>)"></div>
							<div class="blog_text text-center"><?php echo $result['tittle'] ?></div>
							<div class="blog_button"><a href='blog_single.php?id=<?php echo $result['id'] ?>'>Continue Reading</a></div>
						</div>
				<?php endforeach;  ?>
					</div>
				</div>
					
			</div>
		</div>
	</div>

	<!-- Search -->

	<div class="newsletter">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="newsletter_container d-flex flex-lg-row flex-column align-items-lg-center align-items-center justify-content-lg-start justify-content-center">
						<div class="newsletter_title_container">
							<div class="newsletter_icon"><img src="images/send.png" alt=""></div>
							<div class="newsletter_title">Pencarian</div>
							<div class="newsletter_text"><p>...Pencarian di blog berdasarkan kata judul artikel...</p></div>
						</div>
						<div class="newsletter_content clearfix">
							<form action="#" class="newsletter_form">
                            <form class="form-inline" action="search_blog.php"> 
                                <!-- search_blog.php -->
								<input type="text" class="newsletter_input" name="keyword" placeholder="Masukkan kata yang ingin dicari...">
								<button class="newsletter_button" type="submit">Cari</button>
							</form>
							</form>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			<div class="row">

				<div class="col-lg-3 footer_col">
					<div class="footer_column footer_contact">
						<div class="logo_container">
							<div class="logo"><a href="blog.php">ahaTech Blog</a></div>
						</div>
						<div class="footer_phone">+62 896 3853 1806</div>
						<div class="footer_social">
							<ul>
								<li><a href="https://web.facebook.com/amrund" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="https://twitter.com/_ahakim_" target="_blank"><i class="fab fa-twitter"></i></a></li>
							</ul>
						</div>
					</div>
				</div>

				<div class="col-lg-2 offset-lg-2">
					<div class="footer_column">
						<div class="footer_title">Find it Fast</div>
						<ul class="footer_list">
							<li><a href="blog.php">Computers & Laptops</a></li>
							<li><a href="blog.php">Cameras & Photos</a></li>
						</ul>
					</div>
				</div>

				<div class="col-lg-2">
					<div class="footer_column">
						<ul class="footer_list footer_list_2">
							<li><a href="blog.php">Hardware</a></li>
							<li><a href="blog.php">Embedded PC</a></li>
						</ul>
					</div>
				</div>

				<div class="col-lg-2">
					<div class="footer_column">
						<ul class="footer_list footer_list_2">
							<li><a href="blog.php">Phones</a></li>
							<li><a href="blog.php">Programming</a></li>
						</ul>
					</div>
				</div>

			</div>
		</div>
	</footer>

	<!-- Copyright -->

	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col text-center">					
					<div class="copyright_container d-flex flex-sm-row flex-column align-items-center text-center">
						<div class="copyright_content">
						  <div class="text-center">
							Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is modified with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://twitter.com/_ahakim_" target="_blank">amrunhakim</a>
						  </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/blog_custom.js"></script>
</body>

</html>