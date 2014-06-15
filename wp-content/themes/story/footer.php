<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Story
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo" id="footer">
		<div class="site-info">
			<?php printf( __( 'Developed by: %1$s Source code on %2$s.', '' ), 'NIT Open Source Developers.', '<a href="http://github.com/NIT-Warangal" rel="developed" target="_blank">GitHub</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>