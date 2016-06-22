<?php get_header(); ?>
				  
<div class="container white-bg">
	<div class="row">  
        <div class="col-md-12">
        	<h1>Активность воды</h1>
		</div>
	</div>
  				
  	<div class="row">
  		<div class="col-md-8 col-lg-9">
  			<div class="row">
  			<?php				
			$the_aw_dev_query = new WP_Query(
			array(
				'order' => 'DESC',
				'category_name' => 'aw',
				'tag' => 'device'
				)
			);

			if ( $the_aw_dev_query->have_posts() ) {
				while ( $the_aw_dev_query->have_posts() ) {
					$the_aw_dev_query->the_post();
					echo '<div class="col-md-6"><div class="media">
							<a class="media-href" href=' . get_permalink() .'>' . get_the_post_thumbnail( $post_id, array( 100, 100)) . '</a>
							<div class="media-body">
								<h2 class="media-heading"><a href=' . get_permalink() .'>' . get_the_title() . '</a></h2>
								<p>' . get_the_excerpt() . '</p>
							</div>
						</div>
						</div>
						';
				  }
			  } else {
				  	// no more posts;
				  }
				?>
			</div>
  		</div>
  		<div class="col-md-4 col-lg-3 sidebar">
  			<?php 
				$the_aw_article_query = new WP_Query(
				array(
					'order' => 'ASC',
					'category_name' => 'aw',
					'tag' => 'article'
				)
			);

			if ( $the_aw_article_query->have_posts() ) {
				while ( $the_aw_article_query->have_posts() ) {
					$the_aw_article_query->the_post();
					echo "<h2><a href=" 
					. get_permalink() 
					.">" 
					. get_the_title() 
					. "</a></h2><div><p>"
					. get_the_excerpt() . "</p></div>";
				  }
			  } else {
				  	// no more posts;
				  }
			?>
  		</div>
  	</div>
 </div>
<?php get_footer(); ?>