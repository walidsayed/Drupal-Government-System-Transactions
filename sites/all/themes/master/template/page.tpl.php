<?php

/**
 * @file
 * master's theme implementation to display a single Drupal page.
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
 *   or themes/master.
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
 * - $page['header']: Items for the header region.
 * - $page['featured']: Items for the featured region.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['triptych_first']: Items for the first triptych.
 * - $page['triptych_middle']: Items for the middle triptych.
 * - $page['triptych_last']: Items for the last triptych.
 * - $page['footer_firstcolumn']: Items for the first footer column.
 * - $page['footer_secondcolumn']: Items for the second footer column.
 * - $page['footer_thirdcolumn']: Items for the third footer column.
 * - $page['footer_fourthcolumn']: Items for the fourth footer column.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see master_process_page()
 * @see html.tpl.php
 */
?>
<?php if($messages) print '<div class="messageLog">' . $messages . '</div>'; ?>
<div id="staticPanel">
    <div id="topLine">
        <?php if ($page['top_menu'] || $page['search']) { ?>
            <?php if ($page['top_menu']) { ?>
                <div class="topMenu">
                    <?php print render($page['top_menu']); ?>
                </div><!-- topMenu -->
            <?php }; ?>

            <?php if ($page['search']) { ?>
                <div id="search">
                    <?php print render($page['search']); ?>
                </div><!-- search -->
            <?php }; ?>

        <?php }; ?>
    </div><!-- topLine -->
            
    <?php if ($logo) { ?>
        <div class="logoPanel">
            <a href="<?php print check_url($front_page); ?>" title="<?php print t('Home'); ?>">
                <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
            </a>
        </div><!-- logoPanel -->
    <?php }; ?>
            
    <?php if ($main_menu) { ?>
        <div class="maimMenu">
            <nav id="site-navigation" class="navbar navbar-default" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-navbar-collapse">
                        <i class="fa fa-bars"></i>
                    </button>
                    <div id="main-navbar-collapse" class="navbar-collapse collapse">
                        <?php print theme('links__system_main_menu', array('links' => $main_menu));?>
                    </div><!-- main-navbar-collapse -->
                </div><!-- navbar-header -->
            </nav><!-- #site-navigation -->
        </div><!-- maimMenu -->
    <?php }; ?>
</div><!-- staticPanel -->

<div id="wrapper" class="default">
    <div class="wrapper">
<div class="row">
     <?php if (drupal_is_front_page()) { ?>
        <div class="page_content">
            <div id="page1" class="<?php print (drupal_is_front_page()) ? 'homePage1 ' : 'otherPage '; ?>">
                <div class="row top_info">
                    <div class="col-lg-6">
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
                                    "fa-vk" => $vk
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
                    </div><!-- col-lg-6 -->
                    <div class="col-lg-6">
                        <?php if ($page['first_news']) { ?>
                            <div class="first_news"><?php print render($page['first_news']); ?></div>   
                        <?php }; ?>
                    </div>
                </div><!-- row -->
                <?php if ($page['top1'] || $page['top2'] || $page['top3'] || $page['top4']) { ?>

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
                 
                    <?php }; ?>

                    <div id="second_news">
                        <?php if ($page['second_news']) { ?>
                            <div class="second_news">
                                <?php print render($page['second_news']); ?>
                            </div>  
                        <?php }; ?>
                    </div>

            </div> <!-- page1 -->
        </div> <!-- page_content -->
        <?php }; ?>
</div> <!-- row -->

<?php if (drupal_is_front_page()) { ?>
<div class="row">
    <div id="page2">
        <?php if ($page['top_content1'] || $page['top_content2'] || $page['top_content3'] || $page['top_content4']) { ?>
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
        <?php }; ?>
    </div> <!-- page2 -->
</div> <!-- row -->
<?php }; ?>

<?php if ($site_slogan) { ?>
    <div class="row">
        <div class="col-lg-12">
            <h1 class="siteSlogan"><?php print $site_slogan ?></h1>
        </div><!-- col-lg-12 -->
    </div><!-- row -->
<?php }; ?>

<?php if (drupal_is_front_page()) { ?>
<div class="row">
    <div id="page3">
    <?php if ($page['line1'] || $page['line2'] || $page['line3'] || $page['line4']) { ?>
        <div id="line">

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

        </div><!-- line -->
        <?php }; ?>
    </div><!-- page3 -->
</div><!-- row -->
<?php }; ?>

<?php if ($messages) { ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="messageLog">
                <?php print $messages; ?>
            </div><!-- messageLog -->
        </div><!-- col-lg-12 -->
    </div><!-- row -->  
<?php }; ?>

<?php if (drupal_is_front_page()) { ?>
<div class="row">
    <div id="page4">
    <?php if ($page['feature1'] || $page['feature2'] || $page['feature3'] || $page['feature4']) {  ?>
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

<?php }; ?>
    </div>
</div><!-- row -->
<?php }; ?>

<?php if (drupal_is_front_page()) { ?>
<div class="row">
    <div id="page5">
        <div class="page5">
        <?php if ($page['contenttop1'] || $page['contenttop2'] || $page['contenttop3'] || $page['contenttop4']) { ?>
            <?php if ($page['contenttop1']) {  ?>
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

            <?php if ($page['contenttop2']) {  ?>
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

            <?php if ($page['contenttop3']) {  ?>
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

            <?php if ($page['contenttop4']) {  ?>
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
        <?php }; ?>
        </div>
    </div>
</div>
 <?php }; ?>


<div class="row">
    <?php if ($page['sidebar_left'] || $page['content'] || $page['sidebar_right']) { ?>
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

        <?php if ($page['sidebar_right']) { ?>
        <div class="col-xs-12 col-lg-3">
            <div id="sidebar_right">
                <?php print render($page['sidebar_right']); ?>
            </div>
        </div>
        <?php }; ?>
    <?php }; ?>
</div>      

<?php if (drupal_is_front_page()) { ?>
<div class="row">
    <div class="bottom_line">
        <?php if ($page['bottom_line1'] || $page['bottom_line2'] || $page['bottom_line3'] || $page['bottom_line4']) { ?>

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

        <?php }; ?>
    </div>    
</div>
<?php }; ?>

<?php if (drupal_is_front_page()) { ?>
<div class="row">
    <div class="content_bottom">
        <?php if ($page['contentbottom1'] || $page['contentbottom2'] || $page['contentbottom3'] || $page['contentbottom4']) { ?>
            
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
    </div>
      <?php }; ?>
    <?php }; ?>
</div>
<?php }; ?>
</div>


<?php if (drupal_is_front_page()) { ?>
<div class="row">
        <?php if ($page['bottom1'] || $page['bottom2'] || $page['bottom3'] || $page['bottom4']) { ?>
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
        <?php }; ?>
</div>
<?php }; ?>

<?php if (drupal_is_front_page()) { ?>
<div class="row">
        <?php if ($page['last1'] || $page['last2'] || $page['last3'] || $page['last4']) { ?>
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
                    <div id="bottom3"><?php print render($page['last3']); ?></div>
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
        <?php }; ?>
</div>

<?php }; ?>


<div id="footer">
    <div class="row">
        <?php if ($page['footer_menu']) { ?>
            <div id="footer_menu">
                <div class="col-lg-12">
                    <?php print render($page['footer_menu']); ?>
                </div>
            </div>
        <?php }; ?>
    </div>

    <div class="row">    
        <?php if ($page['footer1'] || $page['footer2'] || $page['footer3'] || $page['footer4']) { ?>
        
            <?php if ($page['footer1']) { ?>
                <div class="<?php if($page['footer2'] & $page['footer3'] & $page['footer4']) { echo 'col-lg-3';} ?>
                <?php if($page['footer2'] xor $page['footer3'] xor $page['footer4']) { echo 'col-lg-6'; } 
                 else if ($page['footer2'] & $page['footer3']){echo ('col-lg-4');} 
                 else if ($page['footer2'] & $page['footer4']){echo ('col-lg-4');}
                 else if ($page['footer3'] & $page['footer4']){echo ('col-lg-4');}
                 else if ($page['footer2'] xor $page['footer3']){echo ('col-lg-4');}
                 else if ($page['footer2'] xor $page['footer4']){echo ('col-lg-4');}
                 else if ($page['footer3'] xor $page['footer4']){echo ('col-lg-4');}
                 else {echo('col-lg-12');} ?>">
                    <div id="footer1"><?php print render($page['footer1']); ?></div>
                </div>
            <?php }; ?>

            <?php if ($page['footer2']) { ?>
                <div class="<?php if($page['footer1'] & $page['footer3'] & $page['footer4']) { echo 'col-lg-3';} ?>
                <?php if($page['footer1'] xor $page['footer3'] xor $page['footer4']) { echo 'col-lg-6'; } 
                 else if ($page['footer1'] & $page['footer3']){echo ('col-lg-4');} 
                 else if ($page['footer1'] & $page['footer4']){echo ('col-lg-4');}
                 else if ($page['footer3'] & $page['footer4']){echo ('col-lg-4');}
                 else if ($page['footer1'] xor $page['footer3']){echo ('col-lg-4');}
                 else if ($page['footer1'] xor $page['footer4']){echo ('col-lg-4');}
                 else if ($page['footer3'] xor $page['footer4']){echo ('col-lg-4');}
                 else {echo('col-lg-12');} ?>">
                    <div id="footer2"><?php print render($page['footer2']); ?></div>
                </div>
            <?php }; ?>

            <?php if ($page['footer3']) { ?>
                <div class="<?php if($page['footer1'] & $page['footer2'] & $page['footer4']) { echo 'col-lg-3';} ?>
                <?php if($page['footer1'] xor $page['footer2'] xor $page['footer4']) { echo 'col-lg-6'; } 
                 else if ($page['footer1'] & $page['footer2']){echo ('col-lg-4');} 
                 else if ($page['footer1'] & $page['footer4']){echo ('col-lg-4');}
                 else if ($page['footer2'] & $page['footer4']){echo ('col-lg-4');}
                 else if ($page['footer1'] xor $page['footer2']){echo ('col-lg-4');}
                 else if ($page['footer1'] xor $page['footer4']){echo ('col-lg-4');}
                 else if ($page['footer2'] xor $page['footer4']){echo ('col-lg-4');}
                 else {echo('col-lg-12');} ?>">
                    <div id="footer3"><?php print render($page['footer3']); ?></div>
                </div>
            <?php }; ?>

            <?php if ($page['footer4']) { ?>
                <div class="<?php if($page['footer1'] & $page['footer2'] & $page['footer3']) { echo 'col-lg-3';} ?>
                <?php if($page['footer1'] xor $page['footer2'] xor $page['footer3']) { echo 'col-lg-6'; } 
                 else if ($page['footer1'] & $page['footer2']){echo ('col-lg-4');} 
                 else if ($page['footer1'] & $page['footer3']){echo ('col-lg-4');}
                 else if ($page['footer2'] & $page['footer3']){echo ('col-lg-4');}
                 else if ($page['footer1'] xor $page['footer2']){echo ('col-lg-4');}
                 else if ($page['footer1'] xor $page['footer3']){echo ('col-lg-4');}
                 else if ($page['footer2'] xor $page['footer3']){echo ('col-lg-4');}
                 else {echo('col-lg-12');} ?>">
                    <div id="footer4"><?php print render($page['footer4']); ?></div>
                </div>
            <?php }; ?>
        
        <?php }; ?>
    </div>    

        <?php if ($site_name) { ?>
            <p class="siteName"><?php print $site_name ?></p>
        <?php }; ?>

    <div class="row">   
        <?php if ($show_hide_copyright) { ?>
            <div class="col-xs-12 col-lg-12">
                <div class="copyright">
                    <a href="<?php print ($copyright_url); ?> " target="_blank">
                        <?php print t('Copyright'). ' &copy; ' .date("Y"). ' ' .$copyright_developedby; ?>
                    </a>
                </div>
            </div>
        <?php }; ?>
    </div>
      
        <?php if ($secondary_menu) { ?>
            <div class="footerMenu">
                <?php print theme('links__system_secondary_menu', array('links' => $secondary_menu));?>
            </div>
        <?php }; ?>

        <!-- <div class="col-xs-12 col-lg-3">
            <div class="switchButton">
                <span class="bt-blue scrollup"></span>
                <span class="bt-lghtGre scrollup"></span>
                <span class="bt-orange scrollup"></span>
                <span class="bt-red scrollup"></span>
                <span class="bt-green scrollup"></span>
                <span class="bt-purple scrollup"></span>
            </div>
        </div> -->
    <div class="row">  
        <?php if ($show_hide_icon) { ?>
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
                            "fa-vk" => $vk
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
        <?php }; ?>
    </div>    
         
</div> <!--footer-->
</div>