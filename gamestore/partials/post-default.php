<div class="col-lg-4 col-md-6 col-sm-12 d-flex flex-column justify-content-center align-items-center align-self-end">
    <h3> <a class="text-decoration-none text-dark" href="<?php the_permalink() ?>"><?php the_title() ?> </a> </h3>
    <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('medium', array('class' => 'img-fluid')) ?></a>

    <div class="mt-4" style="text-align: justify;"> <?php the_excerpt() ?> </div>
    <hr>
    <span class="mb-2 text-dark"> <?php the_category(' | ') ?></span>
    <a class="btn btn-outline-danger mb-4" href="<?php the_permalink() ?>">Mais detalhes</a>
</div>
 