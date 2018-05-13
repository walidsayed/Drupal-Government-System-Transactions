<?php
/**
 * @file
 * Filename: node--home_page_gallery.tpl.php.
 * Website:  http://www.ordasoft.com
 * Author: ordasoft dev team ordasoft.com
 * Description: this node is output fields content type features.
 * Create this content type and add to it the following fields:
 *  Icons - machine name - field_icon_name_featurs;
 *  Title - machine name - title;
 *  Body - machine name -  field_body_featurs.
 */
?>
<div id="node-<?php print $node->nid; ?>" class="">
	<?php
	$imgcount = count($node->field_images['und']);
		$k = 0;
	for ($i = 0; $i < $imgcount; $i++) {
	    $image_uri = $node->field_images['und'][$i]['uri'];
		$masthead_raw = image_style_url('home_page', $image_uri);
		
	if($k == 0) echo '<div class="rowImages">';
    		$k++;
		?>
		<a href="<?php print file_create_url($node->field_images['und'][$i]['uri']); ?>" rel="group-<?php print $node->nid; ?>" class="fancybox">
		  	<img class="cover" src="<?php print $masthead_raw; ?>" alt="img" />
		</a>
	    <?php 
	    if($k == 4) {
			echo '</div>';
		$k = 0;
	    }
	} ?>
</div>