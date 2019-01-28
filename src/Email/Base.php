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
    public function __construct ($options) {
      $this->options = $options;
    }


    /**
     *
     * Get mailer
     *
     */
    public function mailer () {
      return $this->mailer;
    }


    /**
     *
     * Create
     *
     */
    public function create () {

      $this->mailer = new Object ();

      return $this;
    }


    /**
     *
     * From
     *
     */
    public function from ($emailOrArray, $name) {
      return $this;
    }


    /**
     *
     * To
     *
     */
    public function to ($emailOrArray, $name) {
      return $this;
    }


    /**
     *
     * Subject
     *
     */
    public function subject ($subject) {
      return $this;
    }


    /**
     *
     * Content
     *
     */
    public function content ($content) {
      return $this;
    }


    /**
     *
     * Send
     *
     */
    public function send () {
      return $this;
    }
  }
