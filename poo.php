<div class="recent-post" id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>
    <header class="entry-header">
        <?php if (has_post_thumbnail()) : ?>
            <div class="entry-thumbnail" style="background-image:url(<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>)">
                <?php //the_post_thumbnail( 'pyxlwuff-featured-image' ); 
                ?>
            </div>
        <?php endif; ?>
        <div class="entry-meta">
            <div class="publish-date">
                <time datetime="<?php echo esc_attr(get_the_date('c')); ?>">
                    <?php echo esc_html(get_the_date()); ?>
                </time>
            </div>
            <div class="entry-title">
                <h2 class="entry-title"><a class="entry-title" href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
            </div>
        </div>

        <div class="entry-summary">
            <?php the_category(); ?>
        </div>
    </header>
</div>