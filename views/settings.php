<?php

/**
 * The admin settings page template.
 *
 * @package CrowdFavorite\CreatioBackbone
 */

?>

<div class="wrap">
	<h1></h1>
	<h1><?php esc_html_e('Crowd Favorite\'s Creatio Backbone', CF_CREATIO_BACKBONE_PLUGIN_HANDLE); ?></h1>
	<form method="post" action="options.php">
		<table class="form-table" role="presentation">
			<?php
			settings_fields('cf_creatio_backbone');
			do_settings_sections(CF_CREATIO_BACKBONE_PLUGIN_HANDLE);
			submit_button();
			?>
	</form>
</div>
