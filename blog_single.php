<?php 
include('connection.php');
$id = $_GET['id'];

$query = mysqli_query($connect, "SELECT * FROM t_article WHERE id=$id LIMIT 1");
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);
// print_r($result); exit();
$query_list = mysqli_query($connect, "SELECT * FROM t_article WHERE id != $id order by 1 DESC LIMIT 3");
$result_list = mysqli_fetch_all($query_list, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Blog Post</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="OneTech shop project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/blog_single_styles.css">
<link rel="stylesheet" type="text/css" href="styles/blog_single_responsive.css">

</head>

<body>

<div class="super_container">
	
	<!-- Header -->
	
	<header class="header">
	</header>

	<!-- Home -->

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/<?php echo $result[0]['picture'] ?>" data-speed="0.8"></div>
	</div>

	<!-- Single Blog Post -->

	<div class="single_post">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2">
					<div class="single_post_title"><?php echo $result[0]['tittle'] ?></div>
					<div class="single_post_text">
						<p><?php echo $result[0]['content'] ?></p>

						<div class="single_post_quote text-center">
							<div class="quote_image"><img src="images/quote.png" alt=""></div>
							<div class="quote_text">Belajar web programming di kelas weekend codepolitan sungguh menyenangkan. Semoga lekas paham dan menguasai.. hehe</div>
							<div class="quote_name">amrun hakim</div>
						</div>				
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Blog Posts -->

	<div class="blog">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="blog_posts d-flex flex-row align-items-start justify-content-between">

                        <!-- Blog post -->
                        <?php  foreach ($result_list as $resultlist) : ?>
						<div class="blog_post">
							<div class="blog_image" style="background-image:url(images/<?php echo $resultlist['picture'] ?>)"></div>
							<div class="blog_text"><?php echo $resultlist['tittle'] ?></div>
							<div class="blog_button"><a href='blog_single.php?id=<?php echo $resultlist['id'] ?>'>Continue Reading</a></div>
                        </div>
                        <?php endforeach; ?>

						
						<!-- <div class="blog_post">
                        <div class="blog_image" style="background-image:url(images/<?php echo $result_list[1]['picture'] ?>)"></div>
							<div class="blog_text"><?php echo $result_list[1]['tittle'] ?></div>
							<div class="blog_button"><a href="b"blog_single.php?id=<?php echo $result_list[1]['id'] ?>"">Continue Reading</a></div>
						</div>

						
						<div class="blog_post">
                        <div class="blog_image" style="background-image:url(images/<?php echo $result_list[2]['picture'] ?>)"></div>
							<div class="blog_text"><?php echo $result_list[2]['tittle'] ?></div>
							<div class="blog_button"><a href="b"blog_single.php?id=<?php echo $result_list[2]['id'] ?>"">Continue Reading</a></div>
						</div> -->
					

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
<script src="js/blog_single_custom.js"></script>
</body>

</html>