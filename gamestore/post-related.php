<div class="row">
    <div class="col-lg-3 col-md-6 col-sm-12 d-flex flex-column justify-content-center align-items-center">
        <h6> <a class="text-decoration-none text-dark" href="<?php the_permalink() ?>"><?php the_title() ?> </a> </h4>
        <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('medium', array('class' => 'img-fluid')) ?> </a>
    </div>
</div>