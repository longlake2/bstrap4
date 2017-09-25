

<?php 
	$hero_image = get_theme_mod( 'hero_image', '' ); 
	$hero_text = get_theme_mod( 'hero_text', '' );
?>

<?php if ($hero_image != '') : ?>
	<div class="sp-hero" style="background-image: url('<?php echo esc_url( $hero_image ); ?>')">
		<h1><?php echo $hero_text; ?></h1>
	</div>
<?php endif; ?>