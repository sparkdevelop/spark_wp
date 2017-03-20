
<?php get_header(); ?>
<div class="container" style="margin-top: 10px">
    <div class="row" style="width: 100%">
        <div class="col-md-8 col-sm-8 col-xs-8">
            <!--引入动态模板-->
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
                <!--    标题和内容-->
                <?php the_content(); ?>

            <?php endwhile;?>
            <?php else: ?>
                <p><?php _e('Sorry, this page does not exist.'); ?></p>

            <?php endif; ?>
        </div>

        <div class="col-md-4 col-sm-4 col-xs-4 right">
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>
