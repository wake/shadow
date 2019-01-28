<?php


  use Shadow\View\Twig\Maintainer as Mtner;


  /**
   *
   * Load extends
   *
   */
  require_once 'View/Twig/Function/Locale.php';


  /**
   *
   * Add to Twig functions
   *
   */
  Mtner::addFunction ('locale_url', ['callback' => 'locale_url']);
