<?php
	$bg = anvil_get_option( 'call_out_bg' );
	$title = anvil_get_option( 'call_out_title' );
	$message = anvil_get_option( 'call_out_message' );
	$btn_text = anvil_get_option( 'call_out_btn_text' );
	$btn_link = anvil_get_option( 'call_out_btn_link' );
?>
<div class="call-out" <?php if( !empty($bg) ) echo 'style="background-image:url('.esc_url($bg).');"'; ?>>
	<div class="shell-full">
		<div class="call-out-wrapper">
			<h2 class="call-out-title"><?php echo esc_attr($title); ?></h2>

			<div class="call-out-content">
				<?php echo wpautop( esc_attr($message) ) ; ?>
			</div>

			<?php if( !empty($btn_text) ) : ?>
				<div class="call-out-button">
					<a class="button" href="<?php echo esc_url($btn_link); ?>"><?php echo esc_attr($btn_text); ?></a>
				</div>
			<?php endif; ?>
		</div><!-- .call-out-wrapper -->
	</div><!-- .shell-full -->
</div><!-- .call-out -->