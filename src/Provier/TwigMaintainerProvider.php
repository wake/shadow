<?php

  namespace Shadow\Provider;

  use Shadow\View\Twig\Maintainer;


  /**
   *
   * Register Twig Maintainer provider
   *
   */
  class TwigMaintainerProvider extends ServiceProvider {


    /**
     *
     * Register
     *
     */
    public function register () {
      $this->app->singleton (Maintainer::class, function ($app) {
        return new Maintainer ();
      });
    }
  }
