<?php get_header(); ?>

    <?php 
        if(have_posts()) :
    ?>       
        <div class="container">
            <div class="row">
    <?php                
                while(have_posts()):
                    the_post();
                    get_template_part('partials/post', 'default');

                endwhile;
    ?>
            </div>
        </div>
    <?php
        endif;
    ?>
    <div class="container d-flex justify-content-center mb-4" id="paination">
        <?php
            global $wp_query;
            echo paginate_links(array(
                'current' => max(1, get_query_var('paged')),
                'total' => $wp_query->max_num_pages,
                'prev_text' => '<',
                'next_text' => '>',
                'before_page_number' => '  [  ',
                'after_page_number' => '  ]  ',
            ));
        ?>
    </div>

<?php get_footer(); // É possivel carregar outros footer passando o paramentro com o nome do footer
                    // footer-nome-do-footer no parametro omitir o footer-