<?php
/*
* Archive Page
*/
?>

<?php get_header(); ?>  

<!-- BODY LOOP -->
	<div class="container">

		<div class="row">
			<div class="col-md-9">

			<!-- MULAI LOOP -->
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<!-- END OF CODE -->

				<div class="post-box">
					<div class="post-box-title">
						<a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
					</div>
					<div class="post-box-meta">
						<div class="row">
							<div class="col-md-3">
								<div class="font-color"><i class="fa fa-pencil-square fa-lg"></i> By <a href="#"><?php the_author(); ?></a></div>
							</div>
							<div class="col-md-3">
								<div class="font-color"><i class="fa fa-calendar fa-lg"></i> <?php the_time('F j, Y'); ?></div>
							</div>
							<div class="col-md-3">
								<div class="font-color"><i class="fa fa-tags fa-lg"></i> Tags: <a href="#"><?php the_tags(); ?></a></div>
							</div>
							<div class="col-md-3">
								<div class="font-color"><i class="fa fa-comment fa-lg"></i> <a href="#"> <?php comments_number(); ?> </a></div>
							</div>
						</div>
					</div>
					<div class="post-box-content">					
						<?php the_content(); ?>
					</div>
				</div>

			<!-- STOP LOOP -->
			<?php endwhile; else : ?>
				<p><?php _e( 'Sorry, post yang anda cari tidak ada.' ); ?></p>
			<?php endif; ?>
			<!-- END OF CODE -->

			</div>

			<div class="col-md-3">
				<div class="sidebar-box">
					<?php dynamic_sidebar(); ?>
				</div>
				<div class="social-button-wrapper">
					<p><a href="http://hacker-newbie.org/index.php" class="btn btn-lg btn-success" target="_blank"><i class="fa fa-comments-o fa-lg pull-left"></i>Forum</a></p>
					<p><a href="https://www.facebook.com/hacker.newbie.org" class="btn btn-lg btn-primary" target="_blank"><i class="fa fa-facebook fa-lg pull-left"></i>Facebook</a></p>
					<p><a href="http://twitter.com/hn_community" class="btn btn-lg btn-info" target="_blank"><i class="fa fa-twitter fa-lg pull-left"></i>Twitter</a></p>	
				</div>	
			</div>
		</div>
	</div>
</body>

<?php get_footer(); ?> 