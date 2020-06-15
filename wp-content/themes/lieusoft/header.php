<!DOCTYPE html>
<html>
<head>
   <meta name="google-site-verification" content="QzRWN4x1tn5RrhZI7UAo2Z_D_YodZpHZhog1FfKcLdU" />
   <title><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>
   <meta charset="utf-8">
   
   <meta name="Description" content="Lieusoft is dhaka based web application company. Living out your dream of being a small business on the Internet. We’re here to help you grow your business online. We’re a web design company that specializes on small business websites. Our talented team design you a clean and affordable web design.">
   <?php wp_head(); ?>
</head>
<body>
   <header>
      <div class="container">
         <div class="row">
            <div class="col-md-12">
              <p class="top_header pull-right">
                <?php 
                    $email = get_theme_mod('header_top_email');
                    $mobile = get_theme_mod('header_top_mobile');
                    $facebook = get_theme_mod('facebook');
                    $tweeter = get_theme_mod('tweeter');
                    $youtube = get_theme_mod('youtube');
                ?>
                
                <?php if ($email):?>
                <i class="fa fa-envelope fa-xs"></i>&nbsp;
                <a href="mailto:<?= $email; ?>"><u><?= $email; ?></u></a>&nbsp;
                <?php endif;?>
                
                <?php if ($mobile):?>
                <i class="fa fa-phone fa-xs"></i>&nbsp;
                <a href="tel:<?= $mobile; ?>"><?= $mobile; ?></a>&nbsp;
                <?php endif;?>
                
                <?php if ($facebook):?>
                <a href="<?= $facebook; ?>" target="_blank"><i class="fa fa-facebook-square fa-lg text-info"></i></a> 
                <?php endif;?>
                <?php if ($tweeter):?>
                <a href="<?= $tweeter; ?>"><i class="fa fa-twitter-square fa-lg text-primary"></i></a>
                <?php endif;?>
                <?php if ($youtube):?> 
                <a href="<?= $youtube; ?>"><i class="fa fa-youtube-square fa-lg text-danger"></i></a>
                <?php endif;?>
                </p>
            </div>
         </div>
         <div class="row" id="menu_area">
            <div class="col-md-3">
               <?php $header_logo = get_theme_mod('header_logo_upload') ?>
                        <a href="<?= site_url(); ?>" class="text-center d-block">
                        <img src="<?= $header_logo; ?>" alt="lieu soft logo" title="Lieu soft" class="">
                      </a><br>
               <small><?= get_bloginfo('description');?></small>
            </div>
            <div class="col-md-9">
               <nav class="navbar navbar-default">
                   <div class="navbar-header">
                     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                       <span class="sr-only">Lieusoft</span>
                       <span class="icon-bar"></span>
                       <span class="icon-bar"></span>
                       <span class="icon-bar"></span>
                     </button>
                   </div>
                   <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                     <?php
                           wp_nav_menu( array(
                               'menu'              => 'primary',
                               'theme_location'    => 'primary',
                               'depth'             => 4,
                               'menu_class'        => 'nav navbar-nav navbar-right',
                               'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                               'walker'            => new wp_bootstrap_navwalker())
                           );
                       ?>
                   </div>
               </nav>
            </div>
         </div>
         <hr>
      </div>
   </header>