<?php get_header(); ?>
				  
<div class="container contact white-bg">
	<div class="row">  
        <div class="col-md-12">
        	<h1><?php echo get_the_title(); ?></h1>
        	<?php
				the_post();
        		the_content();
        	?>
        	<h1>Отправить запрос</h1>
        </div>
        <div class="col-md-8">
                <?php echo do_shortcode( '[contact-form-7 id="403" title="my-feedback"]' );?>
        </div>
        <div class="col-md-4">
                <p>Отправьте нам сообщение с помощью этой формы, и мы свяжемся с вами в ближайшее время</p>
                <div class="alert alert-info"><strong>Внимание!</strong><br>Пожалуйста, заполните все поля</div>
        </div>
        	       
		
	</div>
</div>
<?php get_footer(); ?>