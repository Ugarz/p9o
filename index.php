<?php
/**
* Template Name: Index
* @package sydney-child
*/

get_header(); ?>
	<?php
		$programme2016 = site_url()."/wp-content/uploads/2015/09/PROGRAMME-p--le-l--ger.pdf";
		$imgProgramme2016 = site_url()."/wp-content/uploads/2015/08/programme_p9o.jpg";
		$PLI9 = site_url()."/wp-content/uploads/2015/09/pli09.jpg";
		$events = "?post_type=tribe_events";
		$galerie = "?page_id=112";
	?>

	<div id="primary" class="content-area col-md-9 <?php echo sydney_blog_layout(); ?>">
		<main id="main" class="post-wrap" role="main">
		<div class="container">

			<div id="index-bloc-1" class="card row">
				<div class="col-lg-12">
					<?php if (have_posts()) : ?>
						<!-- Si j'ai des Posts, j'affiche cette partie -->
						<?php while (have_posts()) : the_post(); ?>
							<!-- Pour CHAQUE Post, j'affiche ça -->
							<div class="post">
								<h3> <a href="#">Les Forums du Champ Lacanien dans l'Ouest</a></h3>
								<p> <?php the_content(); ?> </p>
							</div>
						<?php endwhile; ?>
						<?php else : ?>
						<!-- Si il n'y a pas de Post, j'affiche cette partie -->
						<p class="nothing"> Je n'ai rien à afficher ! </p>
					<?php endif; ?>
				</div>
			</div>

			<div id="index-bloc-2" class="card row">
			  <div class="col-lg-12 col-md-12 col-sm-12">
			    <h3>Séminaires et groupes de travail</h3>
	      	<?php
	      		/* MENU EDITABLE - VILLES */
	      		$defaults = array(
	      			'theme_location'  => 'id-menu-villes',
	      			'menu'            => '',
	      			'container'       => '',
	      			'container_class' => '',
	      			'container_id'    => '',
	      			'menu_class'      => 'nav_villes',
	      			'menu_id'         => 'menu_villes',
	      			'echo'            => true,
	      			'fallback_cb'     => 'wp_page_menu',
	      			'before'          => '',
	      			'after'           => '',
	      			'link_before'     => '',
	      			'link_after'      => '',
	      			'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
	      			'depth'           => 0,
	      			'walker'          => ''
	      		);
	      		wp_nav_menu($defaults)
	      	?>
			    <hr>
			  </div>
		    <div class="col-lg-12 col-md-12 col-sm-12">
		    	<h3><a href="<?php echo esc_url( $events ); ?>">Conférences et journées</a></h3>
			    <hr>
		    </div>
		    <div class="col-lg-12 col-md-12 col-sm-12">
		    	<h3>Cartels</h3>
		    	<?php
		    		/* MENU EDITABLE - CARTELS */
	      		$defaults = array(
	      			'theme_location'  => 'id-menu-cartels',
	      			'menu'            => '',
	      			'container'       => '',
	      			'container_class' => '',
	      			'container_id'    => '',
	      			'menu_class'      => 'nav_cartels',
	      			'menu_id'         => 'menu_cartels',
	      			'echo'            => true,
	      			'fallback_cb'     => 'wp_page_menu',
	      			'before'          => '',
	      			'after'           => '',
	      			'link_before'     => '',
	      			'link_after'      => '',
	      			'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
	      			'depth'           => 0,
	      			'walker'          => ''
	      		);
	      		wp_nav_menu($defaults)
	      	?>
			    <hr>
		    </div>
		    <div class="col-lg-12 col-md-12 col-sm-12">
		    	<h3>Formations cliniques du Champ Lacanien</h3>
		    	<?php
		    		/* MENU EDITABLE - FCCL */
	      		$defaults = array(
	      			'theme_location'  => 'id-menu-fccl',
	      			'menu'            => '',
	      			'container'       => '',
	      			'container_class' => '',
	      			'container_id'    => '',
	      			'menu_class'      => 'nav_fccl',
	      			'menu_id'         => 'menu_fccl',
	      			'echo'            => true,
	      			'fallback_cb'     => 'wp_page_menu',
	      			'before'          => '',
	      			'after'           => '',
	      			'link_before'     => '',
	      			'link_after'      => '',
	      			'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
	      			'depth'           => 0,
	      			'walker'          => ''
	      		);
	      		wp_nav_menu($defaults)
	      	?>
		    </div>
			</div>

			<!-- <div id="index-bloc-2" class="card row">
			  <div class="col-lg-12 col-md-12 col-sm-9">
			    <h3>Événements</h3>

			    <p>Mes events</p>
			    
			  </div>
			</div> -->
		</div>

<?php get_footer(); ?>

