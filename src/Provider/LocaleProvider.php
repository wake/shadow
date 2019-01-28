<?php

  namespace Shadow\Provider;

  use Shadow;
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
        $middleware = [Shadow\Http\Middleware\Locale::class];

      $app->middleware ($middleware);

      // Load function
      require_once '../View/Twig/Function/Locale.php';

      // Add to Twig
      Mtner::addFunction ('locale_url', ['callback' => 'locale_url']);
    }
  }
