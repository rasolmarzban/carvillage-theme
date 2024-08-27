<div class="site-section bg-white">
    <div class="container">
        <div class="row justify-content-center text-center mb-5">
            <div class="col-7 text-center mb-5">
                <h2>Our Blog</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo assumenda, dolorum necessitatibus eius earum voluptates sed!</p>
            </div>
        </div>

        <div class="row">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="post-entry-1 h-100">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('medium', array('class' => 'img-fluid')); ?>
                            </a>
                            <div class="post-entry-1-contents">

                                <h2><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h2>
                                <span class="meta d-inline-block mb-3">
                                    <?php the_date('F j, Y'); ?>, by <?php the_author_posts_link(); ?></span>
                                <p><?php the_excerpt(); ?></p>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>