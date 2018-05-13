<?php
/**
 * @file
 * Filename:     node--top_info.tpl.php.js.
 * Website:      http://www.ordasoft.com
 * Description:  file node top info
 * Author:       ordasoft dev team ordasoft.com.
 */
?>
<div class="row">
    <div class="col-lg-6">
        <h1><?php print $title; ?></h1>
        <p><?php print $node->body['und'][0]['value']; ?></p>
        <a class="readMore" href="<?php print businessman_get_field_value('field_button_link', $node); ?>">
            <?php print businessman_get_field_value('field_button_name', $node); ?>
        </a>
    </div>
    <div class="col-lg-6">
        <div class="image_top">
            <img src="<?php print image_style_url('top_info', $node->field_image_top['und'][0]['uri']); ?>" alt="img" />
        </div>
    </div>
</div>
