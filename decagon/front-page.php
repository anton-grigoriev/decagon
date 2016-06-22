<?php get_header(); ?>
				  
<div class="container bg-white">
	<div class="row my-row">
		<div class="col-md-6">
			<div class="my-block">
				<div class="row">
					<div class="col-xxs-12 col-xs-4 col-sm-4 col-md-5">
						<div class="zoomfx">
							<a href="/category/aw/"><img alt="Активность воды" class="img-responsive" src="<?php bloginfo('stylesheet_directory'); ?>/img/snacks.jpg"></a>
						</div>
					</div>					                       
					<div class="col-xxs-12 col-xs-8 col-sm-8 col-md-7">
						<h1><a href="/category/aw/">Активность воды</a></h1>
						<p>Активность воды — один из наиболее критичных параметров при определении качества и стабильности товаров, которые потребляются каждый день</p>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="my-block">
				<div class="row">
					<div class="col-xxs-12 col-xs-4 col-sm-4 col-md-5">
						<div class="zoomfx">
							<a href="/category/soil/"><img alt="Исследования почвы" class="img-responsive" src="<?php bloginfo('stylesheet_directory'); ?>/img/soil.jpg"></a>
						</div>
					</div>
					<div class="col-xxs-12 col-xs-8 col-sm-8 col-md-7">
						<h1><a href="/category/soil/">Исследования почвы</a></h1>
						<p>Оборудование Decagon Devices позволяет исследовать различные параметры почв</p>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="my-block">
				<div class="row">
					<div class="col-xxs-12 col-xs-4 col-sm-4 col-md-5">
						<div class="zoomfx">
							<a href="/category/environment/"><img alt="Окружающая среда" class="img-responsive" src="<?php bloginfo('stylesheet_directory'); ?>/img/env.jpg"></a>
						</div>
					</div>
					<div class="col-xxs-12 col-xs-8 col-sm-8 col-md-7">
						<h1><a href="/category/environment/">Окружающая среда</a></h1>
						<p>Системы мониторинга используются для мониторинга растительной фенологии, индекса поверхности и измерения влажности листа, динамики движения пигмента в листьях, эффективность использования света</p>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="my-block">
				<div class="row">
					<div class="col-xxs-12 col-xs-4 col-sm-4 col-md-5">
						<div class="zoomfx">
							<a href="/category/plants/"><img alt="Исследования растений" class="img-responsive" src="<?php bloginfo('stylesheet_directory'); ?>/img/plants.jpg"></a>
						</div>
					</div>
					<div class="col-xxs-12 col-xs-8 col-sm-8 col-md-7">
						<h1><a href="/category/plants/">Исследования растений</a></h1>
						<p>Оборудование для исследования растений применяется для мониторинга растительной фенологии</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-12">
			<h2 class="sub-header">Новости</h2>
		</div>
		<?php				
			$the_news_query = new WP_Query(
			array(
				'order' => 'DESC',
				'posts_per_page' => 4,
				'category_name' => 'news'
				)
			);
			if ( $the_news_query->have_posts() ) {
				while ( $the_news_query->have_posts() ) {
					$the_news_query->the_post();
					echo '<div class="col-md-3">';
					echo the_date('Y.m.d', '<p class="news-date">', '</p>') . 
					'<h3 class="news-sub-header"><a href="' . get_permalink() . '">' . get_the_title() . '</a></h3><p>' . get_the_content() . '</p></div>';
					//echo the_date('Y.m.d', '<p class="news-date">', '</p>') . '<p>' . get_the_content() . '</p></div>';
				  }
			  } else {
				  	// no more posts;
				  }
			?>
	</div>
	
	<div class="row">
		<div class="col-lg-10 col-lg-offset-1 col-md-12 about">
			<h2 class="sub-header">О компании</h2>
			<?php
				the_post();
		        the_content();
		    ?>
		    
		</div>
		<div class="col-lg-10 col-lg-offset-1 col-md-12">
			<h2 class="sub-header">Наши клиенты</h2>
		    <div class="row">
		    	<div class="col-md-2 reference"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/logos/dohler.png" class="img-responsive"></div>
		    	<div class="col-md-2 reference"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/logos/phil-mor.png" class="img-responsive"></div>		    	
		    	<div class="col-md-2 reference"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/logos/nestle.png" class="img-responsive"></div>
		    	<div class="col-md-2 reference"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/logos/mondelez.png" class="img-responsive"></div>
		    	<div class="col-md-2 reference"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/logos/nii-ramn.png" class="img-responsive"></div>
		    	<div class="col-md-2 reference"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/logos/yash.png" class="img-responsive"></div>		    			    	
		    </div>
		</div>
	</div>
</div>
<?php get_footer(); ?>