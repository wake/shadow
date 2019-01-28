<?php

  namespace Shadow\Email;

  use Laravel\Lumen;


  /**
   *
   * Email base
   *
   */
  class Base {


    /**
     *
     * Instance
     *
     */
    public $mailer;


    /**
     *
     * Options
     *
     */
    public $options;


    /**
     *
     * Construct
     *
     */
    public __construct ($options) {
      $this->options = $options;
    }


    /**
     *
     * Get mailer
     *
     */
    public mailer () {
      return $this->mailer;
    }


    /**
     *
     * Create
     *
     */
    public create () {

      $this->mailer = new Object ();

      return $this;
    }


    /**
     *
     * From
     *
     */
    public from ($emailOrArray, $name) {
      return $this;
    }


    /**
     *
     * To
     *
     */
    public to ($emailOrArray, $name) {
      return $this;
    }


    /**
     *
     * Subject
     *
     */
    public subject ($subject) {
      return $this;
    }


    /**
     *
     * Content
     *
     */
    public content ($content) {
      return $this;
    }


    /**
     *
     * Send
     *
     */
    public send () {
      return $this;
    }
  }
