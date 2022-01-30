<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

	<?php include 'includes/navbar.php'; ?>
	 
	  <div class="content-wrapper">
	    <!-- header section ends -->

<!-- header section  -->

<section class="heading" style="background-color: white;">
    <p style="color: gray"> <a href="index.php" style="color: black">home</a> >> contact </p>
</section>

<!-- header section -->

<!-- contact section starts  -->

<section class="contact">

    <h1 class="title"> get in touch </h1>

    <div class="row">

        <form action="">
            <input type="text" placeholder="your name" class="box">
            <input type="number" placeholder="your number" class="box">
            <input type="email" placeholder="your email" class="box">
            <textarea name="" placeholder="your message" id="" cols="30" rows="10"></textarea>
            <input type="submit" value="send message" class="btn">
        </form>

        <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d61360.19124747535!2d120.71352411546445!3d16.0128932623308!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x339119b206db3947%3A0x9e1a201124b04f41!2sTayug%2C%20Pangasinan!5e0!3m2!1sen!2sph!4v1641773036131!5m2!1sen!2sph" allowfullscreen="" loading="lazy"></iframe>

    </div>

</section>

<!-- contact section ends -->

	  </div>
  
  	<?php include 'includes/footer.php'; ?>
</div>

<?php include 'includes/scripts.php'; ?>
</body>
</html>