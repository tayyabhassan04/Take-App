<?php get_header(); ?>
<div class="section-one">
	<div class="container">
		<div class="row flex-class justify-content-center align-items-center row-one">
			<div class="col-lg-12 col-md-12 col-xl-6 col-one"><h1><?php echo the_field('main_heading');?></h1>
			<p class="mt-4"><?php echo the_field('paragraph');?></p>
			<a type="button" class="btn mt-4" href="<?php echo the_field('button_text_link');?>"><?php echo the_field('button_text');?> </a>
			<div class="text-center link-style mt-4"><a href="<?php echo the_field('below_button_text_link');?>"><?php echo the_field('below_button_text');?></a></div>
			
			</div>

			<?php $hero_section_image = get_field('hero_section_image');
			$hero_section_picture=$hero_section_image['sizes']['large'];
			?>
			<div class="col-lg-12 col-md-12 col-xl-6 col-two"> <img class="img-fluid" src="<?php echo $hero_section_picture;?>"></div>
</div>
	</div>
</div>
	
<!--- Section 2 -->


<div class="section-second">
	<div class="container">
		<div class="row row mt-5 text-center">
			<div class="col-lg-12 col-md-12"><h2><?php echo the_field('second_section_heading'); ?></h2>
			<p class="w-75 text-center mx-auto set-width"><?php echo the_field('second_section_paragraph'); ?></p>
			</div>
														
</div>
	</div>
	
	<div class="container">
		<div class="row mt-5 justify-content-center align-items-center">
			<div class="col-lg-12 col-md-12 col-xl-6 second-col-one">
			<h3><?php echo the_field('sub_first_heading'); ?></h3>
			<p class="mt-4"><?php echo the_field('sub_first_paragraph'); ?></p>

										<?php

										if( have_rows('icon_box_first') ):

						    // Loop through rows.
						    while( have_rows('icon_box_first') ) : the_row();

						        // Load sub field value.
						        $sub_value = get_sub_field('icon_box_heading');
						        $sub_field_value = get_sub_field('icon_box_paragraph');
						        $sub_image = get_sub_field('icon_box_image');

						        ?>
						<div class="row mt-5 blurb-style">
										<div class="col-lg-2"><img class="img-fluid" src="<?php echo $sub_image; ?>"/></div>
										<div class="col-lg-10 ">
										<p><?php echo $sub_value; ?></p>
										<span><?php echo $sub_field_value; ?></span>
										</div>
										</div>


						  
						   <?php endwhile;

						// No value.
						else :
						    // Do something...
						endif; ?>
			</div>
														
			<div class="col-lg-12 col-md-12 col-xl-6 second-col-two"> <img class="img-fluid" src="<?php echo the_field('icon_box_1_image');?>"></div>
</div>
	</div>
	
	<div class="container">
		<div class="row mt-5 justify-content-center align-items-center flex-reverse-class">
		
		<div class="col-lg-12 col-md-12 col-xl-6 second-col-one"> <img class="img-fluid" src="<?php echo the_field('icon_box__second_image');?>"/></div>
			<div class="col-lg-12 col-md-12 col-xl-6 second-col-two">
			<h3><?php echo the_field('sub_second_heading_');?></h3>
			<p class="mt-4"><?php echo the_field('sub_second_paragraph');?></p>
			
										<?php

						// Check rows exists.
						if( have_rows('icon_box_second') ):

						    // Loop through rows.
						    while( have_rows('icon_box_second') ) : the_row();

						        // Load sub field value.
						        $sub_value_image = get_sub_field('icon_second_box_image');
						        $sub_value_heading = get_sub_field('icon_second_box_heading');
						        $sub_value_paragraph = get_sub_field('icon_second_box_paragraph');
						        
						        // Do something...
								?>
				<div class="row mt-5 blurb-style">
				<div class="col-lg-2"><img class="img-fluid" src="<?php echo  $sub_value_image; ?>"></div>
				<div class="col-lg-10">
				<p><?php echo $sub_value_heading?></p>
				<span><?php echo $sub_value_paragraph ?></span>
				</div>
				</div>
				<?php

						    // End loop.
						    endwhile;

						// No value.
						else :
						    // Do something...
						endif;

?>
			
			</div>
														
			
</div>
	</div>
</div>

			<div class="section-third">
				<div class="row text-center mt-5">
					<div class="col-lg-12">
						<span class="sub-heading"><?php echo the_field ('sub_heading');?> </span>
						<h2 class="w-75 mx-auto set-width"><?php echo the_field ('heading_third_section');?> </h2>
						<img class="img-fluid w-25 mt-5 set-width" src="<?php echo the_field ('center_image');?>">
						<p class="mx-auto mt-5 w-25 set-width"><?php echo the_field ('forth_section_paragraph');?></p>
					</div>
			</div>
			
			</div>
			
			
			
			<div class="section-forth">
			<div class="container-fluid">
				<div class="row mt-5">
												<?php

						// Check rows exists.
						if( have_rows('shop_detail') ):

						    // Loop through rows.
						    while( have_rows('shop_detail') ) : the_row();

						        // Load sub field value.
						        $sub_shop_image = get_sub_field('shop_image');
						        $sub_shop_title = get_sub_field('shop_heading');
						        $sub_shop_value = get_sub_field('shop_sub_heading');
						        ?>
						       	<div class="col-lg-3 col-md-12 text-center">
						<img class="img-fluid" src="<?php echo $sub_shop_image; ?>"/>
						<p class="mt-2 mb-1"><?php echo $sub_shop_title; ?></p>
						<p class=""><?php echo $sub_shop_value; ?></p>
					</div>
							<?php
						    // End loop.
						    endwhile;

						// No value.
						else :
						    // Do something...
						endif;
							?>

					
				</div>
				
			
			
			</div>
			</div>
			
			
			<div class="section-fifth">
			<div class="row text-center">
				<div class="col-lg-12">
				<h2 class="mt-5">Frequently asked questions</h2>
				<div class="faqs-style w-50 mx-auto set-width">
									<div class="accordion" id="accordionExample">

												<?php

									// Check rows exists.
									if( have_rows('faqs') ):
									    // Loop through rows.
									    $i=1;
									    while( have_rows('faqs') ) : the_row();

									        // Load sub field value.
									        $sub_questions = get_sub_field('faq_question');
									         $sub_answers = get_sub_field('faq_answer');
									      ?>
									        <div class="accordion-item">
						<h2 class="accordion-header" id="headingOne">
						  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $i;?>" aria-expanded="false" aria-controls="collapseTwo">
							<?php echo $sub_questions; ?>
						  </button>
						</h2>
						<div id="collapse<?php echo $i;?>" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
						  <div class="accordion-body"><?php echo  $sub_answers; ?>
						  </div>
						</div>
					  </div>
					  <?php
					  						$i++;
									    // End loop.
									    endwhile;
									    	
									// No value.
									else :
									    // Do something...

									endif;
									?>

					 
					</div>
					</div>
				
				</div>
			</div>
			</div>
			
			
			<div class="section-sixth">
			<div class="row text-center mt-5">
				<div class="col-lg-12 mt-5">
				<span class="sub-heading"><?php the_field('price_title');?></span>
				<h2 class=""><?php the_field('price_heading');?></h2>
				<p><?php the_field('price_sub_heading');?></p>
				<div class="box-style mx-auto">
				<ul class="mx-auto">

														<?php

								// Check rows exists.
								if( have_rows('take_app_features') ):

								    // Loop through rows.
								    while( have_rows('take_app_features') ) : the_row();

								        // Load sub field value.
								        $sub_feature_list = get_sub_field('feature_list');
								        ?>
								         <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
						  <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
						</svg>
					<h3 class="ml-5"><?php echo $sub_feature_list; ?> </h3>
					</li>
					<?php

								    // End loop.
								    endwhile;

								// No value.
								else :
								    // Do something...
								endif;
								?>
					 
				</ul>
				</div>	
				
			</div>
			</div>
			</div>
			
			<div class="section-seventh">
			<div class="row">

												<?php

						// Check rows exists.
						if( have_rows('package_name') ):

						    // Loop through rows.
						    while( have_rows('package_name') ) : the_row();

						        // Load sub field value.
						        $sub_value_package_category = get_sub_field('package_category');
						        $sub_value_package_price = get_sub_field('package_price');
						        $sub_value_mothlyyearly = get_sub_field('mothlyyearly');
						        $sub_value_package_button = get_sub_field('package_button');
						        $sub_value_package_button_link = get_sub_field('package_button_link');
						        // Do something...
						        	?>
						        		<div class="col-lg-12 col-space-top">
			<div class="box-style mx-auto">
				<div class="content">
				<h4 class="border-style"><?php echo $sub_value_package_category; ?></h4>
				<h3 class="price"><span style="font-size: 60px;font-weight: 800;"><?php echo $sub_value_package_price; ?></span><sub>SGD / <?php echo $sub_value_mothlyyearly; ?></sub> </h3>
				
				<a type="button" class="btn mt-4" href="<?php echo $sub_value_package_button_link; ?>"/> <?php echo $sub_value_package_button; ?> </a>
				</div>
				</div>
			</div>

						        	<?php
						    // End loop.
						    endwhile;

						// No value.
						else :
						    // Do something...
						endif;

?>


			
			</div>
			</div>
		
			<?php get_footer(); ?>