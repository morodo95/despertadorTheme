<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package    WordPress
 * @subpackage Twenty_Eleven
 * @since      Twenty Eleven 1.0
 */

get_header(); ?>

    <div id="primary">
        <div id="content" role="main">

            <article id="post-0" class="post error404 not-found">
               <br>
                <header class="entry-header">
                   
                    <div id="cats"><h3 style="background-color:white" class="entry-title"><?php _e('Lo sentimos, no encontramos lo que estabas buscando :(', 'twentyeleven'); ?></h3>
                    
                    </div>
                </header>
                <img style="border:white;background-color:white;" src="http://www.decorjade.com/imagenes/error404.jpg" alt="">
                <div class="entry-content">
                    <p><?php _e('It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching, or one of the links below, can help.', 'twentyeleven'); ?></p>

        <?php get_search_form(); ?>

        <?php the_widget('WP_Widget_Recent_Posts', array( 'number' => 10 ), array( 'widget_id' => '404' )); ?>

                    <div class="widget">
                        <h2 class="widgettitle"><?php _e('Categorias con mas publicaciones', 'twentyeleven'); ?></h2>
                        <ul>
        <?php wp_list_categories(array( 'orderby' => 'count', 'order' => 'DESC', 'show_count' => 1, 'title_li' => '', 'number' => 10 )); ?>
                        </ul>
                    </div>

        <?php
        /* translators: %1$s: smilie */
        $archive_content = '<p style="color:black">' . sprintf(__('Intenta buscar en las notas mensuales. %1$s', 'twentyeleven'), convert_smilies(':)')) . '</p>';
        the_widget('WP_Widget_Archives', array('count' => 0 , 'dropdown' => 1 ), array( 'after_title' => '</h2>'.$archive_content ));
        ?>

                </div><!-- .entry-content -->
            </article><!-- #post-0 -->

        </div><!-- #content -->
    </div><!-- #primary -->

<?php get_footer(); ?>