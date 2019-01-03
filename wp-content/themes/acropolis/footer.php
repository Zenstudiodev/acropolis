<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Acrópolis
 */

?>

</div><!-- #content -->

<footer id="colophon" class="site-footer">
    <div class="site-info">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div id="logo_footer">
                        <img src="/wp-content/uploads/2018/12/logo.png">
                    </div>
                </div>
                <div class="col-md-5">
                    <h3>Contactenos</h3>
                    <p class="footer_info"><i class="fas fa-phone"></i> 2336-0138</p>
                    <p class="footer_info"><i class="fas fa-map-marker"></i> Jardines de la asuncion, 41 avenida 13 - 98 zona 5</p>
                    <p class="footer_info"><i class="fas fa-envelope"></i> info@centroeducativoacropolis.com</p>
                </div>
                <div class="col-md-4">
                    <h3>Boletín</h3>
                    <p>
                        Para estar enterado de las noticias mas recientes
                        agregue su correo a nuestro boletín informativo.
                    </p>
                    <div class="tnp tnp-subscription">
                        <form method="post" action="http://acropolis.zenstudiogt.com/?na=s" onsubmit="return newsletter_check(this)">

                            <input type="hidden" name="nlang" value="">
                            <div class="tnp-field tnp-field-email"><label>Email</label><input class="tnp-email" type="email" name="ne" required></div>
                            <div class="tnp-field tnp-field-button"><input class="tnp-submit" type="submit" value="Suscribase">
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
