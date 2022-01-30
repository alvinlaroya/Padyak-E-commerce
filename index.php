<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

	<?php include 'includes/navbar.php'; ?>
	<?php 
	 /* GET THE SESSION ID

	 
	 if(isset($_SESSION['user'])){
		 echo $user['id'];
	 } */
	 ?>
	  <div class="content-wrapper">
	    <div class="container-fluid">

	      <!-- Main content -->
	      <section class="content">
	        <div class="row">
	        	<div class="col-sm-12">
	        		<?php
	        			if(isset($_SESSION['error'])){
	        				echo "
	        					<div class='alert alert-danger'>
	        						".$_SESSION['error']."
	        					</div>
	        				";
	        				unset($_SESSION['error']);
	        			}
	        		?>
	        		<section class="home">

						<div class="slide active" style="background: url(images/home-bg-1.png) no-repeat;">
							<div class="content" style="margin-left: -30px">
								<span>Good Quality and Design</span>
								<h3>upto 50% off</h3>
								<a href="#" class="btn-existing">shop now</a>
							</div>
						</div>

						<div class="slide" style="background: url(images/home-bg-2.png) no-repeat;">
							<div class="content" style="margin-left: -30px">
								<span>Good Quality and Design</span>
								<h3>upto 50% off</h3>
								<a href="#" class="btn">shop now</a>
							</div>
						</div>

						<div class="slide" style="background: url(images/home-bg-3.png) no-repeat;">
							<div class="content" style="margin-left: -30px">
								<span>Good Quality and Design</span>
								<h3>upto 50% off</h3>
								<a href="#" class="btn">shop now</a>
							</div>
						</div>

						<div id="next-slide" onclick="next()" class="fas fa-angle-right"></div>
						<div id="prev-slide" onclick="prev()" class="fas fa-angle-left"></div>

					</section>
	        	</div>
	        	<!-- <div class="col-sm-3">
	        		include 'includes/sidebar.php'; ?>
	        	</div> -->
	        </div>
	      </section>
	     
	    </div>
		<section class="banner">

			<div class="box">
				<img src="images/banner-1.jpg" alt="">
				<div class="content">
					<span>special offer</span>
					<h3>upto 50% off</h3>
					<a href="#" class="btn">shop now</a>
				</div>
			</div>

			<div class="box">
				<img src="images/banner-2.jpg" alt="">
				<div class="content">
					<span>special offer</span>
					<h3>upto 50% off</h3>
					<a href="#" class="btn">shop now</a>
				</div>
			</div>

			<div class="box">
				<img src="images/banner-3.jpg" alt="">
				<div class="content">
					<span>special offer</span>
					<h3>upto 50% off</h3>
					<a href="#" class="btn">shop now</a>
				</div>
			</div>

		</section>
	  </div>
  
  	<?php include 'includes/footer.php'; ?>
</div>

<?php include 'includes/scripts.php'; ?>
</body>
</html>