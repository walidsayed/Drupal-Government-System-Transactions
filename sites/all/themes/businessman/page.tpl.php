<?php

/**
 * @file
 * Businessman's theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template normally located in the
 * modules/system directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/businessman.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 * - $hide_site_name: TRUE if the site name has been toggled off on the theme
 *   settings page. If hidden, the "element-invisible" class is added to make
 *   the site name visually hidden, but still accessible.
 * - $hide_site_slogan: TRUE if the site slogan has been toggled off on the
 *   theme settings page. If hidden, the "element-invisible" class is added to
 *   make the site slogan visually hidden, but still accessible.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['top_menu']: Items for the header top menu.
 * - $page['search']: Items for the search.
 * - $page['top1']: Items for the dynamic region.
 * - $page['top2']: Items for the dynamic region.
 * - $page['top3']: Items for the dynamic region.
 * - $page['top4']: Items for the dynamic region.
 * - $page['top_content1']: Items for the dynamic region.
 * - $page['top_content2']: Items for the dynamic region.
 * - $page['top_content3']: Items for the dynamic region.
 * - $page['top_content4']: Items for the dynamic region.
 * - $page['recent_comments']: Items for recent comments.
 * - $page['categories_blog']: Items for categories blog.
 * - $page['recent_blog']: Items for the recent blog.
 * - $page['contact_info']: Items for the contact info.
 * - $page['line1']: Items for the dynamic line1 region.
 * - $page['line2']: Items for the dynamic line2 region.
 * - $page['line3']: Items for the dynamic line3 region.
 * - $page['line4']: Items for the dynamic line4 region.
 * - $page['top_content']: Items for the top content region.
 * - $page['feature1']: Items for the dynamic feature region.
 * - $page['feature2']: Items for the dynamic feature region.
 * - $page['feature3']: Items for the dynamic feature region.
 * - $page['feature4']: Items for the dynamic feature region.
 * - $page['contenttop1']: Items for the dynamic contenttop region.
 * - $page['contenttop2']: Items for the dynamic contenttop region.
 * - $page['contenttop3']: Items for the dynamic contenttop region.
 * - $page['contenttop4']: Items for the dynamic contenttop region.
 * - $page['sidebar_left']: Items for the sidebar left region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_right']: Items for the sidebar right region.
 * - $page['contentbottom1']: Items for the dynamic contentbottom1 region.
 * - $page['contentbottom2']: Items for the dynamic contentbottom2 region.
 * - $page['contentbottom3']: Items for the dynamic contentbottom3 region.
 * - $page['contentbottom4']: Items for the dynamic contentbottom4 region.
 * - $page['bottom_line1']: Items for the dynamic bottom line1 region.
 * - $page['bottom_line2']: Items for the dynamic bottom line2 region.
 * - $page['bottom_line3']: Items for the dynamic bottom line3 region.
 * - $page['bottom_line4']: Items for the dynamic bottom line4 region.
 * - $page['bottom1']: Items for the dynamic bottom1 region.
 * - $page['bottom2']: Items for the dynamic bottom2 region.
 * - $page['bottom3']: Items for the dynamic bottom3 region.
 * - $page['bottom4']: Items for the dynamic bottom4 region.
 * - $page['last1']: Items for the dynamic last1 region.
 * - $page['last2']: Items for the dynamic last2 region.
 * - $page['last3']: Items for the dynamic last3 region.
 * - $page['last4']: Items for the dynamic last4 region.
 * - $page['footer_menu']: Items for the footer menu region.
 * - $page['footer1']: Items for the dynamic footer1 region.
 * - $page['footer2']: Items for the dynamic footer2 region.
 * - $page['footer3']: Items for the dynamic footer3 region.
 * - $page['footer4']: Items for the dynamic footer4 region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see businessman_page()
 * @see html.tpl.php
 */
?>
<div id="wrapper" class="default">
    <div id="top_line">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                 <?php if ($page['top_menu'] || $page['search']) { ?>

                    <?php if ($page['top_menu']) { ?>
                    <div class="<?php if($page['search']) { echo 'col-lg-8';}
                        else {echo('col-lg-12');} ?>">
                        <div class="topMenu">
                            <?php print render($page['top_menu']); ?>
                        </div>
                    </div>
                    <?php }; ?>

                    <?php if ($page['search']) { ?>
                        <div class="col-xs-12 col-md-4">
                            <div id="search">
                                <?php print render($page['search']); ?>
                            </div>
                        </div>
                    <?php }; ?>

                <?php }; ?>
                </div>
                <div class="col-lg-5 col-md-4">
                    <?php if ($page['info']) { ?>
                        <div id="info">
                            <?php print render($page['info']); ?>
                        </div>
                    <?php }; ?>
                </div>
                <div class="col-lg-3">
                    <div class="socBox">
                        <ul class="socIcons" >
                            <?php $soc = array(
                                "fa-twitter" => $twitter,
                                "fa-facebook" => $facebook,
                                "fa-flickr" => $flickr,
                                "fa-linkedin" => $linkedin,
                                "fa-play" => $youtube,
                                "fa-pinterest" => $pinterest,
                                "fa-google-plus" => $google,
                                "fa-dribbble" => $dribbble,
                                "fa-vimeo-square" => $vimeo,
                                "fa-instagram" => $instagram,
                                "fa-vk" => $vk,
                            );
                            foreach($soc as $key => $value) {
                            if (trim($value) != "") { ?>
                            <li><a href="<?php print $value; ?>" target="_blank">
                                <i class="fa <?php print $key; ?>"></i>
                            </a></li>
                        <?php }
                        } ?>
                        </ul>
                </div>
                </div>
            </div>
        </div>
    </div>
    <div id="staticPanel">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-3 col-lg-6">
                    <?php if ($logo) { ?>
                        <div class="logoPanel">
                            <a href="<?php print check_url($front_page); ?>" title="<?php print t('Home'); ?>">
                                <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
                            </a>
                        </div>
                    <?php }; ?>
                </div>
                <div class="col-xs-12 col-md-8 col-lg-6">
                    <?php if ($main_menu) { ?>
                        <div class="maimMenu">
                            <nav id="site-navigation" class="navbar navbar-default" role="navigation">
                                 <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-navbar-collapse">
                                       <i class="fa fa-bars"></i>
                                     </button>
                                    <div id="main-navbar-collapse" class="navbar-collapse collapse">
                                        <?php print theme('links__system_main_menu', array('links' => $main_menu));?>
                                    </div>
                                </div>
                            </nav><!-- #site-navigation -->
                        </div>
                    <?php }; ?>
                </div>
            </div>
        </div>  
    </div><!-- staticPanel -->


<div class="container">

    <?php if ($page['top1'] || $page['top2'] || $page['top3'] || $page['top4']) { ?>
        <div class="row">
            <?php if ($page['top1']) { ?>
                <div class="<?php if($page['top2'] & $page['top3'] & $page['top4']) { echo 'col-lg-3';} ?>
                <?php if($page['top2'] xor $page['top3'] xor $page['top4']) { echo 'col-lg-6'; } 
                 else if ($page['top2'] & $page['top3']){echo ('col-lg-4');}
                 else if ($page['top2'] & $page['top4']){echo ('col-lg-4');}
                 else if ($page['top3'] & $page['top4']){echo ('col-lg-4');}
                 else if ($page['top2'] xor $page['top3']){echo ('col-lg-4');}
                 else if ($page['top2'] xor $page['top4']){echo ('col-lg-4');}
                 else if ($page['top3'] xor $page['top4']){echo ('col-lg-4');}
                 else {echo('col-lg-12');} ?>">
                    <div id="top1"><?php print render($page['top1']); ?></div>
                </div>
            <?php }; ?>

            <?php if ($page['top2']) { ?>
                <div class="<?php if($page['top1'] & $page['top3'] & $page['top4']) { echo 'col-lg-3';} ?>
                <?php if($page['top1'] xor $page['top3'] xor $page['top4']) { echo 'col-lg-6'; }
                 else if ($page['top1'] & $page['top3']){echo ('col-lg-4');}
                 else if ($page['top1'] & $page['top4']){echo ('col-lg-4');}
                 else if ($page['top3'] & $page['top4']){echo ('col-lg-4');}
                 else if ($page['top1'] xor $page['top3']){echo ('col-lg-4');}
                 else if ($page['top1'] xor $page['top4']){echo ('col-lg-4');}
                 else if ($page['top3'] xor $page['top4']){echo ('col-lg-4');}
                 else {echo('col-lg-12');} ?>">
                    <div id="top2"><?php print render($page['top2']); ?></div>
                </div>
            <?php }; ?>

            <?php if ($page['top3']) { ?>
                <div class="<?php if($page['top1'] & $page['top2'] & $page['top4']) { echo 'col-lg-3';} ?>
                <?php if($page['top1'] xor $page['top2'] xor $page['top4']) { echo 'col-lg-6'; }
                 else if ($page['top1'] & $page['top2']){echo ('col-lg-4');}
                 else if ($page['top1'] & $page['top4']){echo ('col-lg-4');}
                 else if ($page['top2'] & $page['top4']){echo ('col-lg-4');}
                 else if ($page['top1'] xor $page['top2']){echo ('col-lg-4');}
                 else if ($page['top1'] xor $page['top4']){echo ('col-lg-4');}
                 else if ($page['top2'] xor $page['top4']){echo ('col-lg-4');}
                 else {echo('col-lg-12');} ?>">
                    <div id="top3"><?php print render($page['top3']); ?></div>
                </div>
            <?php }; ?>

            <?php if ($page['top4']) { ?>
                <div class="<?php if($page['top1'] & $page['top2'] & $page['top3']) { echo 'col-lg-3';} ?>
                <?php if($page['top1'] xor $page['top2'] xor $page['top3']) { echo 'col-lg-6'; }
                 else if ($page['top1'] & $page['top2']){echo ('col-lg-4');}
                 else if ($page['top1'] & $page['top3']){echo ('col-lg-4');}
                 else if ($page['top2'] & $page['top3']){echo ('col-lg-4');}
                 else if ($page['top1'] xor $page['top2']){echo ('col-lg-4');}
                 else if ($page['top1'] xor $page['top3']){echo ('col-lg-4');}
                 else if ($page['top2'] xor $page['top3']){echo ('col-lg-4');}
                 else {echo('col-lg-12');} ?>">
                    <div id="top4"><?php print render($page['top4']); ?></div>
                 </div>
             <?php }; ?>
        </div>     
    <?php }; ?>

</div>
    <?php if ($page['top_content1'] || $page['top_content2'] || $page['top_content3'] || $page['top_content4']) { ?>
    <div class="bg_team">
        <div class="container">
        <div class="row">
            <?php if ($page['top_content1']) { ?>
            <div class="<?php if($page['top_content2'] & $page['top_content3'] & $page['top_content4']) { echo 'col-lg-3';} ?>
                <?php if($page['top_content2'] xor $page['top_content3'] xor $page['top_content4']) { echo 'col-lg-6'; } 
                 else if ($page['top_content2'] & $page['top_content3']){echo ('col-lg-4');}
                 else if ($page['top_content2'] & $page['top_content4']){echo ('col-lg-4');}
                 else if ($page['top_content3'] & $page['top_content4']){echo ('col-lg-4');}
                 else if ($page['top_content2'] xor $page['top_content3']){echo ('col-lg-4');}
                 else if ($page['top_content2'] xor $page['top_content4']){echo ('col-lg-4');}
                 else if ($page['top_content3'] xor $page['top_content4']){echo ('col-lg-4');}
                 else {echo('col-lg-12');} ?>">
                <div id="top_content1">
                    <?php print render($page['top_content1']); ?>
                </div>
            </div>
            <?php }; ?>

            <?php if ($page['top_content2']) { ?>
                <div class="<?php if($page['top_content1'] & $page['top_content3'] & $page['top_content4']) { echo 'col-lg-3';} ?>
                <?php if($page['top_content1'] xor $page['top_content3'] xor $page['top_content4']) { echo 'col-lg-6'; }
                 else if ($page['top_content1'] & $page['top_content3']){echo ('col-lg-4');}
                 else if ($page['top_content1'] & $page['top_content4']){echo ('col-lg-4');}
                 else if ($page['top_content3'] & $page['top_content4']){echo ('col-lg-4');}
                 else if ($page['top_content1'] xor $page['top_content3']){echo ('col-lg-4');}
                 else if ($page['top_content1'] xor $page['top_content4']){echo ('col-lg-4');}
                 else if ($page['top_content3'] xor $page['top_content4']){echo ('col-lg-4');}
                 else {echo('col-lg-12');} ?>">
                    <div id="top_content2"><?php print render($page['top_content2']); ?></div>
                </div>
            <?php }; ?>

            <?php if ($page['top_content3']) { ?>
                <div class="<?php if($page['top_content1'] & $page['top_content2'] & $page['top_content4']) { echo 'col-lg-3';} ?>
                <?php if($page['top_content1'] xor $page['top_content2'] xor $page['top_content4']) { echo 'col-lg-6'; }
                 else if ($page['top_content1'] & $page['top_content2']){echo ('col-lg-4');}
                 else if ($page['top_content1'] & $page['top_content4']){echo ('col-lg-4');}
                 else if ($page['top_content2'] & $page['top_content4']){echo ('col-lg-4');}
                 else if ($page['top_content1'] xor $page['top_content2']){echo ('col-lg-4');}
                 else if ($page['top_content1'] xor $page['top_content4']){echo ('col-lg-4');}
                 else if ($page['top_content2'] xor $page['top_content4']){echo ('col-lg-4');}
                 else {echo('col-lg-12');} ?>">
                    <div id="top_content3"><?php print render($page['top_content3']); ?></div>
                </div>
            <?php }; ?>

            <?php if ($page['top_content4']) { ?>
                <div class="<?php if($page['top_content1'] & $page['top_content2'] & $page['top_content3']) { echo 'col-lg-3';} ?>
                <?php if($page['top_content1'] xor $page['top_content2'] xor $page['top_content3']) { echo 'col-lg-6'; }
                 else if ($page['top_content1'] & $page['top_content2']){echo ('col-lg-4');}
                 else if ($page['top_content1'] & $page['top_content3']){echo ('col-lg-4');}
                 else if ($page['top_content2'] & $page['top_content3']){echo ('col-lg-4');}
                 else if ($page['top_content1'] xor $page['top_content2']){echo ('col-lg-4');}
                 else if ($page['top_content1'] xor $page['top_content3']){echo ('col-lg-4');}
                 else if ($page['top_content2'] xor $page['top_content3']){echo ('col-lg-4');}
                 else {echo('col-lg-12');} ?>">
                    <div id="top_content4"><?php print render($page['top_content4']); ?></div>
                 </div>
             <?php }; ?>
        </div>
    </div> 
    </div>       
    <?php }; ?>

<div class="container">

    <?php if ($site_slogan) { ?>
        <div class="row">
            <div class="col-lg-12">
                <h1 class="siteSlogan"><?php print $site_slogan ?></h1>
            </div>
        </div>
    <?php }; ?>
 
    <?php if ($page['line1'] || $page['line2'] || $page['line3'] || $page['line4']) { ?>
        <div class="row">
            <?php if ($page['line1']) { ?>
                <div class="<?php if($page['line2'] & $page['line3'] & $page['line4']) { echo 'col-lg-3';} ?>
                <?php if($page['line2'] xor $page['line3'] xor $page['line4']) { echo 'col-lg-6'; } 
                 else if ($page['line2'] & $page['line3']){echo ('col-lg-4');}
                 else if ($page['line2'] & $page['line4']){echo ('col-lg-4');}
                 else if ($page['line3'] & $page['line4']){echo ('col-lg-4');}
                 else if ($page['line2'] xor $page['line3']){echo ('col-lg-4');}
                 else if ($page['line2'] xor $page['line4']){echo ('col-lg-4');}
                 else if ($page['line3'] xor $page['line4']){echo ('col-lg-4');}
                 else {echo('col-lg-12');} ?>">
                    <div id="line2"><?php print render($page['line1']); ?></div>
                </div>
            <?php }; ?>

            <?php if ($page['line2']) { ?>
                <div class="<?php if($page['line1'] & $page['line3'] & $page['line4']) { echo 'col-lg-3';} ?>
                <?php if($page['line1'] xor $page['line3'] xor $page['line4']) { echo 'col-lg-6'; }
                 else if ($page['line1'] & $page['line3']){echo ('col-lg-4');}
                 else if ($page['line1'] & $page['line4']){echo ('col-lg-4');}
                 else if ($page['line3'] & $page['line4']){echo ('col-lg-4');}
                 else if ($page['line1'] xor $page['line3']){echo ('col-lg-4');}
                 else if ($page['line1'] xor $page['line4']){echo ('col-lg-4');}
                 else if ($page['line3'] xor $page['line4']){echo ('col-lg-4');}
                 else {echo('col-lg-12');} ?>">
                    <div id="line2"><?php print render($page['line2']); ?></div>
                </div>
            <?php }; ?>

            <?php if ($page['line3']) { ?>
                <div class="<?php if($page['line1'] & $page['line2'] & $page['line4']) { echo 'col-lg-3';} ?>
                <?php if($page['line1'] xor $page['line2'] xor $page['line4']) { echo 'col-lg-6'; }
                 else if ($page['line1'] & $page['line2']){echo ('col-lg-4');}
                 else if ($page['line1'] & $page['line4']){echo ('col-lg-4');}
                 else if ($page['line2'] & $page['line4']){echo ('col-lg-4');}
                 else if ($page['line1'] xor $page['line2']){echo ('col-lg-4');}
                 else if ($page['line1'] xor $page['line4']){echo ('col-lg-4');}
                 else if ($page['line2'] xor $page['line4']){echo ('col-lg-4');}
                 else {echo('col-lg-12');} ?>">
                    <div id="line3"><?php print render($page['line3']); ?></div>
                </div>
            <?php }; ?>

            <?php if ($page['line4']) { ?>
                <div class="<?php if($page['line1'] & $page['line2'] & $page['line3']) { echo 'col-lg-3';} ?>
                <?php if($page['line1'] xor $page['line2'] xor $page['line3']) { echo 'col-lg-6'; }
                 else if ($page['line1'] & $page['line2']){echo ('col-lg-4');}
                 else if ($page['line1'] & $page['line3']){echo ('col-lg-4');}
                 else if ($page['line2'] & $page['line3']){echo ('col-lg-4');}
                 else if ($page['line1'] xor $page['line2']){echo ('col-lg-4');}
                 else if ($page['line1'] xor $page['line3']){echo ('col-lg-4');}
                 else if ($page['line2'] xor $page['line3']){echo ('col-lg-4');}
                 else {echo('col-lg-12');} ?>">
                    <div id="line4"><?php print render($page['line4']); ?></div>
                </div>
             <?php }; ?>

        </div>
    <?php }; ?>
         
    <?php if ($messages) { ?>
        <div class="row">
            <div class="col-lg-12">
                <div class="messageLog"><?php print $messages; ?></div>
            </div>
        </div>
    <?php }; ?>

</div>

    <?php if ($page['feature1'] || $page['feature2'] || $page['feature3'] || $page['feature4']) {  ?>
        <div class="slider_flex">
            <?php if ($page['feature1']) { ?>
                <div class="<?php if($page['feature2'] & $page['feature3'] & $page['feature4']) { echo 'col-lg-3';} ?>
                    <?php if($page['feature2'] xor $page['feature3'] xor $page['feature4']) { echo 'col-lg-6'; } 
                     else if ($page['feature2'] & $page['feature3']){echo ('col-lg-4');}
                     else if ($page['feature2'] & $page['feature4']){echo ('col-lg-4');}
                     else if ($page['feature3'] & $page['feature4']){echo ('col-lg-4');}
                     else if ($page['feature2'] xor $page['feature3']){echo ('col-lg-4');}
                     else if ($page['feature2'] xor $page['feature4']){echo ('col-lg-4');}
                     else if ($page['feature3'] xor $page['feature4']){echo ('col-lg-4');}
                     else {echo('col-lg-12');} ?>">
                        <div id="feature1"><?php print render($page['feature1']); ?></div>
                </div>
            <?php }; ?>

            <?php if ($page['feature2']) { ?>
                <div class="<?php if($page['feature1'] & $page['feature3'] & $page['feature4']) { echo 'col-lg-3';} ?>
                    <?php if($page['feature1'] xor $page['feature3'] xor $page['feature4']) { echo 'col-lg-6'; }
                     else if ($page['feature1'] & $page['feature3']){echo ('col-lg-4');}
                     else if ($page['feature1'] & $page['feature4']){echo ('col-lg-4');}
                     else if ($page['feature3'] & $page['feature4']){echo ('col-lg-4');}
                     else if ($page['feature1'] xor $page['feature3']){echo ('col-lg-4');}
                     else if ($page['feature1'] xor $page['feature4']){echo ('col-lg-4');}
                     else if ($page['feature3'] xor $page['feature4']){echo ('col-lg-4');}
                     else {echo('col-lg-12');} ?>">
                        <div id="feature2"><?php print render($page['feature2']); ?></div>
                </div>
            <?php }; ?>

            <?php if ($page['feature3']) { ?>
                <div class="<?php if($page['feature1'] & $page['feature2'] & $page['feature3']) { echo 'col-lg-3';} ?>
                    <?php if($page['feature1'] xor $page['feature2'] xor $page['feature4']) { echo 'col-lg-6'; }
                     else if ($page['feature1'] & $page['feature2']){echo ('col-lg-4');}
                     else if ($page['feature1'] & $page['feature4']){echo ('col-lg-4');}
                     else if ($page['feature2'] & $page['feature4']){echo ('col-lg-4');}
                     else if ($page['feature1'] xor $page['feature2']){echo ('col-lg-4');}
                     else if ($page['feature1'] xor $page['feature4']){echo ('col-lg-4');}
                     else if ($page['feature2'] xor $page['feature4']){echo ('col-lg-4');}
                     else {echo('col-lg-12');} ?>">
                    <div id="feature3"><?php print render($page['feature3']); ?></div>
                </div>
            <?php }; ?>

            <?php if ($page['feature4']) { ?>
                <div class="<?php if($page['feature1'] & $page['feature2'] & $page['feature3']) { echo 'col-lg-3';} ?>
                    <?php if($page['feature1'] xor $page['feature2'] xor $page['feature3']) { echo 'col-lg-6'; }
                     else if ($page['feature1'] & $page['feature2']){echo ('col-lg-4');}
                     else if ($page['feature1'] & $page['feature3']){echo ('col-lg-4');}
                     else if ($page['feature2'] & $page['feature3']){echo ('col-lg-4');}
                     else if ($page['feature1'] xor $page['feature2']){echo ('col-lg-4');}
                     else if ($page['feature1'] xor $page['feature3']){echo ('col-lg-4');}
                     else if ($page['feature2'] xor $page['feature3']){echo ('col-lg-4');}
                     else {echo('col-lg-12');} ?>">
                    <div id="feature4"><?php print render($page['feature4']); ?></div>
                </div>
            <?php }; ?>
        </div>
    <?php }; ?>



    <?php if ($page['contenttop1'] || $page['contenttop2'] || $page['contenttop3'] || $page['contenttop4']) { ?>
    <div class="contenttop">
        <div class="container">
        <div class="row">
            <?php if ($page['contenttop1']) { ?>
                <div class="<?php if($page['contenttop2'] & $page['contenttop3'] & $page['contenttop4']) { echo 'col-lg-3';} ?>
                    <?php if($page['contenttop2'] xor $page['contenttop3'] xor $page['contenttop4']) { echo 'col-lg-6'; } 
                     else if ($page['contenttop2'] & $page['contenttop3']){echo ('col-lg-4');}
                     else if ($page['contenttop2'] & $page['contenttop4']){echo ('col-lg-4');}
                     else if ($page['contenttop3'] & $page['contenttop4']){echo ('col-lg-4');}
                     else if ($page['contenttop2'] xor $page['contenttop3']){echo ('col-lg-4');}
                     else if ($page['contenttop2'] xor $page['contenttop4']){echo ('col-lg-4');}
                     else if ($page['contenttop3'] xor $page['contenttop4']){echo ('col-lg-4');}
                     else {echo('col-lg-12');} ?>">
                    <div id="contenttop1">
                        <?php print render($page['contenttop1']); ?>
                    </div>
                </div>
            <?php }; ?>

            <?php if ($page['contenttop2']) { ?>
                <div class="<?php if($page['contenttop1'] & $page['contenttop3'] & $page['contenttop4']) { echo 'col-lg-3';} ?>
                    <?php if($page['contenttop1'] xor $page['contenttop3'] xor $page['contenttop4']) { echo 'col-lg-6'; }
                     else if ($page['contenttop1'] & $page['contenttop3']){echo ('col-lg-4');}
                     else if ($page['contenttop1'] & $page['contenttop4']){echo ('col-lg-4');}
                     else if ($page['contenttop3'] & $page['contenttop4']){echo ('col-lg-4');}
                     else if ($page['contenttop1'] xor $page['contenttop3']){echo ('col-lg-4');}
                     else if ($page['contenttop1'] xor $page['contenttop4']){echo ('col-lg-4');}
                     else if ($page['contenttop3'] xor $page['contenttop4']){echo ('col-lg-4');}
                     else {echo('col-lg-12');} ?>">
                    <div id="contenttop2">
                        <?php print render($page['contenttop2']); ?>
                    </div>
                </div>
            <?php }; ?>

            <?php if ($page['contenttop3']) { ?>
                <div class="<?php if($page['contettop1'] & $page['contettop2'] & $page['contettop3']) { echo 'col-lg-3';} ?>
                    <?php if($page['contettop1'] xor $page['contettop2'] xor $page['contettop4']) { echo 'col-lg-6'; }
                     else if ($page['contettop1'] & $page['contettop2']){echo ('col-lg-4');}
                     else if ($page['contettop1'] & $page['contettop4']){echo ('col-lg-4');}
                     else if ($page['contettop2'] & $page['contettop4']){echo ('col-lg-4');}
                     else if ($page['contettop1'] xor $page['contettop2']){echo ('col-lg-4');}
                     else if ($page['contettop1'] xor $page['contettop4']){echo ('col-lg-4');}
                     else if ($page['contettop2'] xor $page['contettop4']){echo ('col-lg-4');}
                     else {echo('col-lg-12');} ?>">
                    <div id="contenttop3">
                        <?php print render($page['contenttop3']); ?>
                    </div>
                </div>
            <?php }; ?>

            <?php if ($page['contenttop4']) { ?>
                <div class="<?php if($page['contenttop1'] & $page['contenttop2'] & $page['contenttop3']) { echo 'col-lg-3';} ?>
                    <?php if($page['contenttop1'] xor $page['contenttop2'] xor $page['contenttop3']) { echo 'col-lg-6'; }
                     else if ($page['contenttop1'] & $page['contenttop2']){echo ('col-lg-4');}
                     else if ($page['contenttop1'] & $page['contenttop3']){echo ('col-lg-4');}
                     else if ($page['contenttop2'] & $page['contenttop3']){echo ('col-lg-4');}
                     else if ($page['contenttop1'] xor $page['contenttop2']){echo ('col-lg-4');}
                     else if ($page['contenttop1'] xor $page['contenttop3']){echo ('col-lg-4');}
                     else if ($page['contenttop2'] xor $page['contenttop3']){echo ('col-lg-4');}
                     else {echo('col-lg-12');} ?>">
                    <div id="contenttop4">
                        <?php print render($page['contenttop4']); ?>
                    </div>
                </div>
            <?php }; ?>
        </div>
        </div>
        </div>
    <?php }; ?>
<div class="container">   
    <?php if ($page['sidebar_left'] || $page['content'] || $page['sidebar_right']) { ?>
    <div class="row">
        <?php if ($page['sidebar_left']) { ?>
        <div class="col-xs-12 col-lg-3">
            <div id="sidebar_left">
                <?php print render($page['sidebar_left']); ?>
            </div>
        </div>
        <?php }; ?>

        <?php if ($page['content']) { ?>
        <div class="<?php if($page['sidebar_left'] & $page['sidebar_right']) { echo 'col-lg-6'; }else if($page['sidebar_right'] xor
            $page['sidebar_left']){ echo 'col-lg-9';} else {echo('col-lg-12');} ?>">
            <div class="<?php print (drupal_is_front_page()) ? 'frontBox' : 'container contBox'; ?>">
                <div class="<?php print ($page['categories_blog'] || $page['recent_blog'] || $page['recent_comments']) ? 'globalContant span9' : 'gCont'; ?>">
                    <?php print render($page['content']); ?>
                    <?php if ($page['contact_info']) { ?>
                        <div id="contactInfo">
                            <?php print render($page['contact_info']); ?>
                        </div>
                    <?php }; ?>
                </div>
                <?php if ($page['categories_blog'] || $page['recent_blog'] || $page['recent_comments']) { ?>
                    <div class="leftSidebar span3">
                        <?php print render($page['categories_blog']); ?>
                        <?php print render($page['recent_blog']); ?>
                        <?php print render($page['recent_comments']); ?>
                    </div>
                <?php }; ?>
            </div>
        </div>
        <?php }; ?>
    </div>
    <?php }; ?>

    <?php if ($page['sidebar_right']) { ?>
        <div class="col-xs-12 col-lg-3">
            <div id="sidebar_right">
                <?php print render($page['sidebar_right']); ?>
            </div>
        </div>
    <?php }; ?>
  
    <?php if ($page['contentbottom1'] || $page['contentbottom2'] || $page['contentbottom3'] || $page['contentbottom4']) { ?>
        <div class="row">
            <?php if ($page['contentbottom1']) { ?>
            <div class="<?php if($page['contentbottom2'] & $page['contentbottom3'] & $page['contentbottom4']) { echo 'col-lg-3';} ?>
                <?php if($page['contentbottom2'] xor $page['contentbottom3'] xor $page['contentbottom4']) { echo 'col-lg-6'; } 
                 else if ($page['contentbottom2'] & $page['contentbottom3']){echo ('col-lg-4');}
                 else if ($page['contentbottom2'] & $page['contentbottom4']){echo ('col-lg-4');}
                 else if ($page['contentbottom3'] & $page['contentbottom4']){echo ('col-lg-4');}
                 else if ($page['contentbottom2'] xor $page['contentbottom3']){echo ('col-lg-4');}
                 else if ($page['contentbottom2'] xor $page['contentbottom4']){echo ('col-lg-4');}
                 else if ($page['contentbottom3'] xor $page['contentbottom4']){echo ('col-lg-4');}
                 else {echo('col-lg-12');} ?>">
                <div id="contentbottom1">
                    <?php print render($page['contentbottom1']); ?>
                </div>
            </div>
            <?php }; ?>

            <?php if ($page['contentbottom2']) { ?>
            <div class="<?php if($page['contentbottom1'] & $page['contentbottom3'] & $page['contentbottom4']) { echo 'col-lg-3';} ?>
                <?php if($page['contentbottom1'] xor $page['contentbottom3'] xor $page['contentbottom4']) { echo 'col-lg-6'; }
                 else if ($page['contentbottom1'] & $page['contentbottom3']){echo ('col-lg-4');}
                 else if ($page['contentbottom1'] & $page['contentbottom4']){echo ('col-lg-4');}
                 else if ($page['contentbottom3'] & $page['contentbottom4']){echo ('col-lg-4');}
                 else if ($page['contentbottom1'] xor $page['contentbottom3']){echo ('col-lg-4');}
                 else if ($page['contentbottom1'] xor $page['contentbottom4']){echo ('col-lg-4');}
                 else if ($page['contentbottom3'] xor $page['contentbottom4']){echo ('col-lg-4');}
                 else {echo('col-lg-12');} ?>">
                <div id="contentbottom2">
                    <?php print render($page['contentbottom2']); ?>
                </div>
            </div>
            <?php }; ?>

            <?php if ($page['contentbottom3']) { ?>
            <div class="<?php if($page['contetbottom'] & $page['contetbottom2'] & $page['contetbottom3']) { echo 'col-lg-3';} ?>
                    <?php if($page['contetbottom1'] xor $page['contetbottom2'] xor $page['contetbottom4']) { echo 'col-lg-6'; }
                     else if ($page['contetbottom1'] & $page['contetbottom2']){echo ('col-lg-4');}
                     else if ($page['contetbottom1'] & $page['contetbottom4']){echo ('col-lg-4');}
                     else if ($page['contetbottom2'] & $page['contetbottom4']){echo ('col-lg-4');}
                     else if ($page['contetbottom1'] xor $page['contetbottom2']){echo ('col-lg-4');}
                     else if ($page['contetbottom1'] xor $page['contetbottom4']){echo ('col-lg-4');}
                     else if ($page['contetbottom2'] xor $page['contetbottom4']){echo ('col-lg-4');}
                     else {echo('col-lg-12');} ?>">
                <div id="contentbottom3">
                    <?php print render($page['contentbottom3']); ?>
                </div>
            </div>
            <?php }; ?>

            <?php if ($page['contentbottom4']) { ?>
            <div class="<?php if($page['contentbottom1'] & $page['contentbottom2'] & $page['contentbottom3']) { echo 'col-lg-3';} ?>
                <?php if($page['contentbottom1'] xor $page['contentbottom2'] xor $page['contentbottom3']) { echo 'col-lg-6'; }
                 else if ($page['contentbottom1'] & $page['contentbottom2']){echo ('col-lg-4');}
                 else if ($page['contentbottom1'] & $page['contentbottom3']){echo ('col-lg-4');}
                 else if ($page['contentbottom2'] & $page['contentbottom3']){echo ('col-lg-4');}
                 else if ($page['contentbottom1'] xor $page['contentbottom2']){echo ('col-lg-4');}
                 else if ($page['contentbottom1'] xor $page['contentbottom3']){echo ('col-lg-4');}
                 else if ($page['contentbottom2'] xor $page['contentbottom3']){echo ('col-lg-4');}
                 else {echo('col-lg-12');} ?>">
                <div id="contentbottom4">
                    <?php print render($page['contentbottom4']); ?>
                </div>
            </div>
            <?php }; ?>
        </div>
    <?php }; ?>
</div>
    <?php if ($page['bottom_line1'] || $page['bottom_line2'] || $page['bottom_line3'] || $page['bottom_line4']) { ?>
        <div class="map_block">
            <?php if ($page['bottom_line1']) { ?>
                <div class="<?php if($page['bottom_line2'] & $page['bottom_line3'] & $page['bottom_line4']) { echo 'col-lg-3';} ?>
                <?php if($page['bottom_line2'] xor $page['bottom_line3'] xor $page['bottom_line4']) { echo 'col-lg-6'; } 
                 else if ($page['bottom_line2'] & $page['bottom_line3']){echo ('col-lg-4');}
                 else if ($page['bottom_line2'] & $page['bottom_line4']){echo ('col-lg-4');}
                 else if ($page['bottom_line3'] & $page['bottom_line4']){echo ('col-lg-4');}
                 else if ($page['bottom_line2'] xor $page['bottom_line3']){echo ('col-lg-4');}
                 else if ($page['bottom_line2'] xor $page['bottom_line4']){echo ('col-lg-4');}
                 else if ($page['bottom_line3'] xor $page['bottom_line4']){echo ('col-lg-4');}
                 else {echo('col-lg-12');} ?>">
                    <?php print render($page['bottom_line1']); ?>
                </div>
            <?php }; ?>

            <?php if ($page['bottom_line2']) { ?>
                <div class="<?php if($page['bottom_line1'] & $page['bottom_line3'] & $page['bottom_line4']) { echo 'col-lg-3';} ?>
                <?php if($page['bottom_line1'] xor $page['bottom_line3'] xor $page['bottom_line4']) { echo 'col-lg-6'; }
                 else if ($page['bottom_line1'] & $page['bottom_line3']){echo ('col-lg-4');}
                 else if ($page['bottom_line1'] & $page['bottom_line4']){echo ('col-lg-4');}
                 else if ($page['bottom_line3'] & $page['bottom_line4']){echo ('col-lg-4');}
                 else if ($page['bottom_line1'] xor $page['bottom_line3']){echo ('col-lg-4');}
                 else if ($page['bottom_line1'] xor $page['bottom_line4']){echo ('col-lg-4');}
                 else if ($page['bottom_line3'] xor $page['bottom_line4']){echo ('col-lg-4');}
                 else {echo('col-lg-12');} ?>">
                    <?php print render($page['bottom_line2']); ?>
                </div>
            <?php }; ?>

            <?php if ($page['bottom_line3']) { ?>
                <div class="<?php if($page['bottom_line'] & $page['bottom_line2'] & $page['bottom_line3']) { echo 'col-lg-3';} ?>
                    <?php if($page['bottom_line1'] xor $page['bottom_line2'] xor $page['bottom_line4']) { echo 'col-lg-6'; }
                     else if ($page['bottom_line1'] & $page['bottom_line2']){echo ('col-lg-4');}
                     else if ($page['bottom_line1'] & $page['bottom_line4']){echo ('col-lg-4');}
                     else if ($page['bottom_line2'] & $page['bottom_line4']){echo ('col-lg-4');}
                     else if ($page['bottom_line1'] xor $page['bottom_line2']){echo ('col-lg-4');}
                     else if ($page['bottom_line1'] xor $page['bottom_line4']){echo ('col-lg-4');}
                     else if ($page['bottom_line2'] xor $page['bottom_line4']){echo ('col-lg-4');}
                     else {echo('col-lg-12');} ?>">
                    <?php print render($page['bottom_line3']); ?>
                </div>
            <?php }; ?>

            <?php if ($page['bottom_line4']) { ?>
                <div class="<?php if($page['bottom_line1'] & $page['bottom_line2'] & $page['bottom_line3']) { echo 'col-lg-3';} ?>
                    <?php if($page['bottom_line1'] xor $page['bottom_line2'] xor $page['bottom_line3']) { echo 'col-lg-6'; }
                     else if ($page['bottom_line1'] & $page['bottom_line2']){echo ('col-lg-4');}
                     else if ($page['bottom_line1'] & $page['bottom_line3']){echo ('col-lg-4');}
                     else if ($page['bottom_line2'] & $page['bottom_line3']){echo ('col-lg-4');}
                     else if ($page['bottom_line1'] xor $page['bottom_line2']){echo ('col-lg-4');}
                     else if ($page['bottom_line1'] xor $page['bottom_line3']){echo ('col-lg-4');}
                     else if ($page['bottom_line2'] xor $page['bottom_line3']){echo ('col-lg-4');}
                     else {echo('col-lg-12');} ?>">
                    <?php print render($page['bottom_line4']); ?>
                </div>
            <?php }; ?>
        </div>
    <?php }; ?>
  

    <?php if ($page['bottom1'] || $page['bottom2'] || $page['bottom3'] || $page['bottom4']) { ?>
    <div class="container"> 
        <div class="row">
            <?php if ($page['bottom1']) { ?>
                <div class="<?php if($page['bottom2'] & $page['bottom3'] & $page['bottom4']) { echo 'col-lg-3';} ?>
                <?php if($page['bottom2'] xor $page['bottom3'] xor $page['bottom4']) { echo 'col-lg-6'; } 
                 else if ($page['bottom2'] & $page['bottom3']){echo ('col-lg-4');} 
                 else if ($page['bottom2'] & $page['bottom4']){echo ('col-lg-4');}
                 else if ($page['bottom3'] & $page['bottom4']){echo ('col-lg-4');}
                 else if ($page['bottom2'] xor $page['bottom3']){echo ('col-lg-4');}
                 else if ($page['bottom2'] xor $page['bottom4']){echo ('col-lg-4');}
                 else if ($page['bottom3'] xor $page['bottom4']){echo ('col-lg-4');}
                 else {echo('col-lg-12');} ?>">
                    <div id="bottom1"><?php print render($page['bottom1']); ?></div>
                </div>
            <?php }; ?>

            <?php if ($page['bottom2']) { ?>
                <div class="<?php if($page['bottom1'] & $page['bottom3'] & $page['bottom4']) { echo 'col-lg-3';} ?>
                <?php if($page['bottom1'] xor $page['bottom3'] xor $page['bottom4']) { echo 'col-lg-6'; } 
                 else if ($page['bottom1'] & $page['bottom3']){echo ('col-lg-4');} 
                 else if ($page['bottom1'] & $page['bottom4']){echo ('col-lg-4');}
                 else if ($page['bottom3'] & $page['bottom4']){echo ('col-lg-4');}
                 else if ($page['bottom1'] xor $page['bottom3']){echo ('col-lg-4');}
                 else if ($page['bottom1'] xor $page['bottom4']){echo ('col-lg-4');}
                 else if ($page['bottom3'] xor $page['bottom4']){echo ('col-lg-4');}
                 else {echo('col-lg-12');} ?>">
                    <div id="bottom2"><?php print render($page['bottom2']); ?></div>
                </div>
            <?php }; ?>

            <?php if ($page['bottom3']) { ?>
                <div class="<?php if($page['bottom1'] & $page['bottom2'] & $page['bottom4']) { echo 'col-lg-3';} ?>
                <?php if($page['bottom1'] xor $page['bottom2'] xor $page['bottom4']) { echo 'col-lg-6'; } 
                 else if ($page['bottom1'] & $page['bottom2']){echo ('col-lg-4');} 
                 else if ($page['bottom1'] & $page['bottom4']){echo ('col-lg-4');}
                 else if ($page['bottom2'] & $page['bottom4']){echo ('col-lg-4');}
                 else if ($page['bottom1'] xor $page['bottom2']){echo ('col-lg-4');}
                 else if ($page['bottom1'] xor $page['bottom4']){echo ('col-lg-4');}
                 else if ($page['bottom2'] xor $page['bottom4']){echo ('col-lg-4');}
                 else {echo('col-lg-12');} ?>">
                    <div id="bottom3"><?php print render($page['bottom3']); ?></div>
                </div>
            <?php }; ?>

            <?php if ($page['bottom4']) { ?>
                <div class="<?php if($page['bottom1'] & $page['bottom2'] & $page['bottom3']) { echo 'col-lg-3';} ?>
                <?php if($page['bottom1'] xor $page['bottom2'] xor $page['bottom3']) { echo 'col-lg-6'; } 
                 else if ($page['bottom1'] & $page['bottom2']){echo ('col-lg-4');} 
                 else if ($page['bottom1'] & $page['bottom3']){echo ('col-lg-4');}
                 else if ($page['bottom2'] & $page['bottom3']){echo ('col-lg-4');}
                 else if ($page['bottom1'] xor $page['bottom2']){echo ('col-lg-4');}
                 else if ($page['bottom1'] xor $page['bottom3']){echo ('col-lg-4');}
                 else if ($page['bottom2'] xor $page['bottom3']){echo ('col-lg-4');}
                 else {echo('col-lg-12');} ?>">
                    <div id="bottom4"><?php print render($page['bottom4']); ?></div>
                </div>
            <?php }; ?>
        </div>
    </div> 
    <?php }; ?>

    <?php if ($page['last1'] || $page['last2'] || $page['last3'] || $page['last4']) { ?>
    <div class="container">
        <div class="row">
            <?php if ($page['last1']) { ?>
                <div class="<?php if($page['last2'] & $page['last3'] & $page['last4']) { echo 'col-lg-3';} ?>
                <?php if($page['last2'] xor $page['last3'] xor $page['last4']) { echo 'col-lg-6'; } 
                 else if ($page['last2'] & $page['last3']){echo ('col-lg-4');} 
                 else if ($page['last2'] & $page['last4']){echo ('col-lg-4');}
                 else if ($page['last3'] & $page['last4']){echo ('col-lg-4');}
                 else if ($page['last2'] xor $page['last3']){echo ('col-lg-4');}
                 else if ($page['last2'] xor $page['last4']){echo ('col-lg-4');}
                 else if ($page['last3'] xor $page['last4']){echo ('col-lg-4');}
                 else {echo('col-lg-12');} ?>">
                    <div id="last1"><?php print render($page['last1']); ?></div>
                </div>
            <?php }; ?>

            <?php if ($page['last2']) { ?>
                <div class="<?php if($page['last1'] & $page['last3'] & $page['last4']) { echo 'col-lg-3';} ?>
                <?php if($page['last1'] xor $page['last3'] xor $page['last4']) { echo 'col-lg-6'; } 
                 else if ($page['last1'] & $page['last3']){echo ('col-lg-4');} 
                 else if ($page['last1'] & $page['last4']){echo ('col-lg-4');}
                 else if ($page['last3'] & $page['last4']){echo ('col-lg-4');}
                 else if ($page['last1'] xor $page['last3']){echo ('col-lg-4');}
                 else if ($page['last1'] xor $page['last4']){echo ('col-lg-4');}
                 else if ($page['last3'] xor $page['last4']){echo ('col-lg-4');}
                 else {echo('col-lg-12');} ?>">
                    <div id="last2"><?php print render($page['last2']); ?></div>
                </div>
            <?php }; ?>

            <?php if ($page['last3']) { ?>
                <div class="<?php if($page['last1'] & $page['last2'] & $page['last4']) { echo 'col-lg-3';} ?>
                <?php if($page['last1'] xor $page['last2'] xor $page['last4']) { echo 'col-lg-6'; } 
                 else if ($page['last1'] & $page['last2']){echo ('col-lg-4');} 
                 else if ($page['last1'] & $page['last4']){echo ('col-lg-4');}
                 else if ($page['last2'] & $page['last4']){echo ('col-lg-4');}
                 else if ($page['last1'] xor $page['last2']){echo ('col-lg-4');}
                 else if ($page['last1'] xor $page['last4']){echo ('col-lg-4');}
                 else if ($page['last2'] xor $page['last4']){echo ('col-lg-4');}
                 else {echo('col-lg-12');} ?>">
                    <div id="last3"><?php print render($page['last3']); ?></div>
                </div>
            <?php }; ?>

            <?php if ($page['last4']) { ?>
                <div class="<?php if($page['last1'] & $page['last2'] & $page['last3']) { echo 'col-lg-3';} ?>
                <?php if($page['last1'] xor $page['last2'] xor $page['last3']) { echo 'col-lg-6'; } 
                 else if ($page['last1'] & $page['last2']){echo ('col-lg-4');} 
                 else if ($page['last1'] & $page['last3']){echo ('col-lg-4');}
                 else if ($page['last2'] & $page['last3']){echo ('col-lg-4');}
                 else if ($page['last1'] xor $page['last2']){echo ('col-lg-4');}
                 else if ($page['last1'] xor $page['last3']){echo ('col-lg-4');}
                 else if ($page['last2'] xor $page['last3']){echo ('col-lg-4');}
                 else {echo('col-lg-12');} ?>">
                    <div id="last4"><?php print render($page['last4']); ?></div>
                </div>
            <?php }; ?>
        </div>
    </div>    
    <?php }; ?>


<div id="footer">
    <div class="container">

     

        <?php if ($page['footer1'] || $page['footer2'] || $page['footer3'] || $page['footer4']) { ?>
        <div class="row">
            <?php if ($page['footer1']) { ?>
                <div class="<?php if($page['footer2'] & $page['footer3'] & $page['footer4']) { echo 'col-lg-3 col-xs-4';} ?>
                <?php if($page['footer2'] xor $page['footer3'] xor $page['footer4']) { echo 'col-lg-6 col-xs-4'; } 
                 else if ($page['footer2'] & $page['footer3']){echo ('col-lg-4 col-xs-4');} 
                 else if ($page['footer2'] & $page['footer4']){echo ('col-lg-4 col-xs-4');}
                 else if ($page['footer3'] & $page['footer4']){echo ('col-lg-4 col-xs-4');}
                 else if ($page['footer2'] xor $page['footer3']){echo ('col-lg-4 col-xs-4');}
                 else if ($page['footer2'] xor $page['footer4']){echo ('col-lg-4 col-xs-4');}
                 else if ($page['footer3'] xor $page['footer4']){echo ('col-lg-4 col-xs-4');}
                 else {echo('col-lg-12');} ?>">
                    <div id="footer1"><?php print render($page['footer1']); ?></div>
                </div>
            <?php }; ?>

            <?php if ($page['footer2']) { ?>
                <div class="<?php if($page['footer1'] & $page['footer3'] & $page['footer4']) { echo 'col-lg-3 col-xs-4';} ?>
                <?php if($page['footer1'] xor $page['footer3'] xor $page['footer4']) { echo 'col-lg-6 col-xs-4'; } 
                 else if ($page['footer1'] & $page['footer3']){echo ('col-lg-4 col-xs-4');} 
                 else if ($page['footer1'] & $page['footer4']){echo ('col-lg-4 col-xs-4');}
                 else if ($page['footer3'] & $page['footer4']){echo ('col-lg-4 col-xs-4');}
                 else if ($page['footer1'] xor $page['footer3']){echo ('col-lg-4 col-xs-4');}
                 else if ($page['footer1'] xor $page['footer4']){echo ('col-lg-4 col-xs-4');}
                 else if ($page['footer3'] xor $page['footer4']){echo ('col-lg-4 col-xs-4');}
                 else {echo('col-lg-12');} ?>">
                    <div id="footer2"><?php print render($page['footer2']); ?></div>
                </div>
            <?php }; ?>

            <?php if ($page['footer3']) { ?>
                <div class="<?php if($page['footer1'] & $page['footer2'] & $page['footer4']) { echo 'col-lg-3 col-xs-4';} ?>
                <?php if($page['footer1'] xor $page['footer2'] xor $page['footer4']) { echo 'col-lg-6 col-xs-4'; } 
                 else if ($page['footer1'] & $page['footer2']){echo ('col-lg-4 col-xs-4');} 
                 else if ($page['footer1'] & $page['footer4']){echo ('col-lg-4 col-xs-4');}
                 else if ($page['footer2'] & $page['footer4']){echo ('col-lg-4 col-xs-4');}
                 else if ($page['footer1'] xor $page['footer2']){echo ('col-lg-4 col-xs-4');}
                 else if ($page['footer1'] xor $page['footer4']){echo ('col-lg-4 col-xs-4');}
                 else if ($page['footer2'] xor $page['footer4']){echo ('col-lg-4 col-xs-4');}
                 else {echo('col-lg-12');} ?>">
                    <div id="footer3"><?php print render($page['footer3']); ?></div>
                </div>
            <?php }; ?>

            <?php if ($page['footer4']) { ?>
                <div class="<?php if($page['footer1'] & $page['footer2'] & $page['footer3']) { echo 'col-lg-3 col-xs-12';} ?>
                <?php if($page['footer1'] xor $page['footer2'] xor $page['footer3']) { echo 'col-lg-6 col-xs-12'; } 
                 else if ($page['footer1'] & $page['footer2']){echo ('col-lg-4 col-xs-12');} 
                 else if ($page['footer1'] & $page['footer3']){echo ('col-lg-4 col-xs-12');}
                 else if ($page['footer2'] & $page['footer3']){echo ('col-lg-4 col-xs-12');}
                 else if ($page['footer1'] xor $page['footer2']){echo ('col-lg-4 col-xs-12');}
                 else if ($page['footer1'] xor $page['footer3']){echo ('col-lg-4 col-xs-12');}
                 else if ($page['footer2'] xor $page['footer3']){echo ('col-lg-4 col-xs-12');}
                 else {echo('col-lg-12');} ?>">
                    <div id="footer4"><?php print render($page['footer4']); ?></div>
                </div>
            <?php }; ?>
        </div>
        <?php }; ?>

        <?php if ($site_name) { ?>
            <p class="siteName"><?php print $site_name ?></p>
        <?php }; ?>

        <?php if ($show_hide_copyright) { ?>
            <div class="row">
                <div class="col-xs-12 col-lg-12">
                    <div class="copyright">
                        <a href="<?php print ($copyright_url); ?> " target="_blank">
                            <?php print t('Copyright'). ' &copy; ' .date("Y"). ' ' .$copyright_developedby; ?>
                        </a>
                    </div>
                </div>
            </div>
        <?php }; ?>

       

        <?php if ($show_hide_icon) { ?>
        <div class="row">
            <div class="col-xs-12 col-lg-12">
                <div class="socBox">
                    <ul class="socIcons" >
                        <?php $soc = array(
                            "fa-twitter" => $twitter,
                            "fa-facebook" => $facebook,
                            "fa-flickr" => $flickr,
                            "fa-linkedin" => $linkedin,
                            "fa-play" => $youtube,
                            "fa-pinterest" => $pinterest,
                            "fa-google-plus" => $google,
                            "fa-dribbble" => $dribbble,
                            "fa-vimeo-square" => $vimeo,
                            "fa-instagram" => $instagram,
                            "fa-vk" => $vk,
                        );
                        foreach($soc as $key => $value) {
                        if (trim($value) != "") { ?>
                        <li><a href="<?php print $value; ?>" target="_blank">
                            <i class="fa <?php print $key; ?>"></i>
                        </a></li>
                    <?php }
                    } ?>
                    </ul>
                </div>
            </div>
        </div>
        <?php }; ?>

    </div>
</div> <!--footer-->
