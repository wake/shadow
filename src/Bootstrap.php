<?php


  use Shadow\View\Twig\Maintainer as Mtner;


  /**
   *
   * i18n / translator + Twig
   *
   */
  if (env ('APP_I18N_ENABLE', false)) {

    // Load function
    require_once 'View/Twig/Function/Locale.php';

    // Add to Twig
    Mtner::addFunction ('locale_url', ['callback' => 'locale_url']);
  }
