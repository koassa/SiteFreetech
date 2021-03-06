<?php

/**
 * @file
 * Bartik's theme implementation to display a single Drupal page.
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
 *   or themes/bartik.
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
 * @see bartik_process_page()
 * @see html.tpl.php
 */
?>
<div class="container">
  <div id="page">

    <header class="row">
    <div class="col-md-4 col-sm-12">
        <div class="row">
      <div class="col-md-6 col-sm-6">
        

        <?php if ($logo): ?>
      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
        <img class="img-responsive " 
        style="height:190px;"  src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
      </a>
    <?php endif; ?>

      </div>      
      <div class="col-md-6 col-sm-6 marge-logo" >
          <a href="#">
            <h1 >Institut </br>FreeTech</h1>
          </a>
          </br>
          </br>
         <p class="slogan" >Le bon usage des TICs au service de tous !</p> </br>        
       </div>
        </div>    
       </div>
         <div class=" col-md-8 hidden-xs hidden-sm" style="background-color:rgb(214, 214, 231);height:170px; ">
          <center style="padding-top:45px;"> <h3>Espace pub </h3></center>
          <a href="http://localhost/drupal7/?q=admin">interface admin</a>
          <?php print render($page['connexion']); ?>
         </div>
  </header>

<div class="row" style="margin:20px -12px 60px -12px" >
      
    
        <!-- le menu -->
             
                
              <?php if ($main_menu): ?>
      <div id="main-menu" class="col-md-8 col-md-offset-2 hidden-xs hidden-sm navbar navbar-inverse">
        <?php print theme('links__system_main_menu', array(
          'links' => $main_menu,
          'attributes' => array(
            
            'class' => array('nav' , 'nav-justified'),
          ),
          'heading' => array(
            'text' => t('Main menu'),
            'level' => 'h2',
            'class' => array('element-invisible'),
          ),
        )); ?>
        
      </div> <!-- /#main-menu -->
    <?php endif; ?>
              
             
                   
    </div>

    <!--============================================================= -->
    <?php if ($breadcrumb): ?>
      <div id="breadcrumb"><?php print $breadcrumb; ?></div>
    <?php endif; ?>

<div class="row ">
  <!-- block gauche sup -->
    <div class="col-md-2 ">
    
     <?php if ($page['sidebar_first']): ?>
      <div id="sidebar-first" class="column sidebar"><div class="section">
        <?php print render($page['sidebar_first']); ?>
      </div></div> <!-- /.section, /#sidebar-first -->
    <?php endif; ?>
    
    
    </div>
    <!-- block milieu sup -->
      <div class="col-md-10 ">

        <div class="row">
          <div class="col-md-4 "><mark class="mark">Dernières études </mark>
        <div class="bord2"><br>
            <div>
              <?php print render($page['etudes']); ?>
              <ul class="forme">
              <li>test </li>
              </ul>
            </div>
        </div>
          </div>
          
              <div class="col-md-4 "><mark class="mark">Dernières applications </mark>

        <div class="bord2"><br>
             <div>
              <?php print render($page['application']); ?>
               <ul class="forme">
              <li>Développement sur terminaux mobiles</li>
              </ul>
            </div>
          </div>
              </div>
              
          <div class="col-md-4 "><mark class="mark">Projet R&D</mark>
        <div class="bord2"><br>
           <div>
            <?php print render($page['projet_rd']); ?>
             <ul class="forme">
              <li>Développement sur terminaux mobiles</li>
              </ul>
            </div>
          </div>
          </div>
        </div>

      </div>
      <!-- block gauche -->
    
  </div>
  <!--============================================================= -->

  <div id="main-wrapper" class="clearfix"><div id="main" class="clearfix">

    


   


    <?php if ($page['sidebar_second']): ?>
    


      <div id="sidebar-second" class="column sidebar"><div class="section">
        <?php print render($page['sidebar_second']); ?>
      </div></div> <!-- /.section, /#sidebar-second -->
    <?php endif; ?>

  </div></div> <!-- /#main, /#main-wrapper -->

  

  <div id="footer-wrapper"><div class="section">

    

<!--========================== test du contenu =======================================-->
 <div id="content" class="column"><div class="section">
      <?php if ($page['highlighted']): ?><div id="highlighted"><?php print render($page['highlighted']); ?></div><?php endif; ?>
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
      <?php if ($title): ?>
        <h1 class="title" id="page-title">
          <?php print $title; ?>
        </h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      
      
      <?php if ($action_links): ?>
      llolo
        <ul class="action-links">
          <?php print render($action_links); ?>
        </ul>
        koi
      <?php endif; ?>
      <?php print render($page['content']); ?>
      <?php print $feed_icons; ?>

    </div></div> 



    <footer>
       <div class="footer">
       
          

        <p class="pull-right"><a href="#">Back to top</a></p>
        <p style="text-align: center;">©  ifreetech 2015 all right reserved</p>
         
        </div>

</footer>

  </div></div> <!-- /.section, /#footer-wrapper -->

</div></div> <!-- /#page, /#page-wrapper -->
