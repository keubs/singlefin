
<div class="header modal-header">
	<div class="container">
	
    <!-- <div class="header-waves"></div> -->
		<p class="close-post">Back to Home</p>
		<a href="#work">All Projects</a>
	    
	    
	</div>
</div>


<?php
    $description = get_field('description');
    $galleries = get_field('galleries');
?>
	
<div class="single-wrapper">
	<div class="item container project">
	    <?php the_title('<h1>', '</h1>'); ?>
	    <div class="item-introduction">
	        <div class="item-introduction-description">
	            <?php echo $description; ?>
	        </div>
	
	        <?php if($galleries) { ?>
	            <ol class="item-introduction-contents">
	                <?php foreach ($galleries as $gallery) {
	                    $category = $gallery['title'];
	                    $images = $gallery['images'];
	                    $category_selector = str_replace(' ', '_', strtolower($category));
	                    $category_display = str_replace('_', ' ', ucfirst($category)); ?>
	                    <li><a class="item-introduction-contents-link" href="#<?php echo $category_selector; ?>"><?php echo $category_display; ?></a></li>
	                <?php } ?>
	            </ol>
	        <?php } ?>
	    </div>
	
	    <?php if($galleries) {
	        $count = 1; ?>
	        <div class="item-galleries">
	            <?php foreach ($galleries as $gallery) {
	                $category = $gallery['title'];
	                $images = $gallery['images'];
	                $category_selector = str_replace(' ', '_', strtolower($category));
	                $category_display = str_replace('_', ' ', ucfirst($category)); ?>
	                <div id="<?php echo $category_selector; ?>">
	                    <h2><?php echo sprintf("%02d", $count) . ". " . $category_display; ?></h2>
	
	                        <?php foreach ($images as $image) { ?>
	                            <img class="item-galleries-image" src="<?php echo $image['url']; ?>" />
	                        <?php } ?>
	                </div>
	            <?php $count++; } ?>
	        </div>
	    <?php } ?>
	
	</div>
	
	<div class="item-navigation">
	
	    <?php
	        $previous = get_previous_post_link('%link', '< previous');
	        $next = get_next_post_link('%link', 'next >');
	    ?>
	
	    <div class="container">
	        <div class="item-navigation-previous"><?php if ($previous) { echo $previous; } else { echo " &nbsp; "; } ?></div>
	        <div class="item-navigation-next"><?php if ($next) { echo $next; } else { echo " &nbsp; "; } ?></div>
	        <div class="item-navigation-top"><a href="#top">Back to top</a></div>
	    </div>
	</div>
</div>