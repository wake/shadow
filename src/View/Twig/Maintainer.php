<?php

  namespace Shadow\View\Twig;


  /**
   *
   * Twig maintainer
   *
   */
  class Maintainer {


    /**
     *
     * Functions
     *
     */
    public static $funcs = [];


    /**
     *
     * Filters
     *
     */
    public static $filters = [];


    /**
     *
     * Construct
     *
     */
    public function __construct () {
    }


    /**
     *
     * Add function
     *
     */
    public static function addFunction ($name, $func) {
      static::$funcs[$name] = $func;
    }


    /**
     *
     * Add filter
     *
     */
    public static function addFileter ($name, $filter) {
      static::$filters[$name] = $filter;
    }


    /**
     *
     * Get functions
     *
     */
    public static function functions ($funcs) {
      return static::$funcs + $funcs;
    }


    /**
     *
     * Get filters
     *
     */
    public static function filters ($filters) {
      return static::$filters + $filters;
    }
  }
