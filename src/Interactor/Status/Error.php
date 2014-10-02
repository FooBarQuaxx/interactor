<?php namespace Deefour\Interactor\Status;

use Deefour\Interactor\Status;
use Deefour\Interactor\Context;

/**
 * Error status object. This is instantiated when an interactor is marked as
 * failed.
 */
class Error extends Status {

  /**
   * The error message for the status object
   *
   * @var string
   */
  protected $error = 'Oops! Something went wrong.';

  /**
   * {@inheritdoc} Optionally overrides the default error message.
   *
   * @param  \Deefour\Interactor\Context  $context
   * @param  string  $error  [optional]
   * @return void
   */
  public function __construct(Context $context, $error = null) {
    $this->error   = $error;

    parent::__construct($context);
  }

  /**
   * {@inheritdoc}
   */
  public function ok() {
    return false;
  }

  /**
   * {@inheritdoc}
   */
  public function __toString() {
    return $this->error();
  }

  /**
   * Getter for the error message
   *
   * @return string
   */
  public function error() {
    return $this->error;
  }

}