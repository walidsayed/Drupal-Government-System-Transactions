<?php
/**
 * @file
 * Filename:     node--team.tpl.php.js.
 * Website:      http://www.ordasoft.com
 * Description:  file node team
 * Author:       ordasoft dev team ordasoft.com.
 */
?>
<div class="col-lg-3 col-sm-6 col-xs-12">
    <div class="all">
        <div class="image_team">
            <img src="<?php print image_style_url('team', $node->field_image_inc['und'][0]['uri']); ?>" alt="img" />
        </div>
        <h3><?php print $title; ?></h3>
        <p><?php print businessman_get_field_value('field_text', $node); ?></p>
    </div>
</div>
