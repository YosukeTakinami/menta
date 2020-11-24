<?php
?>
<footer>
        <h2><img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer-logo.svg" alt=""></h2>
    </footer>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
        offset: 120,
        delay: 600,
        duration: 300,
        easing: 'ease',
        once: false,
        mirror: false,
        anchorPlacement: 'top-bottom',
    });
    </script>
    <?php wp_footer(); ?>
</body>
</html>