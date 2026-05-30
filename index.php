<?php get_header(); ?>

<div class="container mt-5 pt-5">
    <div class="row">
        <div class="col-lg-8">
            <h1 class="display-4 fw-bold mb-5" style="letter-spacing: -1px;">Uusimmat artikkelit</h1>
            
            <?php
            if (have_posts()) {
                while (have_posts()) {
                    the_post();
                    ?>
                    <article class="mb-5 pb-5 border-bottom">
                        <h2 class="fw-bold mb-3">
                            <a href="<?php the_permalink(); ?>" class="text-decoration-none text-dark">
                                <?php the_title(); ?>
                            </a>
                        </h2>
                        
                        <div class="text-muted mb-3" style="font-size: 14px;">
                            <?php echo get_the_date('j.n.Y'); ?> | 
                            <?php echo the_author_posts_link(); ?>
                        </div>
                        
                        <?php if (has_post_thumbnail()) { ?>
                            <div class="mb-4">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('medium', array('class' => 'img-fluid rounded-4', 'style' => 'max-height: 300px; object-fit: cover;')); ?>
                                </a>
                            </div>
                        <?php } ?>
                        
                        <div class="text-muted">
                            <?php the_excerpt(); ?>
                        </div>
                        
                        <a href="<?php the_permalink(); ?>" class="btn btn-primary btn-sm mt-3">
                            Lue lisää
                        </a>
                    </article>
                    <?php
                }
                
                // Sivutus
                echo '<nav aria-label="Sivutus" class="mt-5">';
                echo paginate_links(array(
                    'type' => 'list',
                    'prev_text' => '← Edellinen',
                    'next_text' => 'Seuraava →'
                ));
                echo '</nav>';
            } else {
                ?>
                <div class="alert alert-info">
                    <p><?php esc_html_e('Artikkeleja ei löytynyt.'); ?></p>
                </div>
                <?php
            }
            ?>
        </div>
        
        <div class="col-lg-4">
            <div class="bg-light p-4 rounded-4">
                <h3 class="fw-bold mb-4">Sivupalkit</h3>
                <?php
                if (is_active_sidebar('primary-sidebar')) {
                    dynamic_sidebar('primary-sidebar');
                } else {
                    echo '<p class="text-muted">Ei sivupalkkia konfiguroitu.</p>';
                }
                ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>