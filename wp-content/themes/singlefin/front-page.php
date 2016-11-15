<?php /* Template Name: Front Page */ ?>

<?php get_header(); ?>

	<div id="single-post-container"></div>
	
    <div class="work" id="work">

        <div class="container" id="isotope">

            <?php
                $args = array(
                    'post_type'     => 'portfolio_item',
                    'sort_order'    => 'menu_order',
                    'posts_per_page'              => -1
                );

                $items = get_posts($args);

                foreach($items as $item) {
                    $id = $item->ID;
                    $title = get_the_title($id);
                    $link = get_permalink($id);
                    $thumb_mobile = get_field('mobile', $id);
                    $thumb_desktop = get_field('desktop', $id);
                    $grid = get_field('grid_width', $id);
                    ?>

                    <div class="work-desktop isotope-item" style="width: <?php echo $grid; ?>%; height: 300px; background-image: url('<?php echo $thumb_desktop['url']; ?>'); ">
                        <div class="work-desktop-hover">
                            <div class="work-desktop-hover-text">
                                <h3><a class="work-desktop-hover-button post-link" rel="<?php the_ID(); ?>" href="<?php echo $link; ?>"><?php echo $title; ?></a></h3>
                            </div>
                        </div>
                    </div>

                    <div class="work-mobile">
                        <a href="<?php echo $link; ?>">
                            <img src="<?php echo $thumb_mobile['url']; ?>" />
                        </a>
                    </div>
                <?php }
            ?>

        </div>

    </div>

    <div class="about" id="about">

        <?php
            $who_we_are = get_field('who_we_are');
            $what_we_do = get_field('what_we_do');
        ?>

        <div class="container">
            <h2>Who we are</h2>
                <div class="about-who">
                    <?php echo $who_we_are; ?>
                </div>

            <h2 class="with-top-margin">What we do</h2>
                <div class="about-do">
                    <?php echo $what_we_do; ?>
                </div>
        </div>

    </div>

<script>
    jQuery(document).ready(function() {

        if (jQuery(window).width() > 940) {
           jQuery('#isotope').isotope({
                layoutMode : 'fitRows'
            });             
        }
    })
</script>

<?php get_footer();