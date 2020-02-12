<header id="masthead" class="site-header" role="banner">
	<div class="shell-full">
		<div class="site-branding">
			<?php if ( is_front_page() ) : ?>
				<h1 class="site-logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<div class="menu-main-menu-container">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false" aria-label="Toggle Main Menu"><span class="toggle-icon"></span></button>

				<div class="menu-wrapper">
					<?php
						wp_nav_menu( array(
							'menu'      => 'primary-menu',
							'menu_id'   => 'primary-menu',
							'container' => '',
						) );
					?>

					<div class="social-media">
						<a class="icon-social" href="https://www.facebook.com" target="_blank" rel="noopener noreferrer" aria-label="Visit our Facebook page"><i class="fa fa-facebook" aria-hidden="true" title="Facebook"></i></a>
						<a class="icon-social" href="https://twitter.com" target="_blank" rel="noopener noreferrer" aria-label="Visit our Twitter page"><i class="fa fa-twitter" aria-hidden="true" title="Twitter"></i></a>
						<a class="icon-social" href="https://www.instagram.com" target="_blank" rel="noopener noreferrer" aria-label="Visit our Instagram page"><i class="fa fa-instagram" aria-hidden="true" title="Instagram"></i></a>
						<a class="icon-social" href="https://www.pinterest.com" target="_blank" rel="noopener noreferrer" aria-label="Visit our Pinterest page"><i class="fa fa-pinterest" aria-hidden="true" title="Pinterest"></i></a>
					</div><!-- .social-media -->
				</div><!-- .menu-wrapper -->
			</div><!-- .menu-main-menu-container -->
		</nav><!-- #site-navigation -->

		<div class="site-search">
			<button id="search-button" class="search-button" aria-label="Toggle Search Form" on-click="">
				<i class="fa fa-search" aria-hidden="true"></i>
			</button>

			<div id="site-search-wrapper" class="site-search-wrapper is-hidden">
				<p class="adv-search"><a href="<?php echo esc_url( home_url('/advanced-search') ); ?>">Advanced Search</a></p>
				<?php get_search_form(); ?>
			</div>
		</div><!-- .site-search -->
	</div><!-- .shell-full -->
</header><!-- #masthead -->
