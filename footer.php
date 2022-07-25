<footer class="footer">
    <div class="footer__container">
        <h2>
            <a href="<?php echo esc_url(home_url('/')); ?>">
                <?php bloginfo('name'); ?>
            </a>
        </h2>
        <nav class="footer__site-map">
            <?php if (has_nav_menu('primary')) : ?>
                <?php wp_nav_menu(
                    array(
                        'theme_location' => 'primary'
                    )
                ); ?>
        </nav>
    <?php endif; ?>
    </div>
    <p class="copy">&copy;Rin Kunisada All rights reserved.</p>
</footer>
<?php wp_footer(); ?>
</body>

</html>