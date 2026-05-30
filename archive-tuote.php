<?php get_header(); ?>

<div class="container mt-5 pt-5 mb-5">
    <div class="text-center mb-5">
        <h1 class="display-4 fw-bold" style="letter-spacing: -1px; color: #1C1C1E;">Palvelumme ja Tuotteemme</h1>
        <p class="lead text-muted">Tutustu älykkäisiin ratkaisuihimme, jotka tekevät arjestasi helpompaa.</p>
    </div>
    
    <div class="row g-4">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm" style="border-radius: 24px;">
                    
                    <?php if ( has_post_thumbnail() ) : ?>
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('medium_large', [
                                'class' => 'card-img-top', 
                                'style' => 'height: 240px; object-fit: cover; border-top-left-radius: 24px; border-top-right-radius: 24px;'
                            ]); ?>
                        </a>
                    <?php else: ?>
                        <div class="bg-light d-flex align-items-center justify-content-center" style="height: 240px; border-top-left-radius: 24px; border-top-right-radius: 24px;">
                            <i class="dashicons dashicons-format-image text-muted" style="font-size: 40px; width: 40px; height: 40px;"></i>
                        </div>
                    <?php endif; ?>
                    
                    <div class="card-body p-4 d-flex flex-column">
                        <h3 class="card-title fw-bold mb-3" style="font-size: 1.5rem; letter-spacing: -0.5px;">
                            <a href="<?php the_permalink(); ?>" class="text-decoration-none" style="color: #1C1C1E;">
                                <?php the_title(); ?>
                            </a>
                        </h3>
                        
                        <p class="card-text text-muted mb-4" style="line-height: 1.6;">
                            <?php echo wp_trim_words(get_the_excerpt(), 15); ?>
                        </p>
                        
                        <div class="mt-auto">
                            <a href="<?php the_permalink(); ?>" class="btn w-100" style="background-color: #F2F2F7; color: #007AFF; border-radius: 12px; font-weight: 600;">
                                Lue lisää <i class="dashicons dashicons-arrow-right-alt2" style="vertical-align: middle;"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        <?php endwhile; else : ?>
            <div class="col-12 text-center py-5">
                <p class="text-muted fs-4">Tuotteita ei löytynyt.</p>
            </div>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>