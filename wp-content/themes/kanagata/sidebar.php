<div class="side col-lg-4 col-md-4 col-sm-12 col-xs-12<?php echo kanagata_get_layout_class( 'side' ); ?>">
	<div id="sidebar">
		<!-- all page -->
		<?php if ( has_nav_menu( 'side' ) ) : ?>
			<!-- side menu -->
			<?php
			wp_nav_menu(
				array(
					'theme_location'  => 'side',
					'container_class' => 'menu-side-container',
					'menu_class'      => 'menu-side'
				)
			);
			?>
		<?php endif; ?>
		<?php if ( is_front_page() ) : ?>
			<!-- home sidebar is displayed at only front page -->
			<?php if ( ! dynamic_sidebar( 'home' ) ) : ?><?php endif; ?>
		<?php endif; ?>
		<?php if ( ! is_front_page() ) : ?>
			<!-- sub sidebar is displayed at only sub page -->
			<?php if ( ! dynamic_sidebar( 'sub' ) ) : ?><?php endif; ?>
		<?php endif; ?>
		<!-- common sidebar is displayed at all  -->
		<?php if ( ! dynamic_sidebar( 'common' ) ) : ?><?php endif; ?>

		<?php if ( is_front_page() ) : ?>
			<!-- There is no side menu and no one active sidebar -->
			<?php if ( ! has_nav_menu( 'side' )
				&& ! is_active_sidebar( ' home ' )
				&& ! is_active_sidebar( 'common ' )
			) : ?>
				<p>
					<?php _e( 'This theme is kanagata.', 'kanagata' ); ?><br>
					<?php _e( 'Side bar can be displayed in the following way.', 'kanagata' ); ?>
				</p>
				<ul>
					<li><?php _e( '1. Appearance &gt; Widgets.', 'kanagata' ); ?></li>
					<li><?php _e( '2. Appearance &gt; menu. Please create a menu named side.', 'kanagata' ); ?></li>
				</ul>
			<?php endif; ?>
		<?php endif; ?>

		<?php if ( ! is_front_page() ): ?>
			<!-- There is no side menu and no one active sidebar -->
			<?php if ( ! has_nav_menu( 'side' )
				&& ! is_active_sidebar( 'sub' )
				&& ! is_active_sidebar( 'common ' )
			) : ?>
				<p>
					<?php _e( 'This theme is kanagata.', 'kanagata' ); ?><br>
					<?php _e( 'Side bar can be displayed in the following way.', 'kanagata' ); ?>
				</p>
				<ul>
					<li><?php _e( '1. Appearance &gt; Widgets.', 'kanagata' ); ?></li>
					<li><?php _e( '2. Appearance &gt; menu. Please create a menu named side.', 'kanagata' ); ?></li>
				</ul>
			<?php endif; ?>
		<?php endif; ?>
	</div>
</div><!-- sidebar -->