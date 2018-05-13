<?php
/**
 * @file
 * Filename:     node--feature.tpl.php.js.
 * Website:      http://www.ordasoft.com
 * Description:  file node feature
 * Author:       ordasoft dev team ordasoft.com.
 */
?>
<div class="featuresTitle">
    <div class="left">
        <i class="fa <?php print businessman_get_field_value('field_icon_name_features', $node); ?>"></i>
    </div>
    <div class="right">
        <h3><?php print $title; ?></h3>
        <p><?php print businessman_get_field_value('field_body_features', $node); ?></p>
    </div>
</div>
