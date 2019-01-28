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
    public $funcs = [];


    /**
     *
     * Filters
     *
     */
    public $filters = [];


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
    public function addFunction ($name, $func) {
      $this->funcs[$name] = $func;
      return $this;
    }


    /**
     *
     * Add filter
     *
     */
    public function addFileter ($name, $filter) {
      $this->filters[$name] = $filter;
      return $this;
    }


    /**
     *
     * Get functions
     *
     */
    public function functions ($funcs) {
      return $this->funcs + $funcs;
    }


    /**
     *
     * Get filters
     *
     */
    public function filters ($filters) {
      return $this->filters + $filters;
    }
  }
