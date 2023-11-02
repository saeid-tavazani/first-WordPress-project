<div class="container" id="footer">
    <div class="row mb-4">
        <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('footer')) : else : ?><?php endif; ?>
        <?php get_template_part('inc/social-network'); ?>
    </div>
</div>
</body>
<?php wp_footer(); ?>
</html>