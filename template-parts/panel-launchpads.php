<?php
	// Launchpad 1
	$lp1_img_id = anvil_get_option('lp1_img_id');
	$lp1_img = wp_get_attachment_image($lp1_img_id, 'large');
	$lp1_text = anvil_get_option('lp1_text');
	$lp1_link = anvil_get_option('lp1_link');

	// Launchpad 2
	$lp2_img_id = anvil_get_option('lp2_img_id');
	$lp2_img = wp_get_attachment_image($lp2_img_id, 'large');
	$lp2_text = anvil_get_option('lp2_text');
	$lp2_link = anvil_get_option('lp2_link');

	// Launchpad 3
	$lp3_img_id = anvil_get_option('lp3_img_id');
	$lp3_img = wp_get_attachment_image($lp3_img_id, 'large');
	$lp3_text = anvil_get_option('lp3_text');
	$lp3_link = anvil_get_option('lp3_link');
?>
<div class="launchpads-container">
	<div class="launchpads-wrapper section-grid-3">
		<?php if( !empty($lp1_text) ) : ?>
			<div class="launchpad grid-item">
				<div class="launchpad-image">
					<a class="image-wrapper" href="<?php echo esc_url($lp1_link); ?>"><?php echo $lp1_img; ?></a>
				</div>

				<div class="launchpad-details">
					<h3 class="launchpad-title"><a href="<?php echo esc_url($lp1_link); ?>"><?php echo esc_attr($lp1_text); ?></a></h3>
				</div>
			</div><!-- .launchpad -->
		<?php endif; ?>

		<?php if( !empty($lp2_text) ) : ?>
			<div class="launchpad grid-item">
				<div class="launchpad-image">
					<a class="image-wrapper" href="<?php echo esc_url($lp2_link); ?>"><?php echo $lp2_img; ?></a>
				</div>

				<div class="launchpad-details">
					<h3 class="launchpad-title"><a href="<?php echo esc_url($lp2_link); ?>"><?php echo esc_attr($lp2_text); ?></a></h3>
				</div>
			</div><!-- .launchpad -->
		<?php endif; ?>

		<?php if( !empty($lp3_text) ) : ?>
			<div class="launchpad grid-item">
				<div class="launchpad-image">
					<a class="image-wrapper" href="<?php echo esc_url($lp3_link); ?>"><?php echo $lp3_img; ?></a>
				</div>

				<div class="launchpad-details">
					<h3 class="launchpad-title"><a href="<?php echo esc_url($lp3_link); ?>"><?php echo esc_attr($lp3_text); ?></a></h3>
				</div>
			</div><!-- .launchpad -->
		<?php endif; ?>
	</div><!-- .launchpads-wrapper -->
</div><!-- .launchpads-container -->