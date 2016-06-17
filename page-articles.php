<?php
/**
* Template Name: Page simple
* @package sydney-child
*/
get_header(); ?>


	<div id="primary" class="content-area col-md-9 <?php echo sydney_blog_layout(); ?>">
		<main id="main" class="post-wrap" role="main">
		<div class="container page_articles">

			<div class="row">
				<div class="col-lg-12">
					<?php if (have_posts()) : ?>
						<!-- Si j'ai des Posts, j'affiche cette partie -->
						<?php while (have_posts()) : the_post(); ?>
							<!-- Pour CHAQUE Post, j'affiche ça -->
							<div class="post">
								<h2 class="post-title"> <a href="#"><?php the_title()?></a></h2>
								<div class="post-content"> <?php the_content(); ?> </div>
							</div>
						<?php endwhile; ?>
						<?php else : ?>
						<!-- Si il n'y a pas de Post, j'affiche cette partie -->
						<p class="nothing"> Aucun article n'a été trouvé ! </p>
					<?php endif; ?>
				</div>
			</div>
		</div>

<?php get_footer(); ?>

