<?php

  namespace Shadow\Provider;

  use Shadow\Http\Middleware;
  use Shadow\View\Twig\Maintainer as Mtner;
  use Illuminate\Support\ServiceProvider;


  /**
   *
   * Locale provider
   *
   */
  class LocaleProvider extends ServiceProvider {


    /**
     *
     * Register
     *
     */
    public function register ($middleware = null) {

      if (! $middleware)
        $middleware = [Middleware\Locale::class];

      $this->app->middleware ($middleware);

      // Load function
      require_once __DIR__ . '/../View/Twig/Function/Locale.php';

      // Add to Twig
      Mtner::addFunction ('locale_url', ['callback' => 'locale_url']);
    }
  }
