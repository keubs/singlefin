<?php get_header(); ?>

<?php
    $description = get_field('description');
    $galleries = get_field('galleries');
?>

<div class="item container project">

    <div class="item-introduction">
        <div class="col-6">
            <?php the_title('<h1>', '</h1>'); ?>
            <?php if($galleries) { ?>
                <ul class="item-introduction-contents">
                    <?php $i = 1; foreach ($galleries as $gallery) {
                        $category = $gallery['title'];
                        $images = $gallery['images'];
                        $category_selector = str_replace(' ', '_', strtolower($category));
                        $category_display = str_replace('_', ' ', ucfirst($category)); ?>
                        <li><a class="item-introduction-contents-link" href="#<?php echo $category_selector; ?>"><?php echo $i . '. '; echo $category_display; ?></a></li>
                    <?php $i++; } ?>
                </ul>
            <?php } ?>
        </div>
        <div class="col-6">
            <div class="item-introduction-description">
                <?php echo $description; ?>
            </div>
        </div>

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
                    <h2><?php echo sprintf("%d", $count) . ". " . $category_display; ?></h2>

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
        $previous = get_previous_post_link('%link', 'next >');
        $next = get_next_post_link('%link', '< previous');
    ?>

    <div class="container">
        <div class="item-navigation-next"><?php if ($previous) { echo $previous; } else { echo " &nbsp; "; } ?></div>
        <div class="item-navigation-previous"><?php if ($next) { echo $next; } else { echo " &nbsp; "; } ?></div>
    </div>
</div>

<?php get_footer(); ?>