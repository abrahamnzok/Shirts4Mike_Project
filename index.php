<?php
$page_title = 'Home';
include('inc/header.php');
include ('inc/products.php');
?>
	<div id="content">

		<div class="section banner">

			<div class="wrapper">

				<img class="hero" src="img/mike-the-frog.png" alt="Mike the Frog says:">
				<div class="button">
					<a href="#">
						<h2>Hey, I&rsquo;</h2>
						<h2>m Mike!</h2>
						<p>Check Out My Shirts</p>
					</a>
				</div>
			</div>
		</div>

		<div class="section shirts latest">

			<div class="wrapper">

				<h2>Mike&rsquo;s Latest Shirts</h2>

				<ul class="products">
					<?php
						get_last_four();
					 ?>
				</ul>

			</div>

		</div>

	</div>

<?php
include ('inc/footer.php');
?>