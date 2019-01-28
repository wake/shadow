<?php


if (! function_exists ('locale_url')) {


  /**
   * Get session instance.
   *
   * @return object
   */
  function locale_url ($lang) {

    $request = app ('request');

    $uri = $request->getUri ();
    $query = $request->getQueryString ();

    if (! is_null ($query) && $query != '')
      $uri = "$uri&lang=$lang";

    else
      $uri = "$uri?lang=$lang";

    return $uri;
  }
}
