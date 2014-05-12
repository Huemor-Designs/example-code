<!DOCTYPE html>
<html lang="en">
	<?php
		$current = "home";
		include("includes/head.php");
	?>

	<body class="<?php echo $current; ?>">
		<?php include("includes/navigation.php"); ?>

		<header class="header">
			<div class="header-inner">
				<h1>Animal lovers with a <span class="hilite">history</span> to prove it.</h1>
				<h2>See why</h2>
				<span class="header-arrow"></span>
			</div>
		</header>

		<?php include("includes/emergency-modal.php"); ?>

		<section class="home-section first">
			<div class="home-section-image right"><div class="home-section-image-inner first-image"></div></div>

			<div class="home-section-copy left">
				<div class="home-section-copy-inner">
					<p>"Your passion for your work and your compassion for your clients was appareant to all of us. With all the problems that Rina presented, another Dr. might have suggested euthanasia as the only resort. It was clear to us that such a measure was your last resort."</p>
				</div>

				<div class="color-box">Compassionate</div>
			</div>
		</section>

		<section class="home-section">
			<div class="home-section-image left"><div class="home-section-image-inner second-image"></div></div>

			<div class="home-section-copy right">
				<div class="home-section-copy-inner">
					<p>"Your passion for your work and your compassion for your clients was appareant to all of us. With all the problems that Rina presented, another Dr. might have suggested euthanasia as the only resort. It was clear to us that such a measure was your last resort."</p>
				</div>

				<div class="color-box btn-orange">Consistent</div>
			</div>
		</section>

		<section class="home-section">
			<div class="home-section-image right"><div class="home-section-image-inner third-image"></div></div>

			<div class="home-section-copy left">
				<div class="home-section-copy-inner">
					<p>"Your passion for your work and your compassion for your clients was appareant to all of us. With all the problems that Rina presented, another Dr. might have suggested euthanasia as the only resort. It was clear to us that such a measure was your last resort."</p>				</div>

				<div class="color-box btn-purple">Neighborly</div>
			</div>
		</section>

		<?php include("includes/footer.php"); ?>
	</body>
</html>