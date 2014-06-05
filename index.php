<!DOCTYPE html>
<html lang="en">
	<?php
		$current = "home";
		include("includes/head.php");
	?>

	<body class="<?php echo $current; ?>">
		<?php include("includes/navigation.php"); ?>

		<header class="header">
			<div id="slides">
				<img src="/images/slides/slide1.jpg" alt="">
				<img src="/images/slides/slide2.jpg" alt="">
				<img src="/images/slides/slide3.jpg" alt="">
				<img src="/images/slides/slide4.jpg" alt="">
				<img src="/images/slides/slide5.jpg" alt="">
			</div>

			<h1>
				Animal lovers with a <span class="hilite">history</span> to prove it.
				<div class="see-why">
					<span class="hl">See why</span>
					<span class="header-arrow"></span>
				</div>
			</h1>
		</header>

		<?php include("includes/emergency-modal.php"); ?>

		<section class="home-section first">
			<div class="home-section-image right"><div class="home-section-image-inner first-image"></div></div>

			<div class="home-section-copy left">
				<div class="home-section-copy-inner">
					<p>"Dr. Klein, Your passion for your work and your compassion for your clients was apparent to all of us. With all the problems that Rina presented, another doctor might have suggested euthanasia as the only option. It was clear to us that such a measure was your very last resort. Thank you again for all you do in caring for our pets."</p>
					<p class="attribution">- Katherina Maridakis</p>
				</div>

				<div class="color-box">Compassionate</div>
			</div>
		</section>

		<section class="home-section">
			<div class="home-section-image left"><div class="home-section-image-inner second-image"></div></div>

			<div class="home-section-copy right">
				<div class="home-section-copy-inner">
					<p>"Hi Alex, We thought you would appreciate this pic of Moose!  He carried this stick all the way home from the park.  It's very clear to us that the stem cell therapy has helped Moose tremendously.  His walking is much stronger and he just seems much happier and more playful.  Thank you so much for helping Moose and us throughout this past year. With all best wishes."</p>
					<p class="attribution">- Dale and John and Moose</p>
				</div>

				<div class="color-box btn-orange">Comprehensive</div>
			</div>
		</section>

		<section class="home-section">
			<div class="home-section-image right"><div class="home-section-image-inner third-image"></div></div>

			<div class="home-section-copy left">
				<div class="home-section-copy-inner">
					<p>"We brought a 10 year old cat in to Dr. K with a complex sarcoma which he first diagnosed correctly then presented us with
the range of options.  His kindness and confidence reassured us about going through with a complex surgery, though Dr. K acknowledged there were no guarantees.  He proceeded to execute an amazingly skillful surgical procedure and personally called us to tell us of his optimistic prognosis for recovery. All the time he exhibited an exceedingly high level of professionalism and an "above and beyond" personal concern, compassion, and care that we found both remarkable and extraordinary.  Today over eighteen months later, Little Kitty is as affectionate and full of life as ever. Never have we had a vet who showed as much real compassion and concern for our pets, or for us.  Dr. K. saved Little Kitty's life. We are ever grateful."</p>
					<p class="attribution">- Anele Rubin and Eric Banks</p>
				</div>

				<div class="color-box btn-purple">Neighborly</div>
			</div>
		</section>

		<?php include("includes/footer.php"); ?>
	</body>
</html>