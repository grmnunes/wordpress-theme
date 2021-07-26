<?php get_header(); ?>

    <div class="container" id="post">
        <div class="row mt-5 ">
            <div class="col-sm-12 col-lg-12 ml-4 d-flex d-flex flex-column justify-content-center align-items-center">

                <?php if(have_posts()) : while(have_posts()) : the_post(); ?>

                    <h1 class="p-4"> <?php the_title(); ?></h1>
                    <?php the_post_thumbnail('medium', array('class' => 'img-fluid')) ?>
                    <div class="p-4">
                        <span style="text-align: justify;"><?php the_content(); ?></span>
                    </div>
                <?php endwhile; endif; ?>
    </div>
    </div class="container p-4" id="related-posts">
    
        <h2>Você também pode estar procurando</h2>

        <?php
            $post_categories = get_the_category();

            $related_posts = new WP_Query(array(
                'posts_per_page' => 3,
                'post__not_in' => array($post->ID),
                'cat' => $post_categories[0]->term_id
            ));

            if($related_posts->have_posts()) {
?>
                <div class="row">
<?php
                    while($related_posts->have_posts()){
                        $related_posts->the_post();

                        get_template_part('partials/post', 'related');
                    }
?>
                </div>
<?php

                wp_reset_postdata();
            } else {
                echo '<span> Oops! Não encontramos nenhum produto relacionado. </span>';
            }

        ?>
    </div>
    <div class="container p-4" id="comments">
        <?php 
            if ( comments_open() || get_comments_number() > 0 ) :
                comments_template();
            endif; 
        ?>
    </div>


<?php get_footer(); ?>