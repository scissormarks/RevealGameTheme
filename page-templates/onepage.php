<?php 
/*
Template Name: Onepage
Template Post Type: page
*/
?>
<?php get_header(); ?>

	<section class="pageCover">
		<div class="coverContent">
			<div class="logo-img">
				<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo">
			</div>
			<div class="coverContentBottom">
				<a class="videoPlay" href="https://www.youtube.com/watch?v=SHIa5PlPXpE" target="_blank">
					<img src="<?php echo get_template_directory_uri(); ?>/img/ui/ui_player-play.png">
					<p>Watch The Teaser</p>
				</a>
				<a class="arrowDown" href="#down"><img src="<?php echo get_template_directory_uri(); ?>/img/ui/ui_arrow-down.png"/></a>
			</div>
			
		</div>
	
		<div class="coverVideo" >
		<video autoplay muted loop id="coverVideo" style="background-image: url('<?php echo get_template_directory_uri(); ?>/vid/noCoverVideoBg.png');background-size: cover; background-position: center; ">
		  <source src="<?php echo get_template_directory_uri(); ?>/vid/coverVideoSma.mp4" type="video/mp4">
		  Your browser does not support HTML5 video.
		</video>
	</section>
	<main role="main" id="down">
		<!-- sections -->
		<?php get_template_part('template-parts/child-page-loop'); ?>
		<!-- /sections -->
	</main>

<?php get_footer(); ?>