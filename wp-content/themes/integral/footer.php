<?php
/**
 * Footer section for our theme
 *
 * @package WordPress
 * @subpackage Integral
 * @since Integral 1.0
 */
?>
<?php global $integral; ?>
<section class="copyright dark">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
                <div class="copyrightinfo"><p><?php echo $integral['copyright-text']; ?></p></div>
			</div>
		</div>
	</div>
</section>
<?php wp_footer(); ?>
<?php get_template_part('sections/custom'); ?>
<!-- PrettyPhoto Code START -->
<script type="text/javascript" charset="utf-8">
		jQuery(document).ready(function($){
			$("a[rel^='prettyPhoto']").prettyPhoto({
				social_tools: false,
				theme: 'light_rounded',
                show_title: false,
                callback: function(){}
			});
		});
</script>
<!-- PrettyPhoto Code END -->
</body>
</html>