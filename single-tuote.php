<?php get_header(); ?>

<div class="container mt-5 pt-5 mb-5">
    <?php while ( have_posts() ) : the_post(); ?>
        
        <nav aria-label="breadcrumb" class="mb-4 ms-2">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="<?php echo get_post_type_archive_link('tuote'); ?>" class="text-decoration-none fw-semibold" style="color: #007AFF;">
                        <i class="dashicons dashicons-arrow-left-alt2" style="vertical-align: middle;"></i> Tuotteet
                    </a>
                </li>
                <li class="breadcrumb-item active text-muted" aria-current="page"><?php the_title(); ?></li>
            </ol>
        </nav>

        <div class="bg-white p-4 p-lg-5 rounded-5 shadow-sm border" style="border-color: rgba(0,0,0,0.05) !important;">
            <div class="row align-items-center g-5">
                
                <div class="col-lg-6">
                    <?php if ( has_post_thumbnail() ) : ?>
                        <?php the_post_thumbnail('large', ['class' => 'img-fluid rounded-4 shadow-sm w-100', 'style' => 'object-fit: cover; max-height: 500px;']); ?>
                    <?php else: ?>
                        <div class="bg-light rounded-4 d-flex align-items-center justify-content-center border" style="height: 400px;">
                            <span class="text-muted"><i class="dashicons dashicons-format-image" style="font-size: 40px; width: 40px; height: 40px;"></i></span>
                        </div>
                    <?php endif; ?>
                </div>
                
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold mb-4" style="letter-spacing: -1px; color: #1C1C1E;">
                        <?php the_title(); ?>
                    </h1>
                    
                    <div class="content mb-5 text-muted" style="font-size: 1.15rem; line-height: 1.6;">
                        <?php the_content(); ?>
                    </div>
                    
                    <hr class="mb-4" style="opacity: 0.1;">
                    
                    <div class="d-flex flex-wrap gap-3">
                        <a href="<?php echo site_url('/yhteystiedot/'); ?>" class="btn btn-primary btn-lg px-4 shadow-sm">
                            Pyydä tarjous tästä
                        </a>
                    </div>
                </div>
                
            </div>
        </div>

    <?php endwhile; ?>
</div>

<?php get_footer(); ?>