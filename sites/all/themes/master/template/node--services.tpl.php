<?php
/**
 * @file
 * Filename: node--searvice.tpl.php.
 * Website:  http://www.ordasoft.com
 * Author: ordasoft dev team ordasoft.com
 * Description: this node is output fields content type features.
 * Create this content type and add to it the following fields:
 *  Icons - machine name - field_icon_name_featurs;
 *  Title - machine name - title;
 *  Body - machine name -  field_body_featurs.
 */
?>
<div id="node-<?php print $node->nid; ?>">
    <div class="services">
        <span id="hexagon">
            <div class="red">
                <i class="fa <?php print master_get_field_value('field_icon_name', $node); ?>"></i>
            </div>
        </span>
        <h1><?php print $title; ?></h1>
        <p><?php print master_get_field_value('field_body_services', $node); ?></p>
        <a class="readMore" href="<?php print master_get_field_value('field_button_link', $node); ?>">
            <?php print master_get_field_value('field_button_name', $node); ?>
        </a>
    </div>
</div>
