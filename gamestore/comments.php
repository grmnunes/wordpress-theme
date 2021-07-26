<h3> Comentários </h3>
<?php
    if ( have_comments() ) {

        foreach ( $comments as $comment ) {
?>        <div class="comment border border-light border-2 p-4 mt-2">
            <div class="author-avatar">
                <?php echo get_avatar($comment, 60) ?>
            </div>
            <div class="comment-data">
                <span id="author" class="fw-bold"> <?php comment_author() ?></span>
                <span id="comment"> <?php comment_text() ?></span>
                <span class="fw-bold">Em: </span><span> <?php comment_date() ?></span>
            </div>
          </div>
<?php
        }

        the_comments_pagination();
            
    } else {
        echo 'Esse produto não tem nenhum comentário. seja o primeiro!';
    }

    comment_form(array(
        'comment_field' => '<textarea name="comment" class="form-control my-4 mx-2" placeholder="Comentário" id="floatingTextarea2" style="height: 100px" required ></textarea>',
        'fields' => array(
            'author' => ' <input type="text" name="author" class="form-control m-2" placeholder="Seu nome" value="" required />',
            'email' => '<input type="email" name="email" class="form-control m-2" placeholder="name@example.com" value="" required />',
            'url' => ' <input type="text" name="url" class="form-control m-2" placeholder="Seusite" value=""/>',
        ),

        'class_submit' => 'btn btn-primary',
        'title_reply' => 'Diga algo sobre o produto!'
    ));

?>