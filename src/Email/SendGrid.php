<?php

  namespace Shadow\Email;

  use SendGrid as SG;


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
    public function __construct ($options) {

      if (! isset ($options['key']) || $options['key'] == '')
        throw new Exception ('You need to assign SendGrid API key before using.');

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

      $this->mailer = new SG\Mail\Mail ();

      return $this;
    }


    /**
     *
     * From
     *
     */
    public function from ($emailOrArray, $name = null) {

      $from = $emailOrArray;

      if (is_string ($emailOrArray))
        $from = [$emailOrArray => $name];

      foreach ($from as $email => $name)
        $this->mailer->setFrom ($email, $name);

      return $this;
    }


    /**
     *
     * To
     *
     */
    public function to ($emailOrArray, $name = null) {

      $to = $emailOrArray;

      if (is_string ($emailOrArray))
        $to = [$emailOrArray => $name];

      foreach ($to as $email => $name)
        $this->mailer->addTo ($email, $name);

      return $this;
    }


    /**
     *
     * Subject
     *
     */
    public function subject ($subject) {

      $this->mailer->setSubject ($subject);

      return $this;
    }


    /**
     *
     * Text
     *
     */
    public function text ($content) {
      return $this->content ("text/plain", $content);
    }


    /**
     *
     * HTML
     *
     */
    public function html ($content) {
      return $this->content ("text/html", $content);
    }


    /**
     *
     * Content
     *
     */
    public function content ($type, $content) {

      $this->mailer->addContent ($type, $content);

      return $this;
    }


    /**
     *
     * Send
     *
     */
    public function send () {

      // Generate SendGrid
      $sg = new SG ($this->options['key']);

      // Send
      $response = $sg->send ($this->mailer);

      $this->log[] = [
        'code'    => $response->statusCode (),
        'headers' => $response->headers (),
        'body'    => $response->body ()
      ];

      return $this;
    }
  }
