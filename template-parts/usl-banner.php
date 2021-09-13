<section class="banner-sec" style = "background-image: url(<?php echo wp_get_attachment_image_src(carbon_get_the_post_meta('bnr_head_img'), 'full')[0]; ?>);">
	<div class="nuar_blk"></div>
	<div class="container">
		<h1>
			<? echo carbon_get_the_post_meta("bnr_head"); ?>
		</h1>
		<p>
			<? echo carbon_get_the_post_meta("bnr_head_subtext"); ?>
		</p>
	</div>
</section>