<?php

  namespace Shadow;

  use Laravel\Lumen;


  class Application extends Lumen\Application {


    /**
     * Get the path to the application's language files.
     *
     * @return string
     */
    protected function getLanguagePath () {

      $langPath = env ('APP_LANG_PATH', '/resource/lang');

      if (is_dir ($path = $this->basePath () . $langPath))
        return $path;

      else
        return __DIR__ . '/..' . $langPath;
    }
  }
