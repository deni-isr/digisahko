<?php get_header(); ?>

<div class="container mt-5 pt-5 mb-5">
    <div class="text-center mb-5">
        <h1 class="display-4 fw-bold" style="letter-spacing: -1px; color: #1C1C1E;">Ota yhteyttä</h1>
        <p class="lead text-muted">Olemme täällä auttamassa. Laita viestiä tai soita!</p>
    </div>

    <div class="row g-5 justify-content-center">
        <div class="col-lg-5">
            <div class="bg-white p-4 p-lg-5 rounded-5 shadow-sm border h-100" style="border-color: rgba(0,0,0,0.05) !important;">
                <h3 class="fw-bold mb-4">Yhteystiedot</h3>
                <p class="text-muted mb-5" style="line-height: 1.6;">Voit olla meihin yhteydessä alla olevan lomakkeen kautta tai suoraan sähköpostilla ja puhelimitse.</p>
                
                <div class="d-flex align-items-center mb-4">
                    <div class="bg-light d-flex align-items-center justify-content-center rounded-circle me-3" style="width: 50px; height: 50px;">
                        <i class="dashicons dashicons-location" style="font-size: 24px; width: 24px; height: 24px; color: #007AFF;"></i>
                    </div>
                    <div>
                        <h6 class="fw-bold mb-1">Osoite</h6>
                        <span class="text-muted">Sähkötie 1, 00100 Helsinki</span>
                    </div>
                </div>

                <div class="d-flex align-items-center mb-4">
                    <div class="bg-light d-flex align-items-center justify-content-center rounded-circle me-3" style="width: 50px; height: 50px;">
                        <i class="dashicons dashicons-phone" style="font-size: 24px; width: 24px; height: 24px; color: #007AFF;"></i>
                    </div>
                    <div>
                        <h6 class="fw-bold mb-1">Puhelin</h6>
                        <span class="text-muted">040 123 4567</span>
                    </div>
                </div>

                <div class="d-flex align-items-center">
                    <div class="bg-light d-flex align-items-center justify-content-center rounded-circle me-3" style="width: 50px; height: 50px;">
                        <i class="dashicons dashicons-email-alt" style="font-size: 24px; width: 24px; height: 24px; color: #007AFF;"></i>
                    </div>
                    <div>
                        <h6 class="fw-bold mb-1">Sähköposti</h6>
                        <span class="text-muted">info@digisahko.fi</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-7">
            <div class="bg-white p-4 p-lg-5 rounded-5 shadow-sm border h-100" style="border-color: rgba(0,0,0,0.05) !important;">
                <h3 class="fw-bold mb-4">Lähetä viesti</h3>
                
                <div id="form-result"></div>
                
                <form id="yhteystiedot-form">
                    <div class="mb-4">
                        <label for="nimi" class="form-label fw-semibold text-muted">Nimi *</label>
                        <input type="text" class="form-control bg-light border-0" id="nimi" required style="padding: 15px; border-radius: 12px;">
                    </div>
                    <div class="mb-4">
                        <label for="email" class="form-label fw-semibold text-muted">Sähköposti *</label>
                        <input type="email" class="form-control bg-light border-0" id="email" required style="padding: 15px; border-radius: 12px;">
                    </div>
                    <div class="mb-4">
                        <label for="viesti" class="form-label fw-semibold text-muted">Viesti</label>
                        <textarea class="form-control bg-light border-0" id="viesti" rows="5" style="padding: 15px; border-radius: 12px;"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary w-100 py-3 mt-2 shadow-sm" style="border-radius: 12px; font-weight: 600; font-size: 1.1rem;">
                        Lähetä viesti
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>