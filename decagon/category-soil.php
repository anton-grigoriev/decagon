<?php get_header(); ?>
				  
<div class="container white-bg">
	<div class="row">  
        <div class="col-md-12">
        	<h1>Исследования почвы</h1>
		</div>
	</div>
  				
  	<div class="row">
  		<div class="col-md-8 col-lg-9">
  			<div class="row">
  		<?php				
			$the_soil_dev_query = new WP_Query(
			array(
				'order' => 'DESC',
				'category_name' => 'soil',
				'tag' => 'device'
				)
			);

			if ( $the_soil_dev_query->have_posts() ) {
				while ( $the_soil_dev_query->have_posts() ) {
					$the_soil_dev_query->the_post();
					echo '<div class="col-md-6">
							<div class="media">
							<a class="media-href" href=' . get_permalink() .'>' . get_the_post_thumbnail( $post_id, array( 100, 100) ) . '</a>
							<div class="media-body">
								<h2 class="media-heading"><a href=' . get_permalink() .'>' . get_the_title() . '</a></h2>
								<p>' . get_the_excerpt() . '</p>
							</div>
						</div>
						</div>';
				  }
			  } else {
				  	// no more posts;
				  }
				?>
			</div>
		</div>
		<div class="col-md-4 col-lg-3 sidebar">
			<h2>Обратите внимание</h2>
			<div>
			<p>Для сбора информации с какого-либо датчика влажности почвы необходим стационарный регистратор данных или же портативный регистратор ProCheck. Регистраторы данных Decagon Devices защищены от неблагоприятных условий окружающей среды, не нуждаются в программировании, а также не нуждаются во внешнем источнике питания, т.к. работают от обычных элементов питания размера АА</p>
			</div>

			<h2>Хотите узнать больше?</h2>
			<div>
			<p>Участвуйте в вебинарах, регулярно проводимых компанией Decagon Devices. Чтобы узнать, какие вебинары планируются в ближайшее время, следите за нашими <a href="http://decagon.ru/category/news/">новостями</a></p>
			</div>
			
			<?php 
				$the_soil_article_query = new WP_Query(
				array(
					'order' => 'ASC',
					'category_name' => 'soil',
					'tag' => 'article'
				)
			);

			if ( $the_soil_article_query->have_posts() ) {
				while ( $the_soil_article_query->have_posts() ) {
					$the_soil_article_query->the_post();
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