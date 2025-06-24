<article>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php if (has_post_thumbnail()) : ?>
        <div class="post-thumbnail">
            <?php the_post_thumbnail('thumbnail'); ?>
            <a href="<?php the_permalink(); ?>" class="post-thumbnail-link">
                <?php the_post_thumbnail(); ?>"><?php the_post_thumbnail(array(275, 275)); ?></a>
                <?php endif;?>
                <div  class="meta-info">
                    <p>Posted in <?php echo get_the_date(); ?> by <?php the_author_posts_link(); ?></p>
                    <p>Categories:<?php the_category(''):?></p>
                    <?php endif;?>
                    <?php if (has_tag()) : ?>
                        <p>Tags<?php the_tags(''.','); ?></p>
                        <?php endif;?>
                </div>
                <?php the_excerpt(); ?>

        </article
