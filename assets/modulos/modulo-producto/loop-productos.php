<script>
function incrustar_hoja_estilos_comision() {
    var hoja_estilos_url =
        '<?php echo get_site_url() . '/wp-content/themes/basespotify/assets/modulos/modulo-musica/modulo-musica.css';?>';
    var hoja_estilos = document.createElement('link');
    hoja_estilos.rel = 'stylesheet';
    hoja_estilos.href = hoja_estilos_url;
    document.head.appendChild(hoja_estilos);
}
incrustar_hoja_estilos_comision();
</script>

<!-- #seccion 5 contenidos -->
<section class="contenido container ">

    <div class="row mt-4">

        <?php $active = true;
                $temp = $wp_query;
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $post_per_page = -1; // -1 shows all posts
                $args = array(
                    'post_type' => 'product',
                    'orderby' => 'date',
                    'order' => 'ASC',
                    'paged' => $paged,
                    'posts_per_page' => $post_per_page,
                    
                );
                $wp_query = new WP_Query($args);
        if (have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
                    

                <div class="col-4 col-lg-2 ">
                  <h1><?php echo get_the_title();?></h1>
                  <a href="<?php the_permalink();?>">ver mas</a>
                    
                    
                </div>

            
            
        

        
        <?php endwhile; endif; wp_reset_query(); $wp_query = $temp ?>
    </div>



</section>
<!------seccion contacto---->