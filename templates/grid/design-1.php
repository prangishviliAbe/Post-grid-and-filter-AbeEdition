<?php if($gridcol == '2') {
	$postgrid = "6";
} else if($gridcol == '3') {
	$postgrid = "4";
}  else if($gridcol == '4') {
	$postgrid = "3";
}  else if($gridcol == '5') {
	$postgrid = "c5";	
} else if ($gridcol == '1') {
	$postgrid = "12";
} else {
	$postgrid = "12";
}
?>

<div class="pgafu-post-grid  pgafu-medium-<?php echo $postgrid; ?> pgafu-columns <?php echo $css_class; ?>">	
	
	<?php if($showCategory == "true" && $cate_name !='') { ?>
		<div class="pgafu-post-categories">
			<?php echo $cate_name; ?>
		</div> 
	
		
	
	<div class="pgafu-post-grid-content <?php if ( !has_post_thumbnail() ) { echo 'no-thumb-image'; } ?>">
		
		
		
		
		
		
		
		<h2 class="pgafu-post-title">   <!-- title -->
			<a href="<?php echo $post_link; ?>"><?php the_title(); ?></a>
		</h2>
		
		
		<?php		
		if ( has_post_thumbnail() ) { ?>
		<div class="pgafu-post-image-bg" style="<?php echo $height_css; ?>">
			<a href="<?php echo $post_link; ?>">
				<img src="<?php echo $post_featured_image; ?>" alt="<?php the_title(); ?>" />
			</a>
			
		</div>
		
		<?php if($show_read_more == 'true') { ?>
						<a href="<?php echo $post_link; ?>" class="readmorebtn"><?php _e( 'Read More', 'post-grid-and-filter-ultimate' ); ?></a>
					<?php } ?>	
		
		<?php } ?>		

		
		<?php } 
		 
			
			if($showContent == "true") { ?>
			<div class="pgafu-post-content">				
					<div class="pgafu-post-short-content"><?php echo pgafu_get_post_excerpt( $post->ID, get_the_content(), $words_limit, $content_tail ); ?></div>
					<!-- Read more -->		
			</div>
		<?php } ?>		
	</div>
</div>