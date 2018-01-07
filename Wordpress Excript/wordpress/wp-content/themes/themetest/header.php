<!DOCTYPE html>
<html <?php language_attributes(); ?>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- As 3 meta tags acima *devem* vir em primeiro lugar dentro do `head`; qualquer outro conteúdo deve vir *após* essas tags -->
    <meta name="description" content-"<?php bloginfo('description') ?>"/>
    <title><?php wp_title('|', true, 'right') ?><?php bloginfo('name'); ?></title>

    <?php wp_head() ?>
  </head>
  <body <?php body_class() ?>>
          <!-- cabeçalho -->
          <nav class="navbar navbar-default navbar-fixed-top">
              <div class="container">
                  <div class="navbar-header">
                    <button type="button"class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>

                      <a href="#" class="navbar-brand"><?php bloginfo('url'); ?>
                        <?php bloginfo('name'); ?>
                      </a>
                  </div>
                  <div id="navbar" class="navbar-collapse collapse navbar-right">
                    <?php
                    wp_nav_menu(array(
                      'menu' => 'primary',
                      'theme_location' => 'primary',
                      'depth' => '2',
                      'container' => 'div',
                      'container_class' => 'collapse navbar-collapse nav-ex1-collapse',
                      'menu_class' => 'nav navbar-nav',
                      'fallback_cb' => 'wo_bootstrap_navwalker::fallback',
                      'walker' => new wp_bootstrap_navwalker()
                    ));
                     ?>
                  </div>
              </div>
          </nav>
