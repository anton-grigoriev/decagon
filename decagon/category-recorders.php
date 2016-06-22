<?php get_header(); ?>
				  
<div class="container white-bg">
	<div class="row">  
        <div class="col-md-12">
        	<h1>Регистраторы данных</h1>
		</div>
	</div>
  				
  	<div class="row">
  		<div class="col-md-8">
  			<?php				
			$the_rec_dev_query = new WP_Query(
			array(
				'order' => 'ASC',
				'category_name' => 'recorders',
				'tag' => 'device'
				)
			);

			if ( $the_rec_dev_query->have_posts() ) {
				while ( $the_rec_dev_query->have_posts() ) {
					$the_rec_dev_query->the_post();
					echo '<div class="media">
							<a class="media-href" href=' . get_permalink() .'>' . get_the_post_thumbnail( $post_id, array( 130, 130) ) . '</a>
							<div class="media-body">
								<h2 class="media-heading"><a href=' . get_permalink() .'>' . get_the_title() . '</a></h2>
								<p>' . get_the_excerpt() . '</p>
							</div>
						</div>';
				  }
			  } else {
				  	// no more posts;
				  }
				?>
  		</div>
  		<div class="col-md-4 sidebar">
  			<?php 
				$the_rec_article_query = new WP_Query(
				array(
					'order' => 'ASC',
					'category_name' => 'recorders',
					'tag' => 'article'
				)
			);

			if ( $the_rec_article_query->have_posts() ) {
				while ( $the_rec_article_query->have_posts() ) {
					$the_rec_article_query->the_post();
					echo '<h2><a href=' . get_permalink() .'>' . get_the_title() . '</a></h2>
					<p>' . get_the_excerpt() . '</p>';
				  }
			  } else {
				  	// no more posts;
				  }
			?>
  		</div>
  	</div>
 </div>
<?php get_footer(); ?>