<?php 
$pageTitle = "Unique T-shirts designed by a frog";	
$section = "";
include('inc/header.php'); ?>

		<div class="section banner">

			<div class="wrapper">

				<img class="hero" src="img/mike-the-frog.png" alt="Mike the Frog says:">
				<div class="button">
					<a href="shirts.php">
						<h2>Hey, I&rsquo;m Mike!</h2>
						<p>Check Out My Shirts</p>
					</a>
				</div>
			</div>

		</div>

		<div class="section shirts latest">

			<div class="wrapper">

				<h2>Mike&rsquo;s Latest Shirts</h2>

				<?php include("inc/products.php"); ?>
				<ul class="products">
					<?php foreach($products as $product) { ?>
					<li><a href="#">
							<img src="img/shirts/shirt-108.jpg">
							<p>View Details</p>
						</a>
					</li><li>
						<a href="#">
							<img src="img/shirts/shirt-107.jpg">
							<p>View Details</p>
						</a>
					</li><li>
						<a href="#">
							<img src="img/shirts/shirt-106.jpg">
							<p>View Details</p>
						</a>
					</li><li>
						<a href="#">
							<img src="img/shirts/shirt-105.jpg">
							<p>View Details</p>
						</a>
					</li>
					<?php } ?>								
				</ul>

			</div>

		</div>

<?php include('inc/footer.php'); ?>