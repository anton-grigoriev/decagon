<?php get_header(); ?>
				  
<div class="container white-bg">
	<div class="row">  
        <div class="col-md-12">
        	<h1>Архив новостей</h1>
		</div>
	</div>
  				
  	<div class="row">
  		<div class="col-md-10">
  		<?php				
			$the_news_query = new WP_Query(
			array(
				'order' => 'DESC',
				'category_name' => 'news'
				)
			);
			if ( $the_news_query->have_posts() ) {
				while ( $the_news_query->have_posts() ) {
					$the_news_query->the_post();
					// echo '<div class="news">';
					// echo the_date('Y.m.d', '<p class="news-date">', '</p>') . '<p>' . get_the_content() . '</p></div>';
					echo the_date('Y.m.d', '<p>', '</p>') . '<p>' . get_the_content() . '</p>';
				  }
			  } else {
				  	// no more posts;
				  }
		?>
		</div>
  	</div>
</div>
<?php get_footer(); ?>