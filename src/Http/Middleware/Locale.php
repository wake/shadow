<?php


  namespace Shadow\Http\Middleware;

  use Closure;


  /**
   *
   * Locale
   *
   */
  class Locale {


    /**
     *
     * Parameters
     *
     */
    protected $login;
    protected $user;


    /**
     *
     * Construct
     *
     */
    public function __construct () {
    }


    /**
     *
     * Handle an incoming request.
     *
     */
    public function handle ($request, Closure $next, $guard = null) {

      $langs = explode (',', env ('APP_LOCALES', 'zh'));
      $lang = $request->query->get ('lang');

      if (in_array ($lang, $langs))
        $request->session ()->put ('_locale', $lang);

      $lang = $request->session ()->get ('_locale');

      if (in_array ($lang, $langs))
        app ('translator')->setLocale ($lang);

      return $next ($request);
    }
  }
