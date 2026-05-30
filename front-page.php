<?php get_header(); ?>

<div class="container mt-5 pt-4">
    <div class="row align-items-center justify-content-center text-center py-5 shadow-sm rounded-5" 
         style="background: white; border: 1px solid rgba(0,0,0,0.05);">
        <div class="col-lg-8">
            <div class="mb-4">
                <div class="mb-4">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/logo.svg" 
                     alt="DigiSähkö Logo" 
                     class="img-fluid" 
                     style="height: 80px; width: auto; filter: brightness(0); opacity: 0.9;">
            </div>
            </div>
            
            <h1 class="display-2 fw-bold mb-3" style="letter-spacing: -2px; color: #1C1C1E;">
                Tulevaisuuden koti.<br><span style="color: #007AFF;">Tänään.</span>
            </h1>
            
            <p class="lead mb-4 text-muted mx-auto" style="max-width: 600px; font-size: 1.5rem;">
                Älykkäät sähköasennukset.
            </p>
            
            <div class="d-flex justify-content-center gap-3">
                <a href="<?php echo get_post_type_archive_link('tuote'); ?>" class="btn btn-primary btn-lg px-5 py-3 shadow">
                    Tutustu palveluihin
                </a>
                <a href="<?php echo site_url('/yhteystiedot/'); ?>" class="btn btn-link btn-lg text-decoration-none" style="color: #007AFF; font-weight: 600;">
                    Ota yhteyttä <i class="dashicons dashicons-arrow-right-alt2" style="vertical-align: middle;"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="container my-5 py-5">
    <div class="row align-items-center g-5">
        <div class="col-md-6 order-md-2">
            <div class="p-2 bg-white rounded-5 shadow-sm border h-100 d-flex">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/etusivuKuva.jpg" 
                     alt="Älykoti asennus" 
                     class="img-fluid rounded-4 w-100" 
                     style="object-fit: cover; min-height: 450px;">
            </div>
        </div>
        <div class="col-md-6 order-md-1">
            <h2 class="display-4 fw-bold mb-4" style="letter-spacing: -1px;">Miksi valita DigiSähkö?</h2>
            <p class="fs-5 text-muted mb-4">
                Olemme erikoistuneet luomaan järjestelmiä, jotka toimivat saumattomasti taustalla. Valvonta, valaistus ja lämmitys – kaikki hallittavissa yhdellä kosketuksella.
            </p>
            
            <div class="row g-4">
                <div class="col-sm-6">
                    <h4 class="fw-bold mb-2">Turvallisuus</h4>
                    <p class="text-muted">Huippuluokan kamerat ja älylukot pitävät huolta kodistasi.</p>
                </div>
                <div class="col-sm-6">
                    <h4 class="fw-bold mb-2">Säästö</h4>
                    <p class="text-muted">Optimoitu energiankulutus laskee sähkölaskuasi merkittävästi.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mb-5 py-5 text-center bg-white rounded-5 shadow-sm border">
    <h3 class="display-5 fw-bold mb-4">Valmiina aloittamaan?</h3>
    <p class="text-muted mb-5 fs-5">Luo unelmiesi koti ammattilaisten avulla.</p>
    <a href="<?php echo site_url('/yhteystiedot/'); ?>" class="btn btn-dark btn-lg px-5 py-3" style="border-radius: 12px; font-weight: 600;">
        Pyydä ilmainen arvio
    </a>
</div>

<?php get_footer(); ?>