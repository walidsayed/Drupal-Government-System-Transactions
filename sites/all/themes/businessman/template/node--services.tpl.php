<?php
/**
 * @file
 * Filename:     node--services.tpl.php.js.
 * Website:      http://www.ordasoft.com
 * Description:  file node services
 * Author:       ordasoft dev team ordasoft.com.
 */
?>
<div class="col-lg-3 col-sm-6 col-xs-12">
    <div class="service">
        <span id="hexagon">
            <i class="fa <?php print businessman_get_field_value('field_icon_name', $node); ?>"></i>
        </span>
        <h3><?php print $title; ?></h3>
        <div class="service_text">
           <p><?php print businessman_get_field_value('field_body_services', $node); ?></p>
        </div>
        <a class="readMore" href="<?php print businessman_get_field_value('field_button_link_s', $node); ?>">
            <?php print businessman_get_field_value('field_button_name_s', $node); ?>
        </a>
    </div>
</div>
