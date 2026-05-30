<footer class="mt-5 p-4 text-center" style="background-color: #FFFFFF; border-top: 1px solid #E5E5EA;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 text-md-start mb-3 mb-md-0">
                <p class="mb-0 text-muted" style="font-size: 14px;">&copy; <?php echo date('Y'); ?> DigiSähkö Oy. Kaikki oikeudet pidätetään.</p>
            </div>
            <div class="col-md-6 text-md-end">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer',
                    'fallback_cb' => function() {
                        echo '<ul class="list-unstyled mb-0">';
                        echo '<li class="d-inline me-3"><a href="' . home_url() . '" class="text-muted text-decoration-none" style="font-size: 14px;">Etusivu</a></li>';
                        echo '<li class="d-inline me-3"><a href="' . get_post_type_archive_link('tuote') . '" class="text-muted text-decoration-none" style="font-size: 14px;">Tuotteet</a></li>';
                        echo '<li class="d-inline"><a href="' . site_url('/yhteystiedot/') . '" class="text-muted text-decoration-none" style="font-size: 14px;">Yhteystiedot</a></li>';
                        echo '</ul>';
                    },
                    'container' => false,
                    'menu_class' => 'list-unstyled mb-0'
                ));
                ?>
            </div>
        </div>
    </div>
    <?php wp_footer(); ?>
</footer>
</body>
</html>