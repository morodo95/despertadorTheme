<div class="primeraseccion">
    <?php query_posts('posts_per_page=1&cat=14') ?>
    <?php while (have_posts()) : the_post(); ?>

    <div class="primera-1">
        <div class="img">
            <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">
                <?php if (has_post_thumbnail()) {
                    the_post_thumbnail('post-thumnails', array('class' => ''));
                }
                ?>
            </a>
        </div>
    </div>
    <div class="primera-2">
        <div class="contenido-primera-2">
            <?php
                    foreach ((get_the_category()) as $category) {
                        echo '<h2 id="category" style="color:#A42323;"> ' .$category->cat_name . '</h2> ';
                    }
                    ?>
            <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">
                <h1 class="post-<?php the_ID(); ?>" style="font-size:2em;"><?php the_title(); ?></h1>
            </a>
            <a href="<?php the_permalink() ?> " style="color:#707070; ">
                <p><?php the_excerpt(); ?></p>
            </a>
            <div class="categoria-author">
                <h5> <small> &nbsp; Hace </small>
                    <?php echo human_time_diff(get_the_time('U'), current_time('timestamp')) . ' '; ?></h5>

            </div>

        </div>
    </div>

    <?php endwhile; ?>
    <div class="primera-3">
        
        <a href="https://www.facebook.com/prensa.munilavalle">
            <img src="http://despertadorlavalle.com.ar/wp-content/uploads/2020/03/aviso-muni-2.gif" alt="muni" width="500px" height="350px" >
        </a>
        
    </div>
</div>
<div class="publicidad-grande2">
    <br>

</div>