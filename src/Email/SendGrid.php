<?php

  namespace Shadow\Email;

  use SendGrid;


  /**
   *
   * SendGrid base
   *
   */
  class SendGrid {


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
     * Log
     *
     */
    public $log;


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

      $this->mailer = new SendGrid\Mail\Mail ();

      return $this;
    }


    /**
     *
     * From
     *
     */
    public from ($emailOrArray, $name) {

      $from = $emailOrArray;

      if (is_string ($emailOrArray))
        $from[$emailOrArray] = $name;

      foreach ($from as $email => $name)
        $this->mailer->setFrom ($email, $name);

      return $this;
    }


    /**
     *
     * To
     *
     */
    public to ($emailOrArray, $name) {

      $to = $emailOrArray;

      if (is_string ($emailOrArray))
        $to[$emailOrArray] = $name;

      foreach ($to as $email => $name)
        $this->mailer->addTo ($email, $name);

      return $this;
    }


    /**
     *
     * Subject
     *
     */
    public subject ($subject) {

      $this->mailer->setSubject ($subject);

      return $this;
    }


    /**
     *
     * Text
     *
     */
    public text ($content) {
      return $this->content ("text/plain", $content);
    }


    /**
     *
     * HTML
     *
     */
    public html ($content) {
      return $this->content ("text/html", $content);
    }


    /**
     *
     * Content
     *
     */
    public content ($type, $content) {

      $this->mailer->addContent ($type, $content);

      return $this;
    }


    /**
     *
     * Send
     *
     */
    public send () {

      // Generate SendGrid
      $sg = new SendGrid ($this->options['key']);

      // Send
      $resp = $sg->send ($this->mailer);

      $this->log[] = [
        'code'    => $response->statusCode (),
        'headers' => $response->headers (),
        'body'    => $response->body ()
      ];

      return $this;
    }
  }
