<!doctype html>
<html amp <?php echo AMP_HTML_Utils::build_attributes_string( $this->get( 'html_tag_attributes' ) ); ?>>
<head>
	<meta charset="utf-8">
    <link rel="dns-prefetch" href="https://cdn.ampproject.org">
	<?php do_action( 'amp_post_template_head', $this ); ?>
	<style amp-custom>
		<?php $this->load_parts( array( 'style' ) ); ?>
		<?php do_action( 'amp_post_template_css', $this ); ?>
	</style>
</head>

<body class="<?php echo esc_attr( $this->get( 'body_class' ) ); ?> single-post <?php ampforwp_the_body_class(); ?> <?php if(is_page()){ echo'amp-single-page'; };?> design_1_wrapper">

	<?php $this->load_parts( array( 'header-bar' ) ); ?>

	<article class="amp-wp-article">
		<?php do_action('ampforwp_post_before_design_elements') ?>

		<?php $this->load_parts( apply_filters( 'ampforwp_design_elements', array( 'empty-filter' ) ) ); ?>

		<?php do_action('ampforwp_post_after_design_elements') ?>
	</article>

	<?php do_action( 'amp_post_template_above_footer', $this ); ?>
	<?php $this->load_parts( array( 'footer' ) ); ?>
	<?php do_action( 'amp_post_template_footer', $this ); ?>

</body>
</html>

